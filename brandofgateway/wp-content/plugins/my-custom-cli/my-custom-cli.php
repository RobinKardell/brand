<?php
/**
 * Plugin Name: My Custom CLI
 * Description: A custom WP CLI command.
 * Version: 1.0
 */

if ( defined( 'WP_CLI' ) && WP_CLI ) {
    /**
     * Function for the 'mycli' command.
     */
    function mycli_hello( $args, $assoc_args ) {
        WP_CLI::success( 'hello world' );
    }

    WP_CLI::add_command( 'mycli', 'mycli_hello' );
}
