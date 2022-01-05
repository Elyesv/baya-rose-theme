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

<div class="hero-bg">
    <div class="hero-bg-title">
        <p>Contact</p>
    </div>
</div>
<div class="contact">
    <p class="contact-title">POUR NOUS CONTACTER, MERCI DE TRAITER LE FORMULAIRE CI-DESSOUS.</p>
    <div class="contact-form"><?php Ninja_Forms()->display( 2 );?></div>
</div>

<?php

get_footer();
