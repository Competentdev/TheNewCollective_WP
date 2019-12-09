<?php

/*
Plugin Name: Neori Social Share Buttons
Plugin URI: http://litmotion.net
Description: Displays some Social Share Buttons at the beginning and at the end of the posts.
Version: 1.1
Author: litMotion
*/


/* Displaying the plugin in the front-end, after the post tags */

function add_neori_social_share_buttons_icons($content)
{
    $html = "<div class='social-icons row align-items-center'>";

    global $post;

    $url = get_permalink($post->ID);
    $url = esc_url($url);

    $media = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
    $media = esc_url($media);

    $description = get_the_title($post->ID);
    $description = esc_html($description);

    $html = $html . "<a target='_blank' href='http://www.facebook.com/sharer.php?u=" . $url . "'><div class='icon-social-facebook col'></div></a>";

    $html = $html . "<a target='_blank' href='https://twitter.com/share?url=" . $url . "'><div class='icon-social-twitter col'></div></a>";

    $html = $html . "<a target='_blank' href='https://plus.google.com/share?url=" . $url . "'><div class='icon-social-google col'></div></a>";

    $html = $html . "<a target='_blank' href='https://pinterest.com/pin/create/button/?url=" . $url . "&media=" . $media . "&description=" . $description . "'><div class='icon-social-pinterest col'></div></a>";

    $html = $html . "</div>";

    return $content = $content . $html;
}

add_shortcode('neori-social-share-icons', 'add_neori_social_share_buttons_icons');
