<?php
// Start a new query for displaying featured posts on Front Page



    $featured_post_args = array(
        'post_type' => 'post',
        'posts_per_page' => 4,
        'post__not_in' => get_option('sticky_posts'),
    );
    $featuredposts = new WP_Query($featured_post_args);
    ?>

    
<div class="container from-the-blog">
    <div class="row">
	<div id="primary" class="col-md-12 hfeed">
            <div class="page-header clearfix">
		<h1 class="pull-left">Post Block</h1>
            </div>

            <div class="row">
		<?php if ($featuredposts->have_posts()) : $i = 1;   ?>
               
               
                    <?php while ($featuredposts->have_posts()) : $featuredposts->the_post(); ?>

                    <?php if($i==1) { ?>
                    <div class="featured-post col-md-6">
                        <div <?php post_class('clearfix home-featured'); ?>  id="post-<?php the_ID(); ?>">

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
                    <div class="recent-posts-right col-md-6">
                         <?php $i+=1; ?>
                    <?php }
                     else { ?> 
                        <div <?php post_class('clearfix home-featured'); ?>  id="post-<?php the_ID(); ?>">
                        
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                                <?php the_post_thumbnail('homepage-thumb',array('class' => 'alignleft')); ?>
                            </a>
                        
                           
                            <h3 class="title">
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>

                            <span class="post-meta"><small><?php the_time(__('F jS, Y','smartshop')); ?> <!-- by <?php the_author() ?> --></small></span>
                            <?php the_excerpt(); ?>
                            <div class="line-3"></div>						
                        </div><!--end .entry-->

                        <?php $i+=1; ?>
                    <?php } ?>
                    <?php endwhile; ?>
                    </div>
                </div>
                
                <?php  else:  ?>
                
                
                <?php endif; ?>
                
            </div>
			
        </div>
		
    </div>
	
</div>