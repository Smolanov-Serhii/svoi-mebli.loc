<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Templatemela
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1">  
<link rel="profile" href="//gmpg.org/xfn/11"/>
<?php tmpmela_header(); ?>
 <?php wp_head();?> 
</head>
<body <?php body_class(); ?>>
<?php if (get_option('tmpmela_show_site_loader') == 'yes') : ?>	
<!--CSS Spinner-->
<div class="spinner-wrapper">
	<div class="spinner">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
        <!-- <h1 class="ml2">Shopinia</h1> -->
    </div>
</div>
<?php endif; ?>
<div id="page" class="hfeed site">
<?php if ( get_header_image() ) : ?>
<div id="site-header"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="<?php echo esc_attr_e('Siteheader','shopinia'); ?>"> </a> </div>
<?php endif; ?>
<!-- Header -->
<?php tmpmela_header_before(); ?>
<header id="masthead" class="site-header <?php echo "header".esc_attr(get_option('tmpmela_header_layout'));  ?> <?php echo esc_attr(tmpmela_sidebar_position()); ?>">
	<div class="header-main site-header-fix">
				<?php tmpmela_header_inside(); ?>			
			<?php if (get_option('tmpmela_show_topbar') == 'yes') : ?>	
			<?php if ( has_nav_menu('topbar-menu') ) { ?> 
			<div class="topbar-outer">
				<div class="topbar-main theme-container">
				<?php if(get_option('tmpmela_show_offer') == 'yes') : ?>					
						<div class="header-offer"><?php echo esc_attr(stripslashes(get_option('tmpmela_show_offer_text'))) ?></div>
				<?php endif; ?>
																					
				<div class="tmpmela-topbar-menu-links">
					<?php wp_nav_menu( array( 'theme_location' => 'topbar-menu','menu_class' => 'mega' ) ); ?>
				</div>
				</div>
			</div>
			<?php  } ?>
			<?php endif; ?>		
			<div class="header-top">
				<div class="theme-container">
					<div class="header-top-left">
							<div class="header-logo">
							<?php if (get_option('tmpmela_logo_image') != '') : ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
								<?php tmpmela_get_logo(); ?>
								</a>
							<?php else: ?>
								<h3 class="site-title"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<span class="logo-text"><?php echo stripslashes(get_option('tmpmela_logo_image_alt')); ?></span>
									</a>	
								</h3>
								<h2 class="site-description">
									<?php bloginfo( 'description' ); ?>header-top-right
								</h2>
							<?php endif; ?>
                                <?php if (get_option('tmpmela_logo_image') == '' && get_option('tmpmela_logo_image_alt') == '') : ?>
                                    <h3 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                            <span class="logo-text"><?php echo esc_attr(get_bloginfo('name', 'display')); ?></span>
                                        </a>
                                    </h3>
                                <?php endif; ?>
							</div>
							<div class="header-mob-logo">
							<?php if (get_option('tmpmela_mob_logo_image') != '') : ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
								<?php tmpmela_get_mob_logo(); ?>
								</a>
							<?php else: ?>
								<h3 class="site-title"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<span class="moblogo-text"><?php echo stripslashes(get_option('tmpmela_mob_logo_image_alt')); ?></span>
									</a>
								</h3>
	<h2 class="site-description">
							<?php bloginfo( 'description' ); ?>
						</h2>
							<?php endif; ?>
                                <?php if (get_option('tmpmela_logo_image') == '' && get_option('tmpmela_logo_image_alt') == '') : ?>
                                    <h3 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                            <span class="moblogo-text"><?php echo esc_attr(get_bloginfo('name', 'display')); ?></span>
                                        </a>
                                    </h3>
                                <?php endif; ?>
								
							</div>					 			
					</div>

				<?php if (is_active_sidebar('header-search')) : ?>
					<div class="header-search">
						<a class="header-toggle"><?php echo esc_html_e('Search','shopinia'); ?></a>
						<?php tmpmela_get_widget('header-search'); ?>	
					</div>
					<?php endif; ?>
				</div>
			</div>
			
			 	<div class="header-bottom header-fix">
				  <div class="header-botton-inner">
					<div class="theme-container">
					<nav id="site-navigation" class="navigation-bar main-navigation">
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'shopinia' ); ?>"><?php esc_html_e( 'Skip to content', 'shopinia' ); ?></a>
						<div class="mega-menu">
							<?php wp_nav_menu( array( 'theme_location' => 'primary','menu_class' => 'mega' ) ); ?>
						</div>
                        <div class="gtranslate">
                            <?php echo do_shortcode('[gtranslate]'); ?>
                        </div>
					</nav>
					<nav class="mobile-navigation">	
					<nav class="mobile-navigation">
					<h3 class="menu-toggle"><?php esc_html_e( 'Menu', 'shopinia' ); ?></h3>
						<div class="mobile-menu">	
							<span class="close-menu"></span>	
								<?php wp_nav_menu( array( 'theme_location' => 'primary','menu_class' => 'mobile-menu-inner') ); ?>
						</div>
					</nav>
					<?php if ( is_active_sidebar( 'documentation-link' ) ) : ?>
						<?php dynamic_sidebar( 'documentation-link' ); ?>
					<?php endif; ?>
				</div>	
				</div>
				</div>
				
</div>	
</header>
<?php tmpmela_header_after(); ?>
<?php tmpmela_main_before(); ?>
	<?php 
		$tmpmela_page_layout = tmpmela_page_layout(); 
		if( isset( $tmpmela_page_layout) && !empty( $tmpmela_page_layout ) ):
		$tmpmela_page_layout = $tmpmela_page_layout; 
		else:
		$tmpmela_page_layout = '';
		endif;
	?>
<?php 
$shop = '0';
	if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) :
	if(is_shop())
		$tmpmela_page_layout = 'wide-page';
		$shop = '1';
	endif;
?>
<?php
global $wp;
$current = esc_url(home_url( add_query_arg( array( $_GET ), $wp->request ) ));
$str = substr(strrchr($current, '?'), 1);
if($str == 'left'){
  $div_class = 'left-sidebar';
}elseif($str == 'right'){
  $div_class = 'right-sidebar';
}elseif($str == 'full'){
  $div_class = 'full-width';  
}else{
$div_class = tmpmela_sidebar_position();
} 
if ( get_option( 'tmpmela_page_sidebar' ) == 'no' ):
    $div_class = "full-width";
	endif;
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {	
  if ( is_product() ){	
     if ( get_option( 'tmpmela_shop_sidebar' ) == 'no' ):
   		 $div_class = "full-width";
	endif;
   }	
}
if ( is_home() && tmpmela_is_blog() ){
    $div_class = "left-sidebar";
}
?>
<div id="main" class="site-main <?php echo esc_attr($div_class);  ?> <?php echo esc_attr(tmpmela_page_layout()); ?>">
<div class="main_inner">
<?php 
	$tmpmela_page_layout = tmpmela_page_layout(); 
	if( isset( $tmpmela_page_layout) && !empty( $tmpmela_page_layout ) ):
	$tmpmela_page_layout = $tmpmela_page_layout; 
	else:
	$tmpmela_page_layout = '';
	endif;
if ( $tmpmela_page_layout == 'wide-page' ) : ?>
	<div class="main-content-inner-full">
<?php else: 		
if(is_archive() || is_tag() || is_404()) : ?>
	<div class="main-content">
<?php else: ?>
	<div class="main-content-inner <?php echo esc_attr(tmpmela_sidebar_position()); ?>">	
<?php endif; ?>
<?php endif; ?>
<?php tmpmela_content_before(); ?>