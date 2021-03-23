<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>

<header class="hero">

        <div class="align">
            <section class="logo col-md-2 col-sm-12 col-12 text-center">
                <img class="logo-svg" src="wp-content/themes/test/img/crane-truck-2.svg" alt="">
                <h3 class="logo-text">Albashid</h3>
            </section>

            <?php wp_nav_menu(array(
                'theme_location'=> 'my_main_menu',
                'depth' => 2, // 1= n o dropdowns, 2=with dropdowns
                'container' => 'nav',
                'container_class' => 'main-menu col-md-10 text-right',
            ));?>
        </div>
        
    
        <div class="banner">
                <div class="overlay"></div>
                <div class="text-box">
                    <h1 class="header-big">
                     <span class="header-big--animation">25 Years Of Exellency</span>   
                    </h1>
                    <a href="#" class="btn-cta btn-cta--animation">Call for an Evaluation</a>
                </div>
        </div>
        
</header>


    
    <!-- <nav class="nav"> 
        <div class="logo">Logo</div>
        <ul class="list">
            <li class="item"><a class="link">Home</a></li>
            <li class="item"><a class="link">Projects</a></li>
            <li class="item"><a class="link">About</a></li>
            <li class="item" ><a class="link">Contact</a></li>
            <li class="item"><a class="link">News</a></li>
        </ul>
    </nav>-->

    