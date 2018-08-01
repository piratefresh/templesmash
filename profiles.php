<?php
/**
 * Template Name: Profiles Grid
 */
get_header();
?>
    <!-- Start Gallery function -->
    <?php
    wp_get_post_parent_id(get_the_ID());
    $gallery = get_post_gallery_images_with_info($post); //you can use it without params too
    ?>
        <h2 class="page-title"><?php single_post_title(); ?></h2>
        <div class="profile-grid">
    <?php foreach( $gallery as $image_obj ) : ?>                                
        <!-- Start here -->
            <div class="card">
                <a href="<?php echo $image_obj['custom-href'] ?>"><img class="card-image" src="<?php echo $image_obj['src'] ?>" alt="" srcset=""></a>
                <div class="card-content">
                    <h2><?php echo $image_obj['title'] ?></h2>
                        <?php if( get_field('facebook') ): ?><a href="<?php echo the_field('facebook'); ?>"><i class="fab fa-facebook-square fa-2x"></i></a><?php endif; ?>
                        <?php if( get_field('instagram') ): ?><a href="<?php echo the_field('instagram'); ?>"><i class="fab fa-instagram fa-2x"></i></a><?php endif; ?>
                        <?php if( get_field('twitter') ): ?><a href="<?php echo the_field('twitter'); ?>"><i class="fab fa-twitter-square fa-2x"></i></a><?php endif; ?>
                        <?php if( get_field('youtube') ): ?><a href="<?php echo the_field('youtube'); ?>"><i class="fab fa-youtube-square fa-2x"></i></a><?php endif; ?>
                        <?php if( get_field('vimeo') ): ?><a href="<?php echo the_field('vimeo'); ?>"><i class="fab fa-vimeo fa-2x"></i></a><?php endif; ?>
                    <p class="subtext">
                        <?php echo $image_obj['description'] ?>
                    </p>
                </div>
            </div>  
    <?php endforeach; ?>
        </div>

<?php
    get_footer()
?>
