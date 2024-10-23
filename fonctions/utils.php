<?php

/**
 * Get URI for image
 * @param String $nom_image
 * @param String $format
 * @return string URI to current img in his specific directory format
 */

function get_uri_img($nom_image, $format) {
    return get_stylesheet_directory_uri().'/dist/img/'.$format.'/'.$nom_image;
}
