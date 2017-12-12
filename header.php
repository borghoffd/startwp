<!DOCTYPE html>
<html lang="de">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<!-- Custom CSS -->
  	<link href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
  </head>
  <body>
    <!--==================================================
    HEADER
    ==================================================//-->
    <!-- Blogheader -->
    <div class="site-container">
      <div class="header-container">
        <div class="blogheader-container">
          <h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
          <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
        </div> <!-- blogheader-container-->
        <!-- Navigation -->
        <div class="navigation-container">
        	<nav class="blog-nav">
        		<?php wp_list_pages( '&title_li=' ); ?>
        	</nav>
        </div> <!-- navigation-container -->
      </div><!-- header container -->
