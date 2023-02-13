<?php
/**
 * Functions and definitions
 */

 // Add style and script

 function add_theme_scripts() {
	wp_enqueue_style( 'gs-style', get_stylesheet_uri() );

	wp_enqueue_script( 'gs-script', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), 1.1, true );

	 wp_enqueue_style( 'gs-font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');

	 wp_enqueue_script( 'gs-font-awesome-script', 'https://use.fontawesome.com/releases/v6.1.0/js/all.js');

	wp_enqueue_style( 'gs-varela-google-font', 'https://fonts.googleapis.com/css?family=Varela+Round&display=swap', false );

	wp_enqueue_style( 'gs-nunito-google-font', 'https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap', false );

	}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

 // Register Main Menu

function gs_main_menu() {
    register_nav_menu('gs-main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'gs_main_menu' );

// Add custom class to the li tag

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// Add custom class to the link of menu items

function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );


// Add meta box for the first section of the Homepage

add_action('add_meta_boxes', 'gs_add_custom_box');
add_action( 'save_post', 'gs_save_custom_box', 10, 1 );


function gs_add_custom_box() {
        add_meta_box(
             'gs_first_section',
             'First Section Options',
             'gs_custom_box_html',
             'page'
        );
}

function gs_custom_box_html( $post ) {
    ?>
    <label for="intro_title">Intro Title</label>
    <input type="text" name="gs_first_section_title" id="gs_first_section_title" value="<?php echo( get_post_meta( $post->ID, 'gs_first_section_title', true ) ); ?>" >
    <br>
    <br>
    <label for="intro_desc">Intro Description</label>
    <input type="text" style=" width:700px" name="gs_first_section_desc" id="gs_first_section_desc" value="<?php echo( get_post_meta( $post->ID, 'gs_first_section_desc', true ) ); ?>" >
    <br>
    <br>
    <label for="intro_btn_text">Intro Button Text</label>
    <input type="text" name="gs_first_section_btn" id="gs_first_section_btn" value="<?php echo( get_post_meta( $post->ID, 'gs_first_section_btn', true ) ); ?>" >
    <br>
    <br>
    <label for="intro_btn_link">Intro Button Link</label>
    <input type="text" name="gs_first_section_btn_link" id="gs_first_section_btn_link" value="<?php echo( get_post_meta( $post->ID, 'gs_first_section_btn_link', true ) ); ?>" >
    <br>
    <br>
    <label for="intro_background_image">Intro Background Image URL</label>
    <input type="text" style=" width:500px" name="gs_first_section_back_image" id="gs_first_section_back_image" value="<?php echo( get_post_meta( $post->ID, 'gs_first_section_back_image', true ) ); ?>" >

    <?php
}



function gs_save_custom_box($post_id){

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    if (isset($_POST['gs_first_section_title'])){
        update_post_meta($post_id,'gs_first_section_title',$_POST['gs_first_section_title']);
    }

    if (isset($_POST['gs_first_section_desc'])){
        update_post_meta($post_id,'gs_first_section_desc',$_POST['gs_first_section_desc']);
    }

    if (isset($_POST['gs_first_section_btn'])){
        update_post_meta($post_id,'gs_first_section_btn',$_POST['gs_first_section_btn']);
    }

    if (isset($_POST['gs_first_section_btn_link'])){
        update_post_meta($post_id,'gs_first_section_btn_link',$_POST['gs_first_section_btn_link']);
    }

    if (isset($_POST['gs_first_section_back_image'])){
        update_post_meta($post_id,'gs_first_section_back_image',$_POST['gs_first_section_back_image']);
    }

}


// Add meta box for the second section of the Homepage


add_action('add_meta_boxes', 'gs_add_second_custom_box');
add_action( 'save_post', 'gs_save_second_custom_box', 10, 1 );


function gs_add_second_custom_box() {
    add_meta_box(
        'gs_second_section',
        'Second Section Options',
        'gs_second_custom_box_html',
        'page'
    );
}

function gs_second_custom_box_html( $post ) {
?>
<label for="second_title">Second Title</label>
<input type="text" name="gs_second_section_title" id="gs_second_section_title" value="<?php echo( get_post_meta( $post->ID, 'gs_second_section_title', true ) ); ?>" >
<br>
<br>
<label for="second_desc">Second Description</label>
<input type="text" style=" width:700px" name="gs_second_section_desc" id="gs_second_section_desc" value="<?php echo( get_post_meta( $post->ID, 'gs_second_section_desc', true ) ); ?>" >
<br>
<br>
<label for="second_img">Second Image</label>
<input type="text" style=" width:700px" name="gs_second_section_img" id="gs_second_section_img" value="<?php echo( get_post_meta( $post->ID, 'gs_second_section_img', true ) ); ?>" >
<br>
<?php
}


function gs_save_second_custom_box($post_id)
{

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if (isset($_POST['gs_second_section_title'])) {
        update_post_meta($post_id, 'gs_second_section_title', $_POST['gs_second_section_title']);
    }

    if (isset($_POST['gs_second_section_desc'])) {
        update_post_meta($post_id, 'gs_second_section_desc', $_POST['gs_second_section_desc']);
    }

    if (isset($_POST['gs_second_section_img'])) {
        update_post_meta($post_id, 'gs_second_section_img', $_POST['gs_second_section_img']);
    }
}
