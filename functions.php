<?php 

function smash_files() {
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Gaegu|Open+Sans');
    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.0.10/css/all.css');
    wp_enqueue_style('smash_main_styles', get_stylesheet_uri());
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/stickynav.js', array(), 1.1, true);
    wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js', array (), 1.1, true);
}

add_action( 'wp_enqueue_scripts', 'smash_files');

//Add title
function smash_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'smash_features');

//Get gallery images
function get_post_gallery_images_with_info($postvar = NULL) {
    if(!isset($postvar)){
        global $post;
        $postvar = $post;//if the param wasnt sent
    }


    $post_content = $postvar->post_content;
    preg_match('/\[gallery.*ids=.(.*).\]/', $post_content, $ids);
    $images_id = explode(",", $ids[1]); //we get the list of IDs of the gallery as an Array


    $image_gallery_with_info = array();
    //we get the info for each ID
    foreach ($images_id as $image_id) {
        $attachment = get_post($image_id);
        array_push($image_gallery_with_info, array(
            'alt' => get_post_meta($attachment->ID, '_wp_attachment_image_alt', true),
            'caption' => $attachment->post_excerpt,
            'description' => $attachment->post_content,
            'href' => get_permalink($attachment->ID),
            'src' => $attachment->guid,
            'title' => $attachment->post_title,
            'custom-href' => $custom_url = get_post_meta( $attachment->ID, '_gallery_link_url', true )
                )
        );
    }
    return $image_gallery_with_info;
}
function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
  
    if(empty($first_img)){ //Defines a default image
      $first_img = "/images/default.jpg";
    }
    return $first_img;
}
?>

