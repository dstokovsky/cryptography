<?php

/**
 * Description of Encrypter
 *
 * @author denis
 */
class Encrypter extends AbstractCryptographyFactory {
    
    public static function getInstance( $cryptography_method_name ) {
        return parent::getInstance( ucfirst( $cryptography_method_name ) . "Encrypter" );
    }

    private function __construct() {
        
    }
    
    private function __clone() {
        
    }
}
