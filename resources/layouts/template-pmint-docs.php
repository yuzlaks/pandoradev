<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PandoraDocs - Mint</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/scribbler-global.css') }}">
<link rel="stylesheet" href="{{ asset('css/scribbler-landing.css') }}">
  <link rel="stylesheet" href="{{ asset('css/scribbler-doc.css') }}">
  <link rel="stylesheet" href="{{ asset('css/prism.css') }}">
  <!-- tree -->
  <link href="{{ asset('tree/css/file-explore.css') }}" rel="stylesheet">

  <!-- Font awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<style>
  .directory{
    background-color: #dfe6e9;
    padding: 5px;
    color: #3d3d3d;
    width: 100%;
    margin-bottom: -10px !important;
  }

  .quote{
    background-color: #ffeaa7;
    padding: 5px;
    color: #3d3d3d;
  }

</style>

<body>

<div class="doc__bg"></div>
  <nav class="header">
    <h1 class="logo">Pandoracode<span class="logo__thin">Mint</span></h1>
    <ul class="menu">
      <div class="menu__item toggle"><span></span></div>
      <li class="menu__item"><a href="" class="link link--dark"><i class="fa fa-graduation-cap"></i> Kursus</a></li>
      <li class="menu__item"><a href="index.html" class="link link--dark"><i class="fa fa-globe"></i> Forum</a></li>
    </ul>
  </nav>

!! yield content !!

<footer class="footer">Scribbler is a free HTML template created exclusively for <a href="https://tympanus.net/codrops/" target="_blank" class="link link--light">Codrops</a>.</footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
  <script>
    hljs.initHighlightingOnLoad();
  </script>
  <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
  <script src="{{ asset('js/scripts.js') }}"></script>
  <script src="{{ asset('js/prism.js') }}"></script>
  <script src="{{ asset('tree/js/file-explore.js') }}"></script> 
  <script src="{{ asset('js/scribbler.js') }}"></script>

  <script>
    $(document).ready(function() {
      $(".file-tree").filetree();
    });
  </script>
</body>

</html>