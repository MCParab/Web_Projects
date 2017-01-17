<?php
/* ------------------------------------------------------------------------- *
 *	Header template					
/* ------------------------------------------------------------------------- */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
	// After the <body> tag starts hook 
	ac_after_body(); 
?>

<header id="main-header" class="header-wrap">

<div class="wrap" style="margin:0;">

	<div class="top<?php ac_mini_disabled() ?>">
    
    	<div class="logo">
        	<a href="<?php echo esc_url( home_url() ); ?>" title="<?php bloginfo( 'title' ); ?>" class="logo-contents<?php ac_logo_class(); ?>"><?php ac_get_logo(); ?></a>
            <?php
				// Ads variables - Options Panel
				$ad728_show = of_get_option( 'ac_ad728_show' );
				$ad728_code =  of_get_option( 'ac_ad728_code' );
				
				if ( $ad728_code == '' ) :
			?>
            <h2 class="description"></h2>
            <?php endif; ?>
        </div><!-- END .logo -->
        
        <?php 
		if ( $ad728_show && $ad728_code != '' ) : ?>
        <div class="advertising728">
        	<?php if ( $ad728_code != '' ) { echo $ad728_code; } ?>
        </div><!-- END .advertising728 -->
        <?php endif; ?>
        <div id="divlink-register"> <a>Get Registered</a></div>
    </div><!-- END .top -->
    
    <nav class="menu-wrap<?php ac_mini_disabled(); if ( get_theme_mod( 'ac_disable_stickymenu' ) ) { echo ' sticky-disabled'; } ?>" role="navigation">
		<?php 
			if( has_nav_menu( 'main' ) ) {
				wp_nav_menu( array( 'container' => '', 'theme_location' => 'main', 'items_wrap' => '<ul class="menu-main mobile-menu superfish">%3$s</ul>' ) );
			} else {
				echo '<ul class="menu-main mobile-menu superfish"><li class="current_page_item"><a>' . __( 'Add a menu', 'acosmin' )  . '</a></li></ul>';
			}
		?>
       
        
      
        
      
        
    </nav><!-- END .menu-wrap -->
    
</div><!-- END .wrap -->

</header><!-- END .header-wrap -->

<?php
	// After the main <header> tag
	ac_after_header(); 
?>

<div class="wrap<?php ac_mini_disabled() ?>" id="content-wrap">
  

<?php
	// Bellow .wrap class
	ac_bellow_wrap_class(); 
?>