<?php get_header()?>
    <div class="banner">
        <h1>PlaySelects</h1>
        <p class="text-center">Discover a curated selection of top-notch games tailored for your gaming satisfaction and enjoyment.</p>
    </div>
    <div class="container">
        <h2>Recommendation Games</h2>
        <div class="deck">
            <?php $posts = get_posts([
                "posts_per_page" => 4,
                "post_type" => "post",
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
    <hr class="my-3 mx-auto" width="30px">
    <div class="container">
        <h2>Articles</h2>
        <div class="deck">
            <?php $pages = get_posts([
                "posts_per_page" => 4,
                "post_type" => "page",
            ])?>
            <?php foreach ($pages as $page): ?>
                <div class="card">
                    <div class="card-content">
                        <h3><?=get_the_title($page)?></h3>
                        <p><?=wp_strip_all_tags($page->post_content)?></p>
                        <a href="<?=get_permalink($page)?>"><span></span>Learn More</a>
                    </div>
                    <div class="card-thumbnail">
                        <?=get_the_post_thumbnail($page)?>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
<?php get_footer()?>