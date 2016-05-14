<!DOCTYPE html>
<html>


<html class="full" lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AutoLeilões</title>

  <link href="../css/navigation-bar.css" rel="stylesheet">
  <link href="../css/bootstrap.css" rel="stylesheet">
  
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css"/>
  

</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <!--<a href="#" class="pull-left" id="logo"><img src="../images/logo.png"></a>-->
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">AutoLeilões</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <!-- /.navbar-collapse -->
      {if $USERNAME}
      {include file='common/logged-in.tpl'}
      {else}
      {include file='common/logged-out.tpl'}
      {/if}
    </div>
  </nav>

  <div id="error_messages">
    {foreach $ERROR_MESSAGES as $error}
    <div class="alert alert-danger">
      <a href="#" class="close" data-dismiss="alert">&times;</a>
      <strong>Error!</strong> {$error}.
    </div>
    {/foreach}
  </div>

  <div id="success_messages">
    {foreach $SUCCESS_MESSAGES as $success}
    <div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert">&times;</a>
      <strong>Success!</strong> {$success}.
    </div>
    {/foreach}
  </div>

