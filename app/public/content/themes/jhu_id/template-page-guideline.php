<?php

    global $post;
    $hash = '#' . get_the_slug($post->ID);
    $parent = $post->post_parent;
    $url = $parent . $hash;
    if($parent)
    {
        wp_redirect(get_permalink($url));
    }

?>
