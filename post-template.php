<?php
/**
 * The main template file.
 *Template Name:post template
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Gemini
 */

get_header(); ?>
<?php
// Start a new query for displaying featured posts on Front Page



    $featured_post_args = array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'post__not_in' => get_option('sticky_posts'),
    );
    $featuredposts = new WP_Query($featured_post_args);
    ?>
<div class="container">
    <div class="grid">
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'page' ); ?>


	<?php endwhile; // end of the loop. ?>
    <?php if ($featuredposts->have_posts()) :   ?>
               
               
                    <?php while ($featuredposts->have_posts()) : $featuredposts->the_post(); ?>
    <div class="col-md-4">
    <div id="post-<?php the_ID(); ?>">
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail('feature-thumb'); ?>
        </a>
        <h3 class="title">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                                    <?php the_title(); ?>
                        </a>
        </h3>

        <span class="post-meta"><small><?php the_time(__('F jS, Y','smartshop')); ?> <!-- by <?php the_author() ?> --></small></span>
                    <?php the_excerpt(); ?>
										
    </div><!--end .entry-->
    </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
       
     <?php get_footer(); ?>   
       

