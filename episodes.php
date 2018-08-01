<?php
/**
 * Template Name: Season
 */
get_header() ?>

<?php 
/* $episodes = array(
    get_field('episode1'),
    get_field('episode2'),
    get_field('episode3'),
    get_field('episode4')
);
$episodeTitles = array(
    get_field('episodeTitle1'),
    get_field('episode_2_title'),
    get_field('episode_3_title'),
    get_field('episode_4_title')
); */

$episodes = array(
    array(get_field('episode1')) ? array(get_field('episode1'), get_field('episodeTitle1'), get_field('episode_1_desc')) : null,
    array(get_field('episode3')) ? array(get_field('episode2'), get_field('episode_2_title'), get_field('episode_2_desc')) : null,
    array(get_field('episode3')) ? array(get_field('episode3'), get_field('episode_3_title'), get_field('episode_3_desc')) : null,
    array(get_field('episode3')) ? array(get_field('episode4'), get_field('episode_4_title'), get_field('episode_4
    _desc')) : null,
);
?>

    <div class="season-grid">

<?php
foreach ($episodes as &$episode) {
    if($episode[0] !== "") :
    ?>
        <div class="episode-card">
            <div class="episode-embed"><iframe src="<?php echo $episode[0]; ?>">" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
            
            <h2 class="episode-title flex-center"><?php echo $episode[1] ?></h2>
            <div class="episode-desc flex-center">
                <p><?php echo $episode[2] ?></p>
            </div>
        </div>
    <?php
    endif;
    };
?>
    </div>

<?php get_footer() ?>


    