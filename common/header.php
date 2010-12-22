<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo settings('site_title'); echo isset($title) ? ' | ' . $title : ''; ?></title>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo settings('description'); ?>" />

<?php echo auto_discovery_link_tag(); ?>

<!-- Plugin Stuff -->
<?php plugin_header(); ?>

<!-- Stylesheets -->
<?php
queue_css('style');
display_css(); 
?>

<?php if($headerBackground = get_theme_option('Header Background')): ?>

<style type="text/css" media="screen">
    #header {
        background:transparent url('<?php echo WEB_THEME_UPLOADS.DIRECTORY_SEPARATOR.$headerBackground; ?>') top left no-repeat;
    }
</style>
<?php endif; ?>

<!-- JavaScripts -->
<?php echo display_js(); ?>

</head>
<body<?php echo isset($bodyid) ? ' id="'.$bodyid.'"' : ''; ?><?php echo isset($bodyclass) ? ' class="'.$bodyclass.'"' : ''; ?>>
	
	<div id="header-container">	
		<div id="header">
			<div id="search-container">
				<?php echo simple_search(); ?>
				<?php echo link_to_advanced_search(); ?>
			</div><!-- end search -->
			
		<div id="site-title"><?php echo link_to_home_page(custom_display_logo()); ?></div>
		</div><!-- end header -->
	</div><!--end header-container-->

			<div id="nav-container">
			<div id="primary-nav">
				
    			<ul class="navigation">
	
    			<?php echo custom_public_nav_header(); ?>
    			</ul>
			
			</div><!-- end primary-nav -->
			</div><!-- end div-container -->
			
			
		<div id="content">
			
