<?php

// Add to the admin_init hook of your theme functions.php file 
add_action('init', 'myplugin_settings');
@ini_set('upload_max_size', '64M');
@ini_set('post_max_size', '64M');
@ini_set('max_execution_time', '300');

add_theme_support('post-thumbnails'); //Ativa o thumbnails em TODOS os Post Types
// Função para registrar os Scripts e o CSS
function osraros_scripts() {
// Carregando CSS header
    wp_enqueue_style('projectOrcamento', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style', get_stylesheet_uri());
// Carregando Scripts header
//wp_enqueue_script('jquery', get_template_directory_uri().'/assets/js/jquery-3.3.1.min.js', array('jquery'));
//Carregando no footer
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array('jquery'), '', true);
    wp_enqueue_script('jquery_mask', get_template_directory_uri() . '/assets/js/jquery.mask.min.js', array('jquery'), '', true);
    wp_enqueue_script('pace', get_template_directory_uri() . '/assets/js/pace.min.js', array('jquery'), '', true);
    wp_enqueue_script('materialize', get_template_directory_uri() . '/assets/js/materialize.min.js', array('jquery'), '', true);
    wp_enqueue_script('orcamento', get_template_directory_uri() . '/assets/js/projectOrcamento.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'osraros_scripts');

function origamid_scripts() {
// Desregistra o jQuery do Wordpress
    wp_deregister_script('jquery');
}

//Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Personalizar botoes de paginacao
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="waves-effect black-text btn transparent z-depth-0"';
}

//Tirar SPAN e BR do Contact Form
// Deregister Contact Form 7 JavaScript files on all pages without a form
add_filter('wpcf7_form_elements', function($contact_form) {
    $contact_form = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $contact_form);

    return $contact_form;
});

//Paginação
function wordpress_numeric_post_nav() {
    if (is_singular())
        return;
    global $wp_query;
    /* Stop the code if there is only a single page page */
    if ($wp_query->max_num_pages <= 1)
        return;
    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max = intval($wp_query->max_num_pages);
    /* Add current page into the array */
    if ($paged >= 1)
        $links[] = $paged;
    /* Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
    if (( $paged + 2 ) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
    echo '<ul class="pagination">' . "\n";
    /* Display Previous Post Link */
    if (get_previous_posts_link())
        printf('<li>%s</li>' . "\n", previous_posts_link('<i class="fas fa-chevron-left"></i>'));
    /* Display Link to first page */
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="active"' : '';
        printf('<li%s class="waves-effect"><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');
        if (!in_array(2, $links))
            echo '<li>…</li>';
    }
    /* Link to current page */
    sort($links);
    foreach ((array) $links as $link) {
        $class = $paged == $link ? ' class="active"' : '';
        printf('<li%s class="waves-effect"><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }
    /* Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links))
            echo '<li>…</li>' . "\n";
        $class = $paged == $max ? ' class="active"' : '';
        printf('<li%s class="waves-effect"><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }
    /** Next Post Link */
    if (get_next_posts_link())
        printf('<li>%s</li>' . "\n", next_posts_link('<i class="fas fa-chevron-right"></i>'));
    echo '</ul>' . "\n";
}

//Tags
function add_class_the_tags($html) {
    $postid = get_the_ID();
    $html = str_replace('<a', '<a class="chip white-text azul-escuro"', $html);
    return $html;
}

add_filter('the_tags', 'add_class_the_tags', 10, 1);

//Categorias
function myplugin_settings() {
// Add tag metabox to page
    register_taxonomy_for_object_type('post_tag', 'page');
// Add category metabox to page
    register_taxonomy_for_object_type('category', 'page');
}

//Breadcrumb
function bloglite_breadcrumb() {
    global $post;
    echo ' <div class="col s12 black-text">';
    if (!is_home()) {
        echo '<a class="breadcrumb black-text" href="';
        echo get_option('home');
        echo '">';
        echo 'Início';
        echo '</a>';
        if (is_category() || is_single()) {
            echo '<a class="breadcrumb black-text">';
            the_category(' </a><a class="breadcrumb black-text"> ');
            if (is_single()) {
                echo '</a><a class="breadcrumb black-text">';
                the_title();
                echo '</a>';
            }
        } elseif (is_page()) {
            if ($post->post_parent) {
                $anc = get_post_ancestors($post->ID);
                $title = get_the_title();
                foreach ($anc as $ancestor) {
                    $output = '<a class="breadcrumb black-text" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a>';
                }
                echo $output;
                echo '<a class="breadcrumb accent-text" title="' . $title . '"> ' . $title . '</a>';
            } else {
                echo '<a class="breadcrumb accent-text"> ' . get_the_title() . '</a>';
            }
        }
    } elseif (is_tag()) {
        single_tag_title();
    } elseif (is_day()) {
        echo "<a class='breadcrumb black-text'>Arquivo de ";
        the_time('j \d\e F \d\e Y');
        echo'</a>';
    } elseif (is_month()) {
        echo "<a class='breadcrumb black-text'>Arquivo de ";
        the_time('F \d\e Y');
        echo'</a>';
    } elseif (is_year()) {
        echo "<a class='breadcrumb black-text'>Arquivo de ";
        the_time('Y');
        echo'</a>';
    } elseif (is_author()) {
        echo "<a class='breadcrumb black-text'>Arquivo do autor";
        echo'</a>';
    } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
        echo "<a class='breadcrumb black-text'>Arquivo do blog";
        echo'</a>';
    } elseif (is_search()) {
        echo "<a class='breadcrumb black-text'>Resultados da pesquisa";
        echo'</a>';
    }
    echo '</div>';
}
