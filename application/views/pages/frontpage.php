<!-- <?php //include ('header.php');?> -->
<?php include ('service_function.php');?>
          <!-- cover start -->
        <div class="container-fluid p-0 text-center">
            <div class="banner">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <img class="nature" src="<?php echo base_url('images/cover1.jpg')?>" width="100%">
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
    <!-- cover end -->

<!-- about us starts -->    
    <main>
        <section class="section-1">
            <div class="container-fluid text-center">
                <div class="row">
                    <div class="col-md-6">
                        <div class="pray">
                            <img src="<?php echo base_url('images/aboutus4.jpg')?>" alt="Responsive image">
                        </div>
                    </div>

                    <div class="col-md-6 ">
                        <div class="panel text-left">
                            <h1>About Us</h1>
                            <p pt-4>We as a legal firm have been into since 1970. Now with our new technology
                                initiative, it
                                is our pleasure to give online services to our customers to enhance our reach and share
                                our experience with all. </p>
                            <p>We as a legal firm have been into since 1970. Now with our new
                                technology initiative, it is our pleasure to give online services to our customers to
                                enhance our reach and share our
                                experience with all.</p>
                        </div>
                    </div>
                </div>


            </div>
        </section>
<!-- about us ends -->

<!-- features start -->

<section class="section-2 container-fluid px-0 py-5">
            <div class="cover">
                <div class="content text-center pt-4">
                    <h1>Some Features That Made us Unique</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea animi pariatur, modi dignissimos
                        soluta </p>
                </div>
            </div>
            <div class="container-fluid text-center">
                <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
                    <div class="rect">
                        <h1>2345</h1>
                        <p>Happy Client</p>
                    </div>
                    <div class="rect">
                        <h1>6784 </h1>
                        <p>Successful orders</p>
                    </div>
                    <div class="rect">
                        <h1>1056 </h1>
                        <p>Blog Followers</p>
                    </div>
                    <div class="rect">
                        <h1>9152 </h1>
                        <p>Positive Feedbacks</p>
                    </div>
                </div>

            </div>

        </section>

<!-- features end -->

<!--  services  -->
<section class="section-3">
            <div class="container">
                <h1 class="text-center">Drafting Services</h1>
                <div class="row text-center py-5">
                    
                <?php
           
                foreach($products as $row)
                {
                component($row->image, $row->product,$row->onbtn,$row->hiddenprice, $row->price, $row->id );
                }
                ?> 
                
               


                
                
               <div class="draft_btn"><a>Click here for more</a></div>  
                
                </div>
            </div>

        </section>
        
        <section class="section-4">
            <div class="container">
                <h1 class="text-center">Registration Services</h1>
                <div class="row text-center py-5">
                    
                <?php
                component1('images/trademark1.jpg', 'Trademark', 'Avail Service');
                component1('images/shopact.jpg', 'Shop Act', 'Avail Service');
                component1('images/marriage.jpg', 'Marriage Registration', 'Avail Service');
                component1('images/will1.jpg', 'Draft a Will', 'Avail Service');
                ?>    
                <div class="draft_btn"><a>Click here for more</a></div> 
                </div>
            </div>
 </section>
<!-- services end -->

<!-- how it works start -->

        <section class="section-5">
        <div class="container">
        <h1 class="text-center py-4">How it Works</h1>
        <div class="row">
        <div class="col-md-3 sm-12">
        <h5>Fill the Details</h5>
        <div class="image">
        <img src="<?php echo base_url('images/fill3.jpg')?>" class="img-responsive">
        </div>
        </div>
        <div class="col-md-3 sm-12">
        <h5>Allow our experts Customize Your Document</h5>
        <div class="image">
        <img src="<?php echo base_url('images/customize2.jpg')?>">
        </div>
        </div>
        <div class="col-md-3 sm-12">
        <h5>Verify your Document</h5>
        <div class="image">
        <img src="<?php echo base_url('images/verify3.jpg')?>">
        </div>
        </div>
        <div class="col-md-3 sm-12">
        <h5>Get doorstep Delivery</h5>
        <div class="image">
        <img src="<?php echo base_url('images/deliver2.jpg')?>">
        </div>
          </div>

        </div>

        </div>
        </section>
    </main>

    <!-- how it works end -->
<!-- <?php //include ('footer.php');?> -->