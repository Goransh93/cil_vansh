<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet"  href="<?php echo base_url('assets/css/bootstrap.css')?>">
  <script type='text/javascript' src="<?php echo base_url('assets/js/sample.js') ?>"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
</head>
<body>
<header>
        <div class="container-fluid p-0">
            <div class="color">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.php">Legal Menia</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="mr-auto"></div>
                        <ul class="navbar-nav mr-10 ">
                            <li class="nav-item active px-2">
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item dropdown px-2">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Services
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Legal Documentation</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Registration Services</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Other Professional Services</a>
                                </div>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link" href="contact.php">Contact Us</a>
                            </li>

                        </ul>
                        <form class="form-inline mr-0 my-lg-0 px-2">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>

        <div class="container-fluid p-0 text-center">
            <div class="banner">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <img class="nature" src="assets/cover1.jpg" width="100%">
                        <img class="nature" src="assets/slider1.jpg" width="100%">
                        <img class="nature" src="assets/coverpic.jpg" width=" 100%">
                        <div class="overlay">
                            <div class="contain">
                                <div class="mainbanner">
                                    <div class="maincontent">
                                        <h1>LEGALLY VERIFIED</h1>
                                        <p>Let's Automate Legal Process</p>
                                        <button type="button" class="btn btn-outline-warning px-5 py-2">Contact
                                            us</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </header>