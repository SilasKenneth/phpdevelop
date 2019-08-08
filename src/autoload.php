<?php

function autoload( $class, $dir = null ) {

    if ( is_null( $dir ) )
        $dir = realpath(dirname(__FILE__));

    foreach ( scandir( $dir ) as $file ) {
        // directory?
        if ( is_dir( $dir.DIRECTORY_SEPARATOR.$file ) && substr( $file, 0, 1 ) !== '.' ) {
            autoload($class, $dir. DIRECTORY_SEPARATOR.$file);
        }

        // php file?
        if ( substr( $file, strlen($file) - 3, 3) === 'php' ) {

            // filename matches class?
            require_once $dir.DIRECTORY_SEPARATOR.$file;
        }
    }
}

spl_autoload_register( 'autoload' );