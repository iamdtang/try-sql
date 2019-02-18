<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="/css/app.css">

  <meta name="keywords" content="SQL, database, databases, interactive, structured query language">
  <meta name="description" content="An interactive playground to learn SQL without installing anything.">

  <meta property="og:title" content="SQL Playground" />
  <meta property="og:description" content="An interactive playground to learn SQL without installing anything." />
  <meta property="og:url" content="https://try-sql.herokuapp.com" />
  <!-- <meta property="og:image" content="https://davidtang.io/images/cards/elixir" /> -->

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@iamdtang" />
  <meta name="twitter:title" content="SQL Playground" />
  <meta name="twitter:description" content="An interactive playground to learn SQL without installing anything." />
  <!-- <meta name="twitter:image" content="https://davidtang.io/images/cards/elixir-thumb.png" />
  <meta name="twitter:image:alt" content="SQL logo" /> -->
</head>
<body>

@yield('content')

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
