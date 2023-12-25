<?php get_header()?>
    <div class="banner">
        <h1>All Games</h1>
    </div>
    <div class="container">
        <div class="sort-by">
            <p class="sort-by">Sort by :</p>
            <form action="" method="GET">    
                <select name="sort" id="sort" oninput="submit()">
                    <option value="" selected>Release Date</option>
                    <option value="game-title" <?=(isset($_GET["sort"])&&$_GET["sort"]=="game-title")? 'selected':''?>>Game Title</option>
                </select>
            </form>
        </div>
        <div class="deck">
            <?php 
                if(isset($_GET["sort"])&&$_GET["sort"] == "game-title"){       
                    $posts = get_posts([
                        "post_type" => "post",
                        "orderBy" => 'title',
                        "order" => "ASC",
                        // "category_name" => "action"
                    ]);
                }else{        
                    $posts = get_posts([
                        "post_type" => "post",
                    ]);
                }?>
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