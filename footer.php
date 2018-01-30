<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage collegeBlog
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

?>


</div> <!--site-content-->


<footer class="site-footer">

  <div class="footer-top">
  	
  	
  	<div class="site-module site-module-inner"> 
  	 
  	 
  	    <div class="columns">
  	        	
  	        <div class="column column--medium-1-of-2 column--1-of-4">	
  	        	
  	        	<?php
  					if(is_active_sidebar('footer-sidebar-1')){
  					
  						dynamic_sidebar('footer-1');
  						
  					}
  				?>
  				
  	        </div>	 <!--column-->
  			
  			<?php if(is_active_sidebar('footer-sidebar-2')):?>
  			
  			<div class="column column--medium-1-of-2 column--1-of-4">	
  				
  					
  					<?php dynamic_sidebar('footer-2');?>
  			
  				
  			</div>	 <!--column-->
  			
  			<?php endif; ?>
  			
  			<div class="column column--medium-1-of-2 column--1-of-4">	
  					
  					<!--Display Social Media List-->
  					<?php get_template_part( 'template-parts/site/social-media', 'icons' ); ?>
  					
  				</div>	 <!--column-->
  			
  			
  			<div class="column column--medium-1-of-2 column--1-of-4">	
  				
  				<!--Display Social Media List-->
  				<?php get_template_part( 'template-parts/site/social-media', 'icons' ); ?>
  				
  			</div>	 <!--column-->
  		
  	    </div> <!--columns-->
  	
  	</div> <!--site-module-inner-->
  	

    <div class="col">
      <?php dynamic_sidebar( 'footer-1' ); ?>
    </div><!-- col-1 -->
    <div class="col">
      <?php dynamic_sidebar( 'footer-2' ); ?>
    </div><!-- col-2 -->
    <div class="col">
      <?php dynamic_sidebar( 'footer-3' ); ?>
    </div><!-- col-3 -->


  </div>  <!-- footer-top -->

  <div class="footer-bottom">

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="<?php bloginfo( 'name' ); ?>">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/uol_landscape.svg" alt="<?php bloginfo( 'name' ); ?> University Of Lincoln Logo">
    </a>

    <p>	&#169; <b>University of Lincoln.</b> All rights reserved</p>

  </div>



</footer> <!-- site-footer-->


<?php wp_footer(); ?>

</body>
</html>
