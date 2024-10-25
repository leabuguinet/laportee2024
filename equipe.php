<?php
/* Template Name: Equipe */

get_header();
global $post;

$top_page_img = get_field('top_page_img');

$cie_title = get_field('cie_title');
$cie_description = get_field('cie_description');
$da_title = get_field('da_title');
$da_img = get_field('da_img');
$da_name = get_field('da_name');
$da_link = get_field('da_link');
$artists_title = get_field('artists_title');
$artists_list = get_field('artists_list');
$admin_title = get_field('admin_title');
$admin_list = get_field('admin_list');
$associated_title = get_field('associated_title');
$associated_list = get_field('associated_list');
$cie_friend_title = get_field('cie_friend_title');
$cie_friend_list = get_field('cie_friend_list');
?>



<main id="equipe">

    <section class="top-page">

        <div class="top-page-img" style="background-image: url('<?php echo $top_page_img ?>');">

            <div class="page-title"><?php the_title('<h1>', '</h1>'); ?></div>
        </div>


    </section>

    <div class="container">

        <section class="section-cie">

            <h2 class="section-title"><?php echo $cie_title ?></h2>

            <div>
                <p>
                    <?php echo $cie_description ?>
                </p>
            </div>

        </section>

        <section class="section-da">

            <h2 class="section-title"><?php echo $da_title ?></h2>

            <div class="section-da-container">



                <div class="da-name">
                    <p><?php echo $da_name ?></p>

                    <span><a class='animated-arrow' href='<?php echo $da_link ?>'>
                            <span class='link-container'>
                                <span class='text'>
                                    en savoir plus
                                </span>
                                <span class='the-arrow -right'>
                                    <span class='shaft'></span>
                                </span>
                            </span>
                        </a></span>


                    <div class="da-img-container">
                        <div class="da-img" style="background-image: url('<?php echo $da_img ?>');"></div>
                    </div>
                </div>


            </div>

        </section>

        <section class="section-artists">

            <h2 class="section-title"><?php echo $artists_title ?></h2>


            <div class="section-artists-container">

                <div class="section-artists-list">

                    <?php
                    for ($i = 1; $i <= count($artists_list); $i++) {
                    ?>

                        <?php if ($artists_list["person_{$i}"]["person_name"]) {

                        ?>
                            <div class="artist-name">
                                <p><?php echo $artists_list["person_{$i}"]["person_name"] ?></p>
                                <div class="artist-img-container">
                                    <div class="artist-img left" style="background-image: url('<?php echo $artists_list["person_{$i}"]["person_img"] ?>');"></div>
                                </div>
                            </div>

                        <?php } ?>

                    <?php } ?>

                </div>
            </div>

        </section>

        <section class="section-admin">

            <h2 class="section-title"><?php echo $admin_title ?></h2>

            <div class="section-admin-container">

                <div class="section-admin-list">

                    <?php
                    for ($i = 1; $i <= count($admin_list); $i++) {
                    ?>

                        <?php if ($admin_list["admin_{$i}"]["admin_name"]) {

                        ?>
                            <div class="admin-name">
                                <p><?php echo $admin_list["admin_{$i}"]["admin_name"] ?></p>
                                <p class="admin-role"><?php echo $admin_list["admin_{$i}"]["admin_role"] ?></p>
                                <div class="admin-img-container">
                                    <div class="admin-img left" style="background-image: url('<?php echo $admin_list["admin_{$i}"]["admin_img"] ?>');"></div>
                                </div>
                            </div>

                        <?php } ?>

                    <?php } ?>

                </div>
            </div>

        </section>


        <section class="section-associated">

            <h2 class="section-title"><?php echo $associated_title ?></h2>

            <div class="section-content">
                <p>
                <?php echo $associated_list ?>
                </p>
            </div>

        </section>

        <section class="section-cie-friend">

            <h2 class="section-title"><?php echo $cie_friend_title ?></h2>

            <div class="cie-friend-list">
                <?php
                for ($i = 1; $i <= count($cie_friend_list); $i++) {
                ?>

                    <?php if ($cie_friend_list["cie_friend_{$i}"]["logo"]) {

                    ?>

                        <a href="<?php echo $cie_friend_list["cie_friend_{$i}"]["logo_link"] ?>"  style="background-image: url('<?php echo $cie_friend_list["cie_friend_{$i}"]["logo"] ?>');">
                            </a>



                        <?php } ?>

                    <?php } ?>

            </div>


        </section>

    </div>






</main>



<?php
get_footer();
