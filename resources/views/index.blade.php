<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>SQL Playground</title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>

<div class="container-fluid" id="app">
  <h1 class="mt-2">SQL Playground</h1>

  <p>
    This page runs against
    <a
      href="http://www.sqlitetutorial.net/sqlite-sample-database/"
      target="_blank">
      this SQLite database.
    </a>
  </p>

  <try-sql></try-sql>
</div>

<script src="/js/vendor/ace.js"></script>
<script src="/js/app.js"></script>

</body>
</html>
