<template>
  <div>
    <sql-editor
      v-bind:placeholder="sql"
      @change="setSQL"></sql-editor>
    <async-button class="mt-3" @click="executeQuery">
      Run SQL
    </async-button>
    <div class="mt-4">
      <error v-if="error">
        Looks like you have an error in your SQL.
      </error>
      <data-table
        v-else
        v-bind:headers="headers"
        v-bind:rows="rows"></data-table>
    </div>
  </div>
</template>

<script>
  const { keys, values } = Object;

  export default {
    data() {
      return {
        sql: 'SELECT * FROM tracks',
        error: false,
        headers: null,
        rows: null
      };
    },
    methods: {
      setSQL(sql) {
        this.sql = sql;
      },
      executeQuery() {
        return window.fetch('/query', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({ sql: this.sql })
        })
        .then((response) => {
          if (response.ok) {
            return response.json();
          } else {
            return new Promise((resolve, reject) => {
              response.text().then((text) => {
                reject(text);
              });
            });
          }
        })
        .then((results) => {
          this.error = false;

          if (results.length) {
            this.headers = keys(results[0]);
            this.rows = results.map((record) => values(record));
          } else {
            this.headers = [];
            this.rows = [];
          }
        }, (error) => {
          this.error = true;
        });
      }
    }
  }
</script>
