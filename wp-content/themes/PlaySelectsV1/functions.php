<?php
add_action("login_enqueue_scripts", function () {
    wp_enqueue_style("login-custom-style", get_stylesheet_directory_uri() . "/css/login.css");
});
remove_action("welcome_panel", "wp_welcome_panel");
add_action("admin_menu", function () {
    remove_meta_box("dashboard_site_health", "dashboard", "normal");
    remove_meta_box("dashboard_primary", "dashboard", "normal");
    remove_meta_box("aioseo-rss-feed", "dashboard", "normal");
    remove_meta_box("wpseo-dashboard-overview", "dashboard", "normal");
});
add_action("init", function () {
    $posts = get_post_type_object("post");
    foreach ($posts->labels as $key => $value) {
        $value = str_replace("Posts", "Games", $value);
        $value = str_replace("posts", "games", $value);
        $value = str_replace("Post", "Game", $value);
        $value = str_replace("post", "game", $value);
        $posts->labels->$key = $value;
    }

    $pages = get_post_type_object("page");
    foreach ($pages->labels as $key => $value) {
        $value = str_replace("Pages", "Articles", $value);
        $value = str_replace("pages", "articles", $value);
        $value = str_replace("Page", "Article", $value);
        $value = str_replace("page", "article", $value);
        $pages->labels->$key = $value;
    }
});
