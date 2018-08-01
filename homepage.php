<?php
/**
 * Template Name: Homepage
 */
get_header(); ?>
    <header>
        <!-- Generator: Adobe Illustrator 22.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
        <svg version="1.1" id="curve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 1400 300" xml:space="preserve">
        <path class="st0" d="M0,261.1c0,0,152.6-114,494.6-42s472.5,73.6,669,9.1s309-48.1,309-48.1v150L0,349.6V261.1z"/>
        </svg>
        <div class="logo">
            <h2>Temple Smash</h2>
            <div class="next-event">
                <?php   $nextShowTime = get_field('showDateTime1'); 
                        $nextShowAddress = get_field('showAddress1');
                ?>
                <p><strong>Next Show:</strong> <?php echo $nextShowTime . " - " . $nextShowAddress; ?></p>
            </div>
        </div>  
        <img class="opacity-bg" src="<?php echo get_theme_file_uri('/images/templecrew.png') ?>" alt="" srcset="">          
    </header>

    <div id="about">
        <div class="image-about">
            <img src="<?php echo get_theme_file_uri('/images/about.jpg') ?>" alt="" srcset="">
        </div>
        <div class="text-about">
        <p> 
            Temple SMASH is Temple University's first student produced comedy variety TV show.  
            The concept was initially created by Scott McClennen as an opportunity for students to perform in an entertainment TV show. 
        </p> 
        <br>
        <p>
            With the help of his co-producer, Kimberly Burnick, and amazing faculty such as Frank Sauerwald, Jack McCarthy, and Rick Beardsly, the show became a reality on March 15th 2009.
            Since then Temple SMASH has been extremely fortunate to receive support from the School of Communications and Theater, and is now played on Temple's TV station, TUTV.
        </p>    
        </div>
    </div>

    <div id="img-grid">
        <?php $image1 = get_field('gallery_image_1') ?>
        <div class="image-small"><img src="<?php echo $image1['url']; ?>" alt="" srcset=""></div>
        

        <?php $image2 = get_field('gallery_image_2') ?>
        <div class="image-small"><img src="<?php echo $image2['url']; ?>" alt="" srcset=""></div>

        <?php $image3 = get_field('gallery_image_3') ?>
        <div class="image-small"><img src="<?php echo $image3['url']; ?>" alt="" srcset=""></div>

        <?php $image4 = get_field('gallery_image_4') ?>
        <div class="image-small"><img src="<?php echo $image4['url']; ?>" alt="" srcset=""></div>
    </div>

    <!-- Start Gallery function -->
    <?php
    wp_get_post_parent_id(get_the_ID());
    $gallery = get_post_gallery_images_with_info(); //you can use it without params too
    ?>
        <div id="video-grid">
        <div class="grid">
    <?php
    foreach( $gallery as $image_obj ) :    
    ?> 
        <div class="center-thumb">
            <h3><?php echo $image_obj['title'] ?></h3>
            <a href="<?php echo $image_obj['custom-href'] ?>"><img src="<?php echo $image_obj['src'] ?>" alt="" srcset=""></a>
        </div>

    <?php    
    endforeach;
    ?>
        </div>
        <div class="btn"><a href="index/archive/"><h4>archive</h4></a></div>
    </div>

    <div id="shows">
        <div class="shows-content">
            <div class="shows-text">
                <h2><?php if( get_field('showDateTime1') ): ?><?php echo the_field('showDateTime1');  endif; ?></h2>
                <p>
                    <?php if( get_field('showAddress1') ): ?><?php echo the_field('showAddress1');  endif; ?>
                    <?php if( get_field('show_ticket_1') ): ?><div class="btn"><a href="<?php echo the_field('show_ticket_1'); ?>">Buy Ticket</a></div><?php endif; ?>
                </p>
                

                <br>

                <h2><?php if( get_field('showDateTime2') ): ?><?php echo the_field('showDateTime2');  endif; ?></h2>
                <p>
                    <?php if( get_field('showAddress2') ): ?><?php echo the_field('showAddress2');  endif; ?>
                    <?php if( get_field('show_ticket_2') ): ?><div class="btn"><a href="<?php echo the_field('show_ticket_2'); ?>">Buy Ticket</a></div><?php endif; ?>
                </p>

                <br>

                <h2><?php if( get_field('showDateTime3') ): ?><?php echo the_field('showDateTime3');  endif; ?></h2>
                <p>
                    <?php if( get_field('showAddress3') ): ?><?php echo the_field('showAddress3');  endif; ?>
                    <?php if( get_field('show_ticket_3') ): ?><div class="btn"><a href="<?php echo the_field('show_ticket_3'); ?>">Buy Ticket</a></div><?php endif; ?>
                </p>

                <br>
            </div>
        </div>

    </div>

    <div id="staff">
        <div class="img-staff">
            <h2 class="center">Producers</h2>
            <a href="/producers/"><img src="<?php echo get_theme_file_uri('/images/producers.jpg') ?>" alt="" srcset=""></a>
        </div>
        <div class="img-staff">
            <h2 class="center">Writers</h2>
            <a href="/writers/"><img src="<?php echo get_theme_file_uri('/images/writers.jpg') ?>" alt="" srcset=""></a>
        </div>
        <div class="img-staff">
            <h2 class="center">Alumni</h2>
            <a href="/alumni/"><img src="<?php echo get_theme_file_uri('/images/producers.jpg') ?>" alt="" srcset=""></a>
        </div>
    </div>

<?php get_footer(); ?>

