<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Gemini
 */
?>




    <div class="footer ">
        <div class="container">
            <div class="row">
<div class="footer-sidebar col-md-4">
    <?php dynamic_sidebar('footer-sidebar-1'); ?>
</div>
<div class="footer-sidebar col-md-4">
    <?php dynamic_sidebar('footer-sidebar-2'); ?>
</div>
<div class="footer-sidebar col-md-4">
    <?php dynamic_sidebar('footer-sidebar-3'); ?>
</div>
       			
        <div class="row">
            <div class="copyright">
                <hr>
		<span class="pull-left">Copyright © 2014 <a href="http://demos.bavotasan.com/arcade">Arcade</a>. All Rights Reserved.</span>
		<span class="credit-link pull-right"><i class="fa fa-leaf"></i>Designed by <a href="https://themes.bavotasan.com/">bavotasan.com</a>.</span>
            </div><!-- .col-lg-12 -->
        </div>
        </div>
 </div>
    </div>




			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->


<?php wp_footer(); ?>  
</body>
</html>