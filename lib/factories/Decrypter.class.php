<?php

/**
 * Description of Decrypter
 *
 * @author denis
 */
class Decrypter extends AbstractCryptographyFactory {
    
    public static function getInstance( $cryptography_method_name ) {
        return parent::getInstance( ucfirst( $cryptography_method_name ) . "Decrypter" );
    }
    
    private function __construct() {
        
    }
    
    private function __clone() {
        
    }

}
