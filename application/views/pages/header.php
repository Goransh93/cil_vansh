
<!DOCTYPE html>
<html>
<head>
  <title>Legal Menia</title>
 
  <!-- jquery js-->
   <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>

   <!-- bootstrap js -->
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <!-- bootstrap css -->
 <link rel="stylesheet"  href="<?php echo base_url('assets/css/bootstrap.css')?>">
 
 <!-- style.css --> 
  <link rel="stylesheet"  href="<?php echo base_url('assets/css/style.css')?>">
  
<!-- ckeditor -->
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
  
<!-- fontawesome -->
<!--   <script src="https://kit.fontawesome.com/ba2f52a837.js" crossorigin="anonymous"></script> -->

</head>
<body>
  <header>
<!--  <div class="container-fluid p-0">
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
        </div> -->
        <style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
