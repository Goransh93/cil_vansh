<!DOCTYPE html>
<html>
<head>
	<title>Articles List</title>
	<link rel="stylesheet"  href="<?php echo base_url('assets/css/bootstrap.css')?>">
	<!--<link rel="stylesheet"     href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/lux/bootstrap.min.css">-->

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <?= anchor ('user', 'Articles', 'class="navbar-brand"');?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
     
        <?= anchor ('login', 'Login', 'class="nav-link"');?>
      </li>    
    </ul>
    <?= form_error('search', '<div class="error">', '</div>');?>
      <?=form_open('user/search_articles', 'class="form-inline my-2 my-lg-0"');?>
       <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
     </div>

</nav>