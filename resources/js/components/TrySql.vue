<template>
  <div>
    <sql-editor
      placeholder="SELECT * FROM tracks"
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
  export default {
    data() {
      return {
        error: false,
        headers: [],
        rows: []
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
          this.headers = Object.keys(results[0]);
          this.rows = results.map((record) => {
            return Object.values(record);
          });
        }, (error) => {
          this.error = true;
        });
      }
    }
  }
</script>
