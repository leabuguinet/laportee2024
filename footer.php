<?php 
    //get_template_part('template-parts/footer-part');
    wp_footer(); 
    $logoLaPortee = get_field('logo');
    ?>

<footer>

<div class="container">

    <div class="topfooter">

        <div>
        <?php
				wp_nav_menu([
					'menu' => 'footer',
					'container'      => false,
				]);
				?>
        </div>

        <div class="quote">
                <p>La Compagnie La Portée c'est une joie acerbe, face à un monde qui cloche. C'est l'insouciance délibérée, d'un canari pris dans les gaz mortels qui continue à chanter.</p>
        </div>

    </div>

    <div class="logo-footer">
    <img src="<?php echo get_template_directory_uri() . '/src/logo-complet-blanc.png'; ?>" />

    </div>

</div>


</footer>

</body>
</html> 