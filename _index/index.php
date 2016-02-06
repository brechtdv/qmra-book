<!DOCTYPE html>
<html>
  <head>
    <title>Quantitative Food Safety</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="www/bootstrap.min.css" rel="stylesheet">
    <link href="www/highlight.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Inconsolata:400,700'
      rel='stylesheet' type='text/css'>
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              Table of contents <b class="caret"></b>
            </a>
            <ul class="dropdown-menu pull-right" role="menu">
<?php
readfile("https://raw.githubusercontent.com/brechtdv/qmra-book/master/_index/nav.html");
?>
            </ul>
          </li>
        </ul>

        <h3 class="muted"><a href="/">Quantitative Food Safety</a> <small>by Brecht Devleesschauwer</small></h3>
        <hr>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-3" id="nav">

        <div class="well">
          Some other information.
        </div>

        <h4>Contents</h4>
          <ul data-toc=".content" data-toc-headings="h2,h3"></ul>

          <hr>
          <p><a href="/contribute.html">How to contribute</a></p>

          <p><a class="btn btn-primary" href="https://github.com/brechtdv/qmra-book/edit/master/index.rmd">Edit this page</a></p>
        </div>

        <div id="content" class="col-xs-12 col-sm-8 pull-right">
<?php
$nav = array("home", "intro", "distributions");

if (!empty($_GET["page"])) {
  if (in_array($_GET["page"], $nav)) {
    $go = $_GET["page"];

  } else {
    $go = "home";
  }

} else {
  $go = "home";
}

if ($go == "home") {
  $readme = "http://qmra.cbra.be/home.php";
} else {
  $readme = "https://raw.githubusercontent.com/brechtdv/qmra-book/master/" . $go . ".html";
}

readfile($readme);
?>

        </div>
      </div>

      <div class="footer">
        <hr>
        <p>Design inspired by <a href="http://r-pkgs.had.co.nz/">hadley</a>,
			powered by <a href="http://rmarkdown.rstudio.com/">rmarkdown</a>.
			Source available on <a href="https://github.com/brechtdv/qmra-book/">GitHub</a>.
        </p>
      </div>

    </div> <!-- /container -->

  <script>
  // add bootstrap table styles to pandoc tables
  $(document).ready(function () {
    $('tr.header').parent('thead').parent('table').addClass('table table-condensed');
  });
  </script>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
  <script src="www/jquery.toc.js" type="text/javascript"></script>
  <script src="www/bootstrap.min.js"></script>

  </body>
</html>
