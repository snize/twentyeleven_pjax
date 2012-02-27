<?php


function addScripts()
{
    if (!is_admin()) {
        wp_enqueue_script('jquery');
        wp_enqueue_script('jquery.pjax', '/wp-content/themes/twentyeleven_pjax/libs/pjax/jquery.pjax.js', array('jquery'));
        wp_enqueue_script('wp_pjax', '/wp-content/themes/twentyeleven_pjax/js/wp_pjax.js', array('jquery'));
    }
}

add_action('wp_print_scripts', 'addScripts');


function pjax_get_header()
{
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        //do someting
        ?><title><?php wp_title('/', true, 'right'); ?><?php bloginfo('name'); ?></title><?php
    } else {
        get_header();
    }

}

function pjax_get_footer()
{
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        //do someting

    } else {
        get_footer();
    }

}

function pjax_get_sidebar()
{
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        //do someting

    } else {
        get_sidebar();
    }

}