<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>OneVoice Huntington</title>
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" rel="stylesheet">

<link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/MyFontsWebfontsKit.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/icomoon.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">

 <?php wp_head(); ?> 
</head>

<body>
<div id="main">
	<aside class="" id="sidebar_left">
    	<div id="logo">
        	<img src="<?php echo get_template_directory_uri()?>/images/logo.png" border="0"/>
        </div>
        <div class="primary_nav">
        	<ul id="left-primary-menu" class="menu">
                <li class="dashboard"> <a href="#"> dashboard </a> </li>
                <li class="rarecourage active"> <a href="/onevoice/groups/rarecourage/"> courage </a></li>
                <li class="rarecurate "> <a href="#"> curate </a></li>
				<li class="rareclinical "> <a href="#"> clinical </a></li>
				<li class="rareconsult "> <a href="#"> consult </a></li>
				<li class="rarecontribute "> <a href="#"> contribute  </a></li>
                <li class="rareconnect "> <a href="#"> connect </a></li>
                <li class="rarepolicy "> <a href="#"> policy </a></li>
            </ul>
            <div class="left_search">
            	<form action="">
                	<input type="text" name="search" class="search-field"> 
                    <a href="#"><img src="<?php echo get_template_directory_uri()?>/images/left-nav-search-icon.png"></a>
                </form>
            </div>
        </div>
        <div class="secondary_nav">
        	<a style="font-weight:600;" href="http://onevoice.world/what-is-onevoice/">about</a>
            <a style="font-weight:600;" href="http://onevoice.world/the-team/">team</a>
            <a style="font-weight:600;" href="http://onevoice.world/faqs/">FAQ</a>
            <br>
            <a href="http://onevoice.world/terms/">support</a>
              •  
            <a href="http://onevoice.world/privacy/">legal</a>
            <br>
            <a style="font-size:10px;" href="/client-dashboard/">client Dashboard</a>
        </div>
    </aside>
    <section class="" id="content_wrapper">
        	<header id="branding">
            	<div class="content">
                	<div class="row">
                        <div class="col-sm-4">
                        
                        </div>
                        <div class="col-sm-6">
                            <ul class="head-nav">
                                <li><?php global $current_user;
      get_currentuserinfo();

    //  echo 'Username: ' . $current_user->user_login . "\n";
    //  echo 'User email: ' . $current_user->user_email . "\n";
    //  echo 'User level: ' . $current_user->user_level . "\n";
    //  echo 'User first name: ' . $current_user->user_firstname . "\n";
    //  echo 'User last name: ' . $current_user->user_lastname . "\n";
      echo   $current_user->display_name ;
    //  echo 'User ID: ' . $current_user->ID . "\n";
?></li>
                                <li><a href="#"> my rare profile  </a></li>
                                <li><a href="#"> myBinder </a></li>
                                <li><a href="<?php echo wp_logout_url(); ?>">log out</a></li> 
                            </ul>
                        </div>
                    </div> 
                </div>
            </header>