<?php get_header(); ?>
<main class="l-body">
<div id="front_content" class="l-news">
    <div class="info_content">
        <?php display_first_posts(); ?>
    </div>
    <div class="info_content">
        <?php display_second_posts(); ?>
    </div>
    <div class="info_content">
        <?php display_third_posts(); ?>
    </div>
</div>
</main>
<?php get_footer(); ?>