<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <title><?php bloginfo('name'); ?></title>
        <meta charset ="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> >

    <section class="row" id="landingpage" href="#">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <h1>Hi, im <span>Mark Christian Biglang-awa</span>.</h1>
                <h1>im a front-end developer.</h1>
                <a href="#about" class="btn btn-home" id="change-icon">
                        <i class="fa fa-arrow-right"></i>
                        <i class="fa fa-arrow-down"></i>
                        <h4>more about me</h4>
                </a>
            </div>
        </div>
     </section>
    
    <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="600">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
             </button>
            <img src="<?php echo get_bloginfo('template_url') ?> /images/logo.png" alt="logo">
        </div>
        
        <div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                <li><a href="#about">about</a></li>
                <li><a href="#portfolio">portfolio</a></li>
                <li><a href="#contacts">contacts</a></li>
                </ul>
            </div>
        </div>
  </div>
</nav>    
       
