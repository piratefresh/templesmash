<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>
<body>
    <div class="main-container">
    <nav id="navigation" data-speed="1000">
        <ul>
            <li class="brand"><a href="<?php echo site_url() ?>"><img src="<?php echo get_theme_file_uri('images/logolowres.png') ?>" alt="" srcset=""></a></li>
            <?php if (!is_front_page()): ?>
                <li><a href="<?php echo site_url() ?>#about">About</a></li>
                <li><a href="<?php echo site_url() ?>#video-grid">Episodes</a></li>
                <li><a href="<?php echo site_url() ?>#shows">Shows</a></li>
                <li><a href="<?php echo site_url() ?>#staff">Staff</a></li>
                <li><a href="<?php echo site_url() ?>#footer">Contact</a></li>
            <?php else: ?>
                <li><a class="scroll" href="#about">About</a></li>
                <li><a class="scroll" href="#video-grid">Episodes</a></li>
                <li><a class="scroll" href="#shows">Shows</a></li>
                <li><a class="scroll" href="#staff">Staff</a></li>
                <li><a class="scroll" href="#footer">Contact</a></li>
            <?php endif ?>

        </ul>
    </nav>