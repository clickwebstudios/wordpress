<?php
// Add shortcode for Webinars
add_shortcode('show_webinars', 'show_webinars');
function show_webinars($atts)
{
    $default = array(
        'posts_per_page' => '-1',
    );
    $a = shortcode_atts($default, $atts);
    $args = [
        'post_type' => 'webinars',
        'status' => 'published',
        'posts_per_page' => $a['posts_per_page']
    ];
    $query = new WP_Query($args);
    if ($query->have_posts()) {
        ob_start();
        echo '<div class="tatsu-row">';
        while ($query->have_posts()) {
            global $post;
            $query->the_post();
            get_template_part('template-parts/webinar', 'card', [
                'post' => $post,
            ]);
        }
        echo '</div>';
        wp_reset_postdata();
    }
    return ob_get_clean();
}