<template>
  <table class="table table-striped table-sm" v-if="rows">
    <thead>
      <tr>
        <th v-for="header in headers">{{header}}</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="row in rows">
        <td v-for="value in row">{{value}}</td>
      </tr>
      <tr v-if="!rows.length">
        <td>No records found.</td>
      </tr>
    </tbody>
  </table>
  <p v-else>
    Run a SQL statement.
  </p>
</template>

<script>
  export default {
    props: ['headers', 'rows']
  }
</script>
