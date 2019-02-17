<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Music DB Admin</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>

<div class="container-fluid">
  <h1 class="mt-2">SQL Playground</h1>

  <p>
    This page runs against
    <a
      href="http://www.sqlitetutorial.net/sqlite-sample-database/"
      target="_blank">
      this SQLite database.
    </a>
  </p>

  <div id="editor" class="editor mb-3"></div>
  <button
    type="button"
    id="run-sql"
    class="btn btn-primary">Run SQL</button>

  <div id="results" class="mt-4"></div>
</div>

<script src="/js/ace.js"></script>
<script src="/js/app.js"></script>

</body>
</html>
