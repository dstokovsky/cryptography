<?php

/**
 * Description of AbstractCryptographyFactory
 *
 * @author denis
 */
abstract class AbstractCryptographyFactory implements ICryptographyFactory {
    
    /**
     * 
     * @param type $cryptography_method_name
     * @return ICryptography
     */
    public static function getInstance( $cryptography_method_name ) {
        $cryptography_class_handler = new ReflectionClass( $cryptography_method_name );
        return $cryptography_class_handler->newInstance();
    }
}
