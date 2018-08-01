<?php
/**
 * Template Name: Profile Single
 */
get_header();

    if ( have_posts() ) : while ( have_posts() ) : the_post();
		/* the_content(); */
		$content = get_the_content();
		$content = preg_replace("/<img[^>]+\>/i", " ", $content);          
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]>', $content);

		$url = get_post_meta( get_the_ID(), 'image', true );
		$id  = attachment_url_to_postid( $url );
		?>
		    <div class="container">
				<div class="profile">
					<div class="image-profile">
						<img src="<?php echo catch_that_image();?>" alt="" srcset="">
					</div>
					<div class="text-profile">
						<div class="text-container">
							<h2><?php the_title() ?></h2>
							<div class="social flex-center">
								<?php if( get_field('facebook') ): ?><a href="<?php echo the_field('facebook'); ?>"><i class="fab fa-facebook-square fa-2x"></i></a><?php endif; ?>
								<?php if( get_field('instagram') ): ?><a href="<?php echo the_field('instagram'); ?>"><i class="fab fa-instagram fa-2x"></i></a><?php endif; ?>
								<?php if( get_field('twitter') ): ?><a href="<?php echo the_field('twitter'); ?>"><i class="fab fa-twitter-square fa-2x"></i></a><?php endif; ?>
								<?php if( get_field('youtube') ): ?><a href="<?php echo the_field('youtube'); ?>"><i class="fab fa-youtube-square fa-2x"></i></a><?php endif; ?>
								<?php if( get_field('vimeo') ): ?><a href="<?php echo the_field('vimeo'); ?>"><i class="fab fa-vimeo fa-2x"></i></a><?php endif; ?>
							</div>
							<?php echo $content ?>
						</div>
					</div>
				</div>
			</div>

		<?php
    endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
	endif;
	
get_footer(); 
?>