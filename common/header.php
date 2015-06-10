<!DOCTYPE html>
<html class="<?php echo get_theme_option('Style Sheet'); ?>" lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=yes" />
    <?php if ($description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>

    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <?php fire_plugin_hook('public_head',array('view'=>$this)); ?>
    <!-- Stylesheets -->
    <?php
    queue_css_file(array('iconfonts', 'style'));

    echo head_css();
    ?>
    <!-- JavaScripts -->
    <?php queue_js_file('vendor/modernizr'); ?>
    <?php queue_js_file('vendor/selectivizr', 'javascripts', array('conditional' => '(gte IE 6)&(lte IE 8)')); ?>
    <?php queue_js_file('vendor/respond'); ?>
    <?php queue_js_file('globals'); ?>
    <?php echo head_js(); ?>
</head>
 <?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
        <header>
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>
            <div id="site-title"><?php echo link_to_home_page(theme_logo()); ?></div>
			<div id="primary-nav">
             <?php
                  echo public_nav_main();
             ?>
			</div>
        </header>         
  
         <div id="mobile-nav">
             <?php
                  echo public_nav_main();
             ?>
         </div>
        
		<?php if ((get_theme_option('Header Image') !== null)): ?>
		<div id="header-image-holder">
		<div class="held">
		<?php if ((get_theme_option('header_image_heading') !== '')): ?>
		<h2><?php echo get_theme_option('header_image_heading'); ?></h2>
		<?php endif; ?>
		<?php if ((get_theme_option('header_image_text') !== '')): ?>
		<p><?php echo get_theme_option('header_image_text'); ?></p>
		<?php endif; ?>
		</div>
        <?php echo theme_header_image(); ?>
		</div>
		<?php endif; ?>
		
		
                       
    <div id="content">

<?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
