<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>@yield('title') - David Tang</title>
  <link rel="stylesheet" href="/css/app.css">

  <meta name="keywords" content="SQL, database, databases, interactive, structured query language">
  <meta name="description" content="An interactive playground to learn SQL without installing anything.">

  <meta property="og:title" content="Try SQL" />
  <meta property="og:description" content="An interactive playground to learn SQL without installing anything." />
  <meta property="og:url" content="https://try-sql.herokuapp.com" />
  <meta property="og:image" content="/images/db.png" />

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@iamdtang" />
  <meta name="twitter:title" content="Try SQL" />
  <meta name="twitter:description" content="An interactive playground to learn SQL without installing anything." />
  <meta name="twitter:image" content="/images/db.png" />
  <meta name="twitter:image:alt" content="database icon" />
</head>
<body>

<header>
  <h1 class="p-3">Try SQL</h1>
</header>

<div class="container-fluid" id="app" style="padding-bottom: 60px;">
  <p class="mt-3">
    A playground to practice SQL on a real database. This page runs against
    <a
      href="http://www.sqlitetutorial.net/sqlite-sample-database/"
      target="_blank">
      this SQLite database.
    </a>
  </p>
  @yield('content')
</div>

<footer>
	<div class="container-fluid">
    <div class="mb-3">
      Created by <a href="https://twitter.com/iamdtang" target="_blank">@iamdtang</a>
    </div>
	</div>
</footer>

<script src="/js/vendor/ace.js"></script>
<script src="/js/app.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-47251549-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-47251549-4');
</script>

</body>
</html>
