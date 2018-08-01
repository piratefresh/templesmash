<?php
/**
 * Template Name: Archive Grid
 */
get_header();
?>
    <!-- Start Gallery function -->
    <?php
    $gallery = get_post_gallery_images_with_info(); //you can use it without params too
    ?>
        <div class="archive-grid ">
    <?php foreach( $gallery as $image_obj ) : ?>                                
        <!-- Start here -->
            <div class="season-card">
                <a href="<?php echo $image_obj['custom-href'] ?>"><img src="<?php echo $image_obj['src'] ?>" alt="" srcset=""></a>
                <div class="season-card-desc flex-center">
                    <h2><?php echo $image_obj['title'] ?></h2>
                </div>
            </div>  
    <?php endforeach; ?>
        </div>

<?php
    get_footer();
?>
