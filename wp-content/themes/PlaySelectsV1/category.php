<?php get_header();
$category = get_queried_object()?>
    <div class="banner">
        <h1><?=$category->name?></h1>
    </div>
    <div class="container">
        <div class="deck">
            <?php $posts = get_posts([
    "post_type" => "post",
    "category_name" => $category->name,
])?>
            <?php foreach ($posts as $post): ?>
                <div class="card">
                    <div class="card-content">
                        <h3><?=get_the_title($post)?></h3>
                        <p><?=wp_strip_all_tags($post->post_content)?></p>
                        <a href="<?=get_permalink($post)?>"><span></span>Learn More</a>
                    </div>
                    <div class="card-thumbnail">
                        <?=get_the_post_thumbnail($post)?>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
    <?php if(count($posts) === 0):?>
        <h3 class="text-center">No games available</h3>
    <?php endif?>
<?php get_footer()?>