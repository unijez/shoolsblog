<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage collegesBlog
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

 get_header(); ?>

 	<div id="primary" class="content-area">

 		<main id="main" class="site-main">

 			<?php if ( have_posts() ) : ?>

 				<?php while ( have_posts() ) : the_post(); ?>



				          <?php if ( has_post_thumbnail() ): // If has thumbnail image do the rest...?>

				            <?php
				              $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
				              // $mobile_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'image-reg-name' );
				            ?>

				            <!-- <img class="class-name" src="<?php echo $large_image_url[0]; ?>" width="<?php echo $large_image_url[1]; ?>" height="<?php echo $large_image_url[2]; ?>" alt="<?php echo $large_image_url['_wp_attachment_image_alt']['0']; ?>"> -->

				              <div class="heading-image" <?php if(header_post_image() == true) { echo 'style="background-image: url('.header_post_image().')"'; }?>>
				                <div class="heading-image_opacity">
				                  <h4 class="brighter">
				                    <?php $categories = get_the_category();
													  if ( ! empty( $categories ) ) {
				    								   echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
													  }?>
				                  </h4>
				                  <h1><?php the_title();?></h1>
								          <h5>Reading time <span class="eta"></span></h5>
				                </div>
				              </div> <!-- heading-image -->

				            <?php else :?>

				              <div class="heading-image">
				                <h4>
				                  <?php $categories = get_the_category();
				                  if ( ! empty( $categories ) ) {
				                     echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
				                  }?>
				                </h4>
				                <h1><?php the_title();?></h1>
				                <h5>Reading time <span class="eta"></span></h5>
				              </div> <!-- heading-image -->

				            <?php endif; ?>


            <!-- Main text and image content -->
			       <div class="single-container">

							<div class="author-bio_image">
								<?php echo get_avatar( get_the_author_meta( 'ID' ), 64 ); ?>
								<h4 class="post-author"> <b>By</b> <?php the_author(); ?></h4>
								<time class="date-published" datetime="<?php the_time('d/m/Y') ?>"><?php the_time('F j, Y') ?></time>
							</div> <!-- author -->

						<article class="blog-article clear">
						  <?php the_content();?>
						</article> <!--blog-article-->
						
						
						
						<div class="author-bio__name">
									
									
								<?php echo get_avatar( get_the_author_meta( 'ID' ), 512 ); ?>
									
									
									<div class="author-bio__content">
										<h4 class="author-title"> About the Author</h4>
											<h4 class="author-title_sub"><?php echo get_the_author_meta( 'display_name', $contributor_id ); ?></h4>
											<p><?php echo get_the_author_meta( 'description', $contributor_id ); ?></p>
											 <a class="button contributor-posts-link" href="<?php echo esc_url( get_author_posts_url( $contributor_id ) ); ?>">
											   <?php printf( _n( '%d Article', '%d Articles', $post_count, 'dyad' ), $post_count ); ?>
											 </a>
									</div>
								
								
								
						</div> <!--author-bio__name-->
						

            </div> <!-- single-container -->

				           <ul class="single-container single-pagination level-elements">

					            <?php  if( get_previous_post()): ?>
					            <li class="single-pagination__link level-left">

					            	<?php previous_post_link( '' . esc_html__( '%link', 'collegesBlog' ) . '', 'Previous Post' ); ?>

					            </li> <!--single-pagination__link-->

					            <?php endif; ?>

					            <?php  if( get_next_post()): ?>

					            <li class="single-pagination__link level-right">

					            	<?php next_post_link( '' . esc_html__( '%link',     'collegesBlog' ) . '', 'Next Post' ); ?>

					            </li> <!--single-pagination__link-->
					            <?php endif; ?>


				           </ul> <!-- single-pagination -->

            <!-- Comments -->

				                <?php if ( comments_open() || get_comments_number() ) : ?>

				                  <div class="comments-container">
				                    <div class="single-container">

					                  <?php  comments_template(); ?>

					                </div> <!-- single-container -->
				                </div> <!-- comments-container -->

				              <?php endif; ?>

 					<?php endwhile; ?>

<?php endif;  wp_reset_query(); ?>

					<!--Display Related Posts-->
					<?php get_template_part( 'template-parts/releated', 'posts' ); ?>




 		</main><!-- #main -->

 	</div><!-- #primary -->

 	<?php

 get_footer();
