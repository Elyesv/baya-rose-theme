<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package baya-rose
 */

?>

	<footer class="footer">
		<img class="footer-logo" src="wp-content/uploads/2022/01/logo.png" alt="">
		<div class="footer-content">
			<div class="footer-content-desc"><p>Pour les coutières débutantes ou confirmées, des <span>patrons de mode</span> modulables et une sélection de <span>tissus upcyclés</span> de grandes maison de couture, pour réaliser des créations de qualité tout en contribuant à une mode plus éthique.</p></div>
			<div class="footer-content-support">
				<p>Support</p>
				<?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-footer-1',
                        'menu_id'        => 'menu footer support',
                    )
                );
                ?>
			</div>
			<div class="footer-content-contact">
				<p>Contact</p>
				<?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-footer-2',
                        'menu_id'        => 'menu footer contact',
                    )
                );
                ?>
				<p>contact@bayarose-studio.com</p>
			</div>
		</div>
		<p>@ 2021 BAYA ROSE STUDIO tous droits réservés</p>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
