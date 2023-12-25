<?php get_header();
$category = get_queried_object()?>
    <div class="banner">
        <h1>Articles</h1>
    </div>
    <div class="container">
        <div class="deck">
            <?php $posts = get_posts([
                "post_type" => "page",
                // "category_name" => "action"
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
<?php get_footer()?>