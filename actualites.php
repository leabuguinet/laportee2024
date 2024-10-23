<?php
/* Template Name: Actualités */

get_header();
global $post;
$top_page_img = get_field('top_page_img');
?>



<main id="actualites">

    <section class="top-page">

    <div class="top-page-img" style="background-image: url('<?php echo $top_page_img ?>');">

    <div class="page-title"><?php the_title( '<h1>', '</h1>' ); ?></div>
    </div>


    </section>


    <div class="container">

        <h2>Retrouvez-nous sur scène :</h2>

        <?php echo do_shortcode( "[MEC id='2900']" ); ?>

    
        <h2>Archives</h2>

        <?php echo do_shortcode(" [MEC id='2901'] ")?>
    </div>


</main>



<?php
get_footer();
