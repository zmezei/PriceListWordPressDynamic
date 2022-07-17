<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts()
{
    wp_enqueue_style(
        'hello-elementor-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        [
            'hello-elementor-theme-style',
        ],
        '1.0.0'
    );
}

add_action('wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20);

if (isset($_POST["priceSubmitBtn"])) {
    // echo "<script>alert('Ár mentve!');</script>";
    $data = array(
        "price" => (float)$_POST["price"]
    );
    $table_name = "prices";

    $result = $wpdb->insert($table_name, $data, $format = null);
    if ($result == 1) {
        echo "<script>alert('Ár mentve!');</script>";
    } else {
        echo "<script>alert('Mentés sikertelen!');</script>";
    }
}
