<?php
/**
 * Template Name: Saving Price
 */

get_header();
?>

    <main id="site-content">
        <form role="form" method="post">
            <div>
                <input id="price" name="price" placeholder="Ár" type="number"/>
            </div>
            <div>
                <input type="submit" value="Mentés" class="btn" name="priceSubmitBtn">
            </div>
        </form>
    </main><!-- #site-content -->

<?php get_template_part('template-parts/footer-menus-widgets'); ?>

<?php
get_footer();
