<?php get_header();
get_post();?>

<div class="banner-single">
    <?=the_post_thumbnail()?>
</div>
<div class="content-single">
    <h3><?=the_title()?></h3>
    <?=the_content()?>
</div>

<?php get_footer();?>