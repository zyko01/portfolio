<div class="sections">
    <section class="row" id="about" href="#about">
        <div class="container">
            <div class="col-xs-12 col-md-12">
                <h1 class="animation-test element-to-hide">About</h1>
                <div class="box"></div>
            </div>
            <div class="content-wrapper">
                <div class="aboutme col-xs-12 col-md-6" >
                    <img id="me" src="<?php echo get_bloginfo('template_url') ?>/images/aboutme.jpg" alt="aboutme">
                    <div id="texts">
                        <h3>Who is Mark?</h3>
                        <span>I'm a fresh graduate from the University of San Carlos with a degree of Bachelor of Science
                        in Informattion Communication Technology. I have a serious passion for designing and developing websites
                        and I am eager to learn new and more about designing and developing websites.
                        </span>
                    </div>
                </div>
                <div class="skills col-xs-12 col-md-6">
                    <div class="tools-wrapper" id="skillsuse">
                        <h3>Skills</h3>
                        <img src="<?php echo get_bloginfo('template_url') ?>/images/HTML_Logo.png" alt="html logo">
                        <img src="<?php echo get_bloginfo('template_url') ?>/images/css_logo.png" alt="css logo">
                        <img src="<?php echo get_bloginfo('template_url') ?>/images/php_logo.png" alt="php logo">
                        <img src="<?php echo get_bloginfo('template_url') ?>/images/js_logo.png" alt="js logo">
                        <img src="<?php echo get_bloginfo('template_url') ?>/images/wordpress_logo.png" alt="worpdress logo">
                        <img src="<?php echo get_bloginfo('template_url') ?>/images/bootstrap_logo.png" alt="html logo">
                        <img src="<?php echo get_bloginfo('template_url') ?>/images/codeIgniter_logo.png" alt="css logo">
                        <img src="<?php echo get_bloginfo('template_url') ?>/images/laravel_logo.png" alt="php logo">
                        <img src="<?php echo get_bloginfo('template_url') ?>/images/vue_logo.png" alt="js logo">
                    </div>

                    <div class="tools-wrapper" id="toolsuse">
                        <h3>Tools I use</h3>
                        <img src="<?php echo get_bloginfo('template_url') ?>/images/vscode_logo.png" alt="vscode logo">
                        <img src="<?php echo get_bloginfo('template_url') ?>/images/git_logo.png" alt="git logo">
                        <img src="<?php echo get_bloginfo('template_url') ?>/images/photoshop_logo.png" alt="photoshop logo">
                    </div>
                </div>
            </div>
        </div> 
    </section> 

    <section class="row" id="portfolio" href="portfolio">
        <div class="container-full">
            <div class="col-xs-12 col-md-12">
                <h1>Portfolio</h1>
                <div class="box"></div>
            </div>
            <div class="content-wrapper">
                <div class="col-xs-12 col-md-12 portfolio-wrapper">
                    <div class="portfolio1 col-xs-12 col-md-6">
                        <img class="port-img" src="<?php echo get_bloginfo(template_url) ?>/images/campuscarpool.PNG" alt="campus carpool">
                            <p class="title">Campus Carpool</p>
                            <p class="small-title">Campus Carpool</p>
                            <div class="overlay"></div>
                            <button type="button" class="button" data-toggle="modal" data-target="#myModal">Learn More</button>    
                    </div>
                   
                    <div class="portfolio2 col-xs-12 col-md-6">
                        <img class="port-img" src="<?php echo get_bloginfo(template_url) ?>/images/ebarangay.PNG" alt="barangay inventory system">
                        <p class="title">Barangay Inventory System</p>
                        <p class="small-title">Barangay Inventory System</p>
                        <div class="overlay"></div>
                        <button type="button" class="button" data-toggle="modal" data-target="#myModal1">Learn More</button>               
                        
                        <!-- Modal -->
                        <div class="modal fade" id="myModal1" role="dialog">
                        <div class="modal-dialog">
                     
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-body">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                        <li data-target="#myCarousel" data-slide-to="3"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">

                                        <div class="item active">
                                            <img src="<?php echo get_bloginfo(template_url) ?>/images/borrow-request.PNG" alt="borrow-request">
                                            <div class="carousel-caption">
                                                <h3></h3>
                                                <p></p>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <img src="<?php echo get_bloginfo(template_url) ?>/images/item-listing.PNG" alt="Chania">
                                            <div class="carousel-caption">
                                                <h3></h3>
                                                <p></p>
                                            </div>
                                        </div>
                                 
                                        <div class="item">
                                            <img src="<?php echo get_bloginfo(template_url) ?>/images/new-item.PNG" alt="Flower">
                                            <div class="carousel-caption">
                                                <h3></h3>
                                                <p></p>
                                                </div>
                                        </div>

                                        <div class="item">
                                            <img src="<?php echo get_bloginfo(template_url) ?>/images/user-listing.PNG" alt="Flower">
                                            <div class="carousel-caption">
                                                <h3></h3>
                                                <p></p>
                                            </div>
                                        </div>
                             
                                    </div> <!-- end of Carousel inner -->

                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                    </a>
                                </div> <!-- end id mycarousel -->
                            </div> <!-- end modal body -->
                            
                            <div class="port-info">
                                <div class="port-title">
                                    <h2>Barangay Inventory System</h2>
                                </div>
                                <p>The Barangay Inventory System or BIS was developed for any barangay's in Cebu City to use to automate the maintenance jobs related such as inventory tracking, borrowing, maintenance, 
                                user management, anywhere in a certain barangay. Each barangay will be able to keep track of almost every item that goes in, 
                                or out of their inventory. The system was built using the codeigniter and bootstrap.
                                </p>     
                            </div>
                         
                            <div class="modal-footer">
                             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>  <!-- end modal content -->   
                        </div>  <!-- end modal dialog -->
                        </div>  <!-- end modal fade -->
                
                    </div> <!-- end of portfolio2 -->
                     
                    <!-- Modal campuscarpool -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                                            <li data-target="#myCarousel2" data-slide-to="1"></li>
                                            <li data-target="#myCarousel2" data-slide-to="2"></li>
                                            <li data-target="#myCarousel2" data-slide-to="3"></li>
                                        </ol>

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">

                                            <div class="item active">
                                                <img src="<?php echo get_bloginfo(template_url) ?>/images/post-ride.PNG" alt="Chania">
                                                <div class="carousel-caption">
                                                    <h3></h3>
                                                    <p></p>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <img src="<?php echo get_bloginfo(template_url) ?>/images/browse-route.PNG" alt="Chania">
                                                <div class="carousel-caption">
                                                    <h3></h3>
                                                    <p></p>
                                                </div>
                                            </div>
                                        
                                            <div class="item">
                                                <img src="<?php echo get_bloginfo(template_url) ?>/images/request-ride.PNG" alt="Flower">
                                                <div class="carousel-caption">
                                                    <h3></h3>
                                                    <p></p>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <img src="<?php echo get_bloginfo(template_url) ?>/images/private-message.PNG" alt="Flower">
                                                <div class="carousel-caption">
                                                    <h3></h3>
                                                    <p></p>
                                                </div>
                                            </div>
                                    
                                        </div> <!-- end of carousel inner -->

                                        <!-- Left and right controls -->
                                        <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                        </a>
                                    </div> <!-- end id mycarousel -->
                                </div> <!-- end modal body -->
                                
                                <div class="port-info">
                                    <div class="port-title">
                                        <h2>Campus Carpool</h2>
                                    </div>
                                    <p>Campus Carpool is a localized ridesharing application for students and employees
                                    of Unversity of San Carlos to use as an alternative to public transportation.
                                    </p> 
                                    <p>
                                    Campus Carpool was developed to take advantage of the trend and further promote ridesharing.
                                     Using the latest in web technologies, Campus Carpool was built with reliable frameworks such as laravel, vue and etc,
                                     in order to allow students and employees of the campus to seamlessly post or find rides that match their commuting routes.
                                    </p>
                                    <a href="http://campuscarpool.dyndns.org">Campus Carpool link</a>     
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>  <!-- end of modal content --> 
                        </div> <!-- end of modal dialog -->
                        </div><!-- end of modal fade -->

                </div> <!-- end of col-xs-12 col-md-12 -->
            </div><!-- end of content-wrapper -->
        </div> <!-- end of container -->
    </section>

    <!-- Contact Section -->
    <section class="row" id="contact" href="contact">
        <div class="container">
            <div class="col-xs-12 col-md-12">
                <h1>Get in Touch</h1>
                <div class="box"></div>
            </div>
            <div class="content-wrapper">
                <div class="col-xs-12 col-md-6 col-md-offset-3">
                    <h2>Interested to work together?</h2>
                    <p>send me a message through my social media or send me an email below.</p>
                        <a class="btn send-email" href="mailto:mark.zyko01@gmail.com">
                            <i class="fa fa-send">  Send an email</i>
                        </a>  
                </div>
            </div> <!-- end of content-wrapper -->
        </div> <!-- end of container -->
    </section>
</div> 
