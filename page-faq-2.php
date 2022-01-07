<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package baya-rose
 */

get_header();
?>

	<main id="primary" class="site-main">

    
    <div class="header">
<img src="<?php echo get_template_directory_uri(); ?>/img/pexels-photo-7682666.png" alt="">
<h1>FAQ</h1>
</div>

<div class="contenu">
<img src="<?php echo get_template_directory_uri(); ?>/img/Illustration 9.png" alt="">
   </div>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
<div class="paiement">
<img src="<?php echo get_template_directory_uri(); ?>/img/Illustration 8.png" alt="">
</div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
