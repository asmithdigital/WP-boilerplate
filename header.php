<!DOCTYPE html>
<html class="right-column-present left-column-present menu-present" <?php language_attributes(); ?>>
<head>

<script type="text/javascript" async src="http://www.google-analytics.com/ga.js"></script>
<script type="text/javascript" defer async src="http://stats.adelaide.edu.au/piwik/piwik.js"></script>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ''; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
<!-- CSS concatenated and minified -->
<link rel="stylesheet" type="text/css" media="all" href="http://global.adelaide.edu.au/v/redesign1/css/concat/all.conc.min.css">

<!--[if lte IE 8]>
    <link rel="stylesheet" type="text/css" href="http://global.adelaide.edu.au/v/redesign1/css/patches/ie.css" media="screen">
<![endif]-->

<link rel="stylesheet" type="text/css" media="screen" href="http://global.adelaide.edu.au/v/redesign1/css/concat/screen.conc.min.css">
<link rel="stylesheet" type="text/css" media="print" href="http://global.adelaide.edu.au/v/redesign1/css/concat/print.conc.min.css">
<link type="text/css" media="screen" rel="stylesheet" href="http://global.adelaide.edu.au/v/redesign1/css/ui-detail-contact.css">
<link type="text/css" media="screen" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">

<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/andrew.css">

<?php wp_head(); ?>

	<!-- JavaScript
  ================================================== -->

<script type="text/javascript" src="http://global.adelaide.edu.au/v/redesign1/js/concat/all.conc.min.js"></script>

	<!-- Favicons
  ================================================== -->
	<link rel="shortcut icon" href="http://global.adelaide.edu.au/v/redesign1/images/favicon.ico">
	<link rel="apple-touch-icon" href="http://global.adelaide.edu.au/v/redesign1/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="http://global.adelaide.edu.au/v/redesign1/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="http://global.adelaide.edu.au/v/redesign1/images/apple-touch-icon-114x114.png">
	


	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

</head>

<body <?php body_class(); ?> screen_capture_injected="true">
	<a href="#page-content" class="hidden-dragon" tabindex="1">Skip to content</a>

<div id="page-top" class="stage">
<div class="wrapper clearfix">

<div id="page-header" class="header clearfix">
  <div id="page-topbar" class="tools container_24 clearfix">
    <div class="grid_6"> 
    <a href="http://www.adelaide.edu.au/" title="The University of Adelaide" class="ui-helper-reset prefix_t0 btn btn-uoa-home"> 
    <span class="btn-icon"></span>The University <i>of</i> Adelaide </a> </div>
    
   <?php include (TEMPLATEPATH . '/inc/search-form.php' ); ?>
   
  </div>
  	
  <div class="branding prefix_q0 clearfix"> 
  
  	<div is="site-header">
	    <div id="site-title">
	      <a class="branding-title home-title" id="site-title-link" href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>" rel="home"><?php bloginfo('name'); ?> </a>
	    </div>
	    <div id="site-description">
	      <a class="branding-title-description " id="site-description" href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('description'); ?>" rel="home"><?php bloginfo('description'); ?></a>
	    </div>
	  </div>
	  <div id="site-logo">
	    <a title="The University of Adelaide" class="branding-logo" href="http://www.adelaide.edu.au/">
	      <img alt="The University of Adelaide Logo" src="http://global.adelaide.edu.au/v/redesign1/images/bg-header-logo-ds.png">
	    </a>
	  </div>
	
  </div>
  
  <div id="menutab" class="menu menutab clearfix">
    <?php wp_nav_menu(array('menu' => 'Main Menu')); ?>
  </div>
</div>

<!-- End Header -->

<div id="page-container" class="page">
  <div class="page three-column">
  
  <!-- End header file -->