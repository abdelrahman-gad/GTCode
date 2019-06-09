<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head( ) ; ?>
    <title>GTCoding</title>
</head>

<body>
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="<?php echo site_url('') ?>">Home</a>
            </li>
            <li>
                <a href="<?php echo site_url('/blog') ?>">Blog</a>
            </li>
            <li>
                <a href="<?php echo site_url('/projects') ?>">Projects</a>
            </li>
            <li>
                <a href="<?php echo site_url('/about') ?>">About</a>
            </li>

            <li>
                <a href="<?php echo site_url('/contact') ?>">Contact Us</a>
            </li>
            <div class="searchbox-slide-menu">
                <?php get_search_form(  ) ;?>
            </div>
        </ul>
    </div>
  
    <nav>
        <div id="logo-img">
            <a href="#">
                <img src="<?php echo get_template_directory_uri( ); ?>/img/logo.png" alt="GTCoding Logo">
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <a <?php if(is_front_page() ) echo 'class="active"'?> href="<?php echo site_url('') ?>">Home</a>
            </li>
            <li>
                <a <?php if(get_post_type( )=='post'  ) echo 'class="active"'?>  href="<?php echo site_url('/blog') ?>">Blog</a>
            </li>
            <li>
                <a <?php if(get_post_type( ) =='project') echo 'class="active"'?>  href="<?php echo site_url('/projects') ?>">Projects</a>
            </li>
            <li>
                <a <?php if(is_page() == 'about' ) echo 'class="active"'?>  href="<?php echo site_url('/about') ?>">About</a>
            </li>
            <li>
                <a <?php if(is_page() == 'contact' ) echo 'class="active"'?>  href="<?php echo site_url('/contact') ?>">Contact</a>
            </li>
            <li>
                <div id="search-icon">
                    <i class="fas fa-search"></i>
                </div>
            </li>
        </ul>
    </nav>

    <div id="searchbox">
                <?php get_search_form(  ) ?>
</div>
<?php 
if(!is_front_page()){
 ?>
 <main>
 <?php    
}
?>