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
                    <div class="home-widget-title-1">
                    <?php if ( get_theme_mod('text_header_1')) {  ?>
                    <h3 ><?php echo (get_theme_mod('text_header_1')); ?></h3>
                    <?php } else { ?>
                    <h3 ><a href="#">Mobile Ready</a></h3>
                    <?php } ?>
                    </div>
                    <div class="textwidget1">
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
                    <div class="home-widget-title-2">
                    <?php if ( get_theme_mod('text_header_2')) {  ?>
                    <h3 ><?php echo (get_theme_mod('text_header_2')); ?></h3>
                    <?php } else { ?>
                    <h3 ><a href="#">Color Options</a></h3>
                    <?php } ?>
                    </div>
                    <div class="textwidget2">
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
                    <div class="home-widget-title-3">
                    <?php if ( get_theme_mod('text_header_3')) {  ?>
                    <h3 ><?php echo (get_theme_mod('text_header_3')); ?></h3>
                    <?php } else { ?>
                    <h3 ><a href="#">Social Menu</a></h3>
                    <?php } ?>
                    </div>
                    <div class="textwidget3">
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
                    <div class="home-widget-title-4">
                    <?php if ( get_theme_mod('text_header_4')) {  ?>
                    <h3><?php echo (get_theme_mod('text_header_4')); ?></h3>
                    <?php } else { ?>
                    <h3 ><a href="#">Optimized for SEO</a></h3>
                    <?php } ?>
                    </div>
                    <div class="textwidget4">
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
<?php get_template_part('content','frontposts');?>


<?php get_footer(); ?>
