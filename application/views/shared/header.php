<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <?php
    if(isset($Title)&&isset($Description))
    {
    echo "<title>$Title</title>";
    echo "<meta name='description' content='echo $Description'>";
    }
    ?>
    <!-- Bootstrap -->
    <link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/themes/css/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container wrapper">
      <header>
        <h1>HTN.com</h1>
        <!-- <nav class="nav">
        <ul style="">
          <li><a href="index.php?c=home&a=index">Home</a></li>
          <li><a href="index.php?c=about&a=index">About</a></li>
          <li><a href="index.php?c=news&a=index">News</a></li>
          <li><a href="index.php?c=home&a=nolayout">Onlytext</a></li>
          <li><a href="index.php?c=xxx">xxx</a></li>
        </ul>
      </nav> -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php?c=home&a=index">HTN</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="main-menu">
            <ul class="nav navbar-nav">

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="index.php?c=home&a=index">Index</a></li>
                  <li><a href="index.php?c=home&a=hotnews">Hotnews</a></li>
                  <li><a href="index.php?c=home&a=Nolayout">Nolayout</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="index.php?c=about&a=index">Index</a></li>

                  <li><a href="index.php?c=about&a=contact">Contact</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="index.php?c=news&a=Index">Index</a></li>

                  <li><a href="index.php?c=news&a=news">News</a></li>
                </ul>
              </li>
              <li><a href="index.php?c=err&a=err404">Err <span class="sr-only">(current)</span></a></li>

            </ul>


          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      </header>
      <section class="clearfix">
