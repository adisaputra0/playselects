<?php

/**
 * Plugin Name: Footer Icons
 */

add_action('init', function(){
    add_option('footer-icons', [
        'twitter' => [
            'show' => '1',
            'link' => '#',
            'class' => 'fab fa-twitter'
        ],
        'facebook' => [
            'show' => '1',
            'link' => '#',
            'class' => 'fab fa-facebook-f'
        ],
        'instagram' => [
            'show' => '1',
            'link' => '#',
            'class' => 'fab fa-instagram'
        ]
    ]);
});

add_action('admin_menu', function(){
    add_menu_page(
        'social links',
        'social links',
        'manage_options',
        'social-links',
        function(){
            $option = get_option('footer-icons');
            ?>
                <div class="wrap">
                    <form action="<?=admin_url('admin-post.php')?>" method="POST">
                        <input type="hidden" name="action" value="footer_icons">
                        <table class="widefat">
                            <thead>
                                <tr>
                                    <th>Social Media</th>
                                    <th>Show / Hide</th>
                                    <th>Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($option as $social_name => $item):?>
                                    <tr>
                                        <td><?=$social_name?></td>
                                        <td>
                                            <input type="radio" name="option[<?=$social_name?>][show]" value="1" <?=($item['show'] == '1')? 'checked':''?>>
                                            <input type="radio" name="option[<?=$social_name?>][show]" value="0" <?=($item['show'] == '0')? 'checked':''?>>
                                        </td>
                                        <td>
                                            <input type="text" name="option[<?=$social_name?>][link]" value="<?=$item['link']?>">
                                            <input type="hidden" name="option[<?=$social_name?>][class]" value="<?=$item['class']?>">
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                        <p>
                            <button class="button button-primary">Save</button>
                        </p>
                    </form>
                </div>
            <?php
        }
    );
});

add_action('admin_post_footer_icons', function(){
    update_option('footer-icons', $_POST['option']);
    wp_redirect(wp_get_referer());
});

add_shortcode('footer-icons', function(){
    $option = get_option('footer-icons');
    ?>
        <div class="social">
            <ul>
                <?php foreach($option as $social_name => $item):?>
                    <?php if($item['show'] == '1'):?>
                        <li><a href="<?=$item['link']?>"><i class="<?=$item['class']?>"></i></a></li>
                    <?php endif;?>
                <?php endforeach;?>
            </ul>
        </div>
    <?php
});

add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('fontawesome', plugins_url('/fontawesome/css/all.css', __FILE__));
});

?>