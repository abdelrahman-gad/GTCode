<?php 
// adding thejs and css files
function gt_setup(){
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab&display=swap');
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css');

    wp_enqueue_style('style',get_stylesheet_uri());
    wp_enqueue_script( 'main', get_theme_file_uri('js/main.js'), null,'1.0.0',true);
}

add_action( 'wp_enqueue_scripts','gt_setup');

// theme support settings
function gt_init(){
    add_theme_support('post-thumbnails');
    add_theme_support( 'title-tag' );
    add_theme_support( 'html5' ,
    array('comment-list','comment-form','search-form'));

}
add_action( 'after_setup_theme', 'gt_init');
// adding custom post ->project post types

function gt_custom_post_type(){
    register_post_type( 'project', array(
        'rewrite'=>array('slug'=>'projects'),
        'labels'=>array(
            'name'=>'Projects',
            'sigular_name'=>'Project',
            'add_new_item'=>'Add New Project',
            'edit_item'=>'Edit Project'
        ),
        'menu-icon'=>'dashicon',
        'public'=>true,
        'has-archive'=>true,
        'supports'=>array('title','comments','thumbnail','editor','excerpt')
    ));
}
add_action('init','gt_custom_post_type');

// register sidebar
function gt_widgets(){
    register_sidebar( array(
        'name'=>'Main Sidebar',
        'id'=>'main_sidebar',
        'before_title'=>'<h3>',
        'after_title'=>'</h3>'
    ) );
}

add_action( 'widgets_init', 'gt_widgets' );


function search_filter($query){
    if($query->is_search()){
        $query->set('post_type',array('post','project'));
    }
}
add_action( 'pre_get_posts','search_filter');






