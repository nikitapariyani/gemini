<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Gemini
 */

get_header(); ?>
<!--slider begins-->
<div class="slider-area">
   
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
        <?php if ( get_theme_mod('featured_background_image_1') !='' ) {  ?>
        <img src="<?php echo get_theme_mod('featured_background_image_1'); ?>" />
        <?php } else {  ?>
      <img src="<?php echo get_template_directory_uri();?>/images/cloud.jpg" alt="...">
      <?php }?>
      
      <div class="carousel-caption">
          <?php if ( get_theme_mod('slider_caption_1') !='' ) {  ?>
          <h2><?php echo (get_theme_mod('slider_caption_1')); ?></h2>
          <?php } else { ?>
          <h2>Image 1</h2>
          <?php }?>
      </div>
    </div>
    <div class="item">
        <?php if ( get_theme_mod('featured_background_image_2') !='' ) {  ?>
        <img src="<?php echo get_theme_mod('featured_background_image_2'); ?>" />
        <?php } else {  ?>
        <img src="<?php echo get_template_directory_uri();?>/images/bicycle.jpg" alt="...">
      <?php }?>
      <div class="carousel-caption">
          <?php if ( get_theme_mod('slider_caption_2')) {  ?>
          <h2><?php echo (get_theme_mod('slider_caption_2')); ?></h2>
          <?php } else { ?>
          <h2>Image 2</h2>
         <?php }?>
      </div>
    </div>
    <div class="item">
        <?php if ( get_theme_mod('featured_background_image_2') ) {  ?>
        <img src="<?php echo get_theme_mod('featured_background_image_2'); ?>" />
        <?php } else {  ?>
      <img src="<?php echo get_template_directory_uri();?>/images/ladybug.jpg" alt="...">
      <?php }?>
      <div class="carousel-caption">
          <?php if ( get_theme_mod('slider_caption_3')) {  ?>
          <h2><?php echo (get_theme_mod('slider_caption_3')); ?></h2>
          <?php } else { ?>
          <h2>Image 3 </h2>
          <?php }?>
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
	
</div>
<!--slider end-->

<!--home top begin-->
<div class="home-top">
	<div class="">
		<div class="row">
			<div class="col-md-12">
				<div class="home-jumbotron jumbotron text-center">
                                    <div class="line text-center"></div>
                                    <?php if ( get_theme_mod('home_widget_header')) {  ?>
                                    <h1><?php echo (get_theme_mod('home_widget_header')); ?></h1>
                                    <?php } else { ?>
					<h1>A great big headline to catch some attention</h1>
                                    <?php } ?>
                                         <?php if ( get_theme_mod('home_widget_content')) {  ?>
                                        <p><?php echo (get_theme_mod('home_widget_content')); ?></p>
                                        <?php } else { ?>
					<p class="lead">Nullam id dolor id nibh ultricies vehicula ridiculus id elit. Cum sociis natoque penatibus et magnis dis parturient monteset magnis, nascetur ridiculus mus parturient montes.</p>
                                        <?php } ?>
                                        <div class="line2"></div>
                                </div>
			</div>
		</div>
	</div>
</div>
<!--home top end-->
<!--home-page-widgets-->
<div id="home-page-widgets">
	<div class="">
            <div class="row">
		<aside id="bavotasan_custom_text_widget-2" class="home-widget col-md-3 bavotasan_custom_text_widget text-center">
                    <a href="#"><i class="info fa fa-mobile"></i></a>
                    <?php if ( get_theme_mod('text_header_1')) {  ?>
                    <h3><?php echo (get_theme_mod('text_header_1')); ?></h3>
                    <?php } else { ?>
                    <h3 class="home-widget-title"><a href="#">Mobile Ready</a></h3>
                    <?php } ?>
                    <div class="textwidget">
                        <?php if ( get_theme_mod('text_content_1')) {  ?>
                        <p><?php echo (get_theme_mod('text_content_1')); ?></p>
                        <?php } else { ?>
			<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                        <?php } ?>
                    </div>
                   
                    <a href="#" class="btn btn-info btn-lg first">Learn more</a>
                </aside>
                <aside id="bavotasan_custom_text_widget-3" class="home-widget col-md-3 bavotasan_custom_text_widget text-center">
                    <a href="#"><i class="info fa fa-tint"></i></a>
                    <?php if ( get_theme_mod('text_header_2')) {  ?>
                    <h3><?php echo (get_theme_mod('text_header_2')); ?></h3>
                    <?php } else { ?>
                    <h3 class="home-widget-title"><a href="#">Color Options</a></h3>
                    <?php } ?>
                    <div class="textwidget">
                        <?php if ( get_theme_mod('text_content_2')) {  ?>
                        <p><?php echo (get_theme_mod('text_content_2')); ?></p>
                        <?php } else { ?>
			<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <?php } ?>
                    </div>
                    <a href="#" class="btn btn-info btn-lg">Learn more</a>
                </aside>
                <aside id="bavotasan_custom_text_widget-5" class="home-widget col-md-3 bavotasan_custom_text_widget text-center">
                    <a href="#"><i class="info fa fa-share-square-o"></i></a>
                    <?php if ( get_theme_mod('text_header_3')) {  ?>
                    <h3><?php echo (get_theme_mod('text_header_3')); ?></h3>
                    <?php } else { ?>
                    <h3 class="home-widget-title"><a href="#">Social Menu</a></h3>
                    <?php } ?>
                    <div class="textwidget">
                        <?php if ( get_theme_mod('text_content_3')) {  ?>
                        <p><?php echo (get_theme_mod('text_content_3')); ?></p>
                        <?php } else { ?>
			<p>Etiam porta sem malesuada magna mollis malesuada magna mollis euismod.</p>
                        <?php } ?>
                    </div>
                    <a href="#" class="btn btn-info btn-lg">Learn more</a>
                </aside>
                <aside id="bavotasan_custom_text_widget-4" class="home-widget col-md-3 bavotasan_custom_text_widget text-center">
                    <a href="#"><i class="info fa fa-tachometer"></i></a>
                    <?php if ( get_theme_mod('text_header_4')) {  ?>
                    <h3><?php echo (get_theme_mod('text_header_4')); ?></h3>
                    <?php } else { ?>
                    <h3 class="home-widget-title"><a href="#">Optimized for SEO</a></h3>
                    <?php } ?>
                    <div class="textwidget">
                        <?php if ( get_theme_mod('text_content_4')) {  ?>
                        <p><?php echo (get_theme_mod('text_content_4')); ?></p>
                        <?php } else { ?>
			<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor sagittis auctor.</p>
                        <?php } ?>
                    </div>
                    <a href="#" class="btn btn-info btn-lg">Learn more</a>
                </aside>				
            </div>
	</div>
</div>
<!--home-page-widgets-->
<!--blog area-->
<div class="container from-the-blog">
    <div class="row">
	<div id="primary" class="col-md-12 hfeed">
            <div class="page-header clearfix">
		<h1 class="pull-left">Post Block</h1>
            </div>

            <div class="row">
		<div class="col-md-6">	
                    <article id="post-23" class="post-23 post type-post status-publish format-standard has-post-thumbnail hentry category-features clearfix xfolkentry">
			<a href="http://demos.bavotasan.com/arcade/2014/01/responsive-design/" class="image-anchor">
                            <img width="570" height="220" src="http://demos.bavotasan.com/arcade/files/2014/01/laptop-570x220.jpg" class="first-post wp-post-image" alt="laptop">		
                        </a>
		
                        <h1 class="entry-title taggedlink">
                            <a href="http://demos.bavotasan.com/arcade/2014/01/responsive-design/" title="Responsive Design" rel="bookmark">Responsive Design</a>
                        </h1>

	
                        <div class="entry-content description clearfix">
                            <p>Arcade was built to look amazing on any device. To see it in action, resize your browser window and you will see how things adjust accordingly. If you shrink it down to a handheld device width, you will see the mobile menu appear for easier navigation on any smart phone.…</p>
                        </div><!-- .entry-content -->
                    </article><!-- #post-23 -->
                </div>
                                    
                <div class="col-md-6">	
                    <article id="post-32" class="post-32 post type-post status-publish format-standard has-post-thumbnail hentry category-features clearfix xfolkentry">
                        <a href="http://demos.bavotasan.com/arcade/2014/01/new-collection-of-shortcodes/" class="image-anchor">
                            <img width="100" height="100" src="http://demos.bavotasan.com/arcade/files/2014/01/unsplash_52b5ec8515a34_1-100x100.jpg" class="alignleft wp-post-image" alt="unsplash_52b5ec8515a34_1">		
                        </a>
                        <div class="entry-content description clearfix">
                        <h1 class="entry-title taggedlink">
                            <a href="http://demos.bavotasan.com/arcade/2014/01/new-collection-of-shortcodes/" title="New Collection of Shortcodes" rel="bookmark">New Collection of Shortcodes</a>
                        </h1>

	
                        
                            <p>I decided to put together a collection of easy to use shortcodes based off of Bootstrap and include them in…</p>
                        </div><!-- .entry-content -->
                    </article><!-- #post-32 -->	
                    <div class="line-3">
                    </div>                    
                    <article id="post-29" class="post-29 post type-post status-publish format-standard has-post-thumbnail hentry category-features clearfix xfolkentry">
                        <a href="http://demos.bavotasan.com/arcade/2014/01/custom-css-editor/" class="image-anchor">
                            <img width="100" height="100" src="http://demos.bavotasan.com/arcade/files/2014/01/fields-100x100.jpg" class="alignleft wp-post-image" alt="fields">		
                        </a>
                        <div class="entry-content description clearfix">
                        <h1 class="entry-title taggedlink">
                            <a href="http://demos.bavotasan.com/arcade/2014/01/custom-css-editor/" title="Custom CSS Editor" rel="bookmark">Custom CSS Editor</a>
			</h1>

	
                            <p>Offering the greatest amount of control on a theme is what most people expect from a premium theme. That’s why…</p>
                        </div><!-- .entry-content -->
                    </article><!-- #post-29 -->	
                    <div class="line-3">
                    </div>
                    <article id="post-26" class="post-26 post type-post status-publish format-standard has-post-thumbnail hentry category-features clearfix xfolkentry">
                        <a href="http://demos.bavotasan.com/arcade/2014/01/theme-customizer/" class="image-anchor">
                            <img width="100" height="100" src="http://demos.bavotasan.com/arcade/files/2014/01/hochbunker2-100x100.jpg" class="alignleft wp-post-image" alt="hochbunker2">		
                        </a>
                        
                    <div class="entry-content description clearfix">
                    <h1 class="entry-title taggedlink">
			<a href="http://demos.bavotasan.com/arcade/2014/01/theme-customizer/" title="Theme Customizer" rel="bookmark">Theme Customizer</a>
                    </h1>

	
                        <p>The customizer is an amazing feature that allows you to preview all your changes to the theme options before going…</p>
                    </div><!-- .entry-content -->
                    </article><!-- #post-26 -->
                </div>				
            </div>
			
        </div>
		
    </div>
	
</div>


<?php get_footer(); ?>
