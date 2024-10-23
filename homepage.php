<?php
/* Template Name: Home */

get_header();
global $post;

$top_page_img = get_field('top_page_img');
$top_page_logo = get_field('top_page_logo');

$section_title = get_field('section_title');
$section_description = get_field('section_description');
$section_btn = get_field('section_btn');
$section_img = get_field('section_img');

$section_title_2 = get_field('section_title_2');
$section_description_2 = get_field('section_description_2');
$section_btn_2 = get_field('section_btn_2');
$section_img_2 = get_field('section_img_2');
?>



<main id="homepage">





    <section class="top-page">

        <div class="top-page-img" style="background-image: url('<?php echo $top_page_img ?>');">



        </div>

        <div class="page-title" style="background-image: url('<?php echo $top_page_logo ?>');"></div>


    </section>

    <div class="container">

        <section class="section-creation">

            <div class="text-side">
                <h2 class="section-title"><?php echo $section_title ?></h2>
                <div class="section-text">
                    <?php echo $section_description ?>
                </div>

                <a class='animated-arrow' href=''>
                    <span class='link-container'>
                        <span class='text'>
                            <?php echo $section_btn ?>
                        </span>
                        <span class='the-arrow -right'>
                            <span class='shaft'></span>
                        </span>
                    </span>
                </a>
            </div>

            <div class="image-side" style="background-image: url('<?php echo $section_img ?>');">

            </div>

        </section>

        <section class="section-atelier">

            <div class="text-side">
                <h2 class="section-title"><?php echo $section_title_2 ?></h2>
                <div class="section-text">
                    <?php echo $section_description_2 ?>
                </div>

                <a class='animated-arrow' href=''>
                    <span class='link-container'>
                        <span class='text'>
                            <?php echo $section_btn ?>
                        </span>
                        <span class='the-arrow -right'>
                            <span class='shaft'></span>
                        </span>
                    </span>
                </a>
            </div>

            <div class="image-side" style="background-image: url('<?php echo $section_img_2 ?>');">

            </div>

        </section>






    </div>


</main>



<?php
get_footer();
