<?php
/**
 * Created by IntelliJ IDEA.
 * User: lucasnascimento
 * Date: 17/06/2016
 * Time: 8:49 PM
 */


if ( ! function_exists( 'bonniedoon_the_custom_logo' ) ) :
    /**
     * Displays the optional custom logo.
     *
     * Does nothing if the custom logo is not available.
     *
     * @since Twenty Fifteen 1.5
     */
    function bonniedoon_the_custom_logo() {
        if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
        }
    }
endif;