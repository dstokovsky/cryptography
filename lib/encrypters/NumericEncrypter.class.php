<?php

/**
 * Class with implementation of numeric decription algorithm based on converting
 * alphabetical type strings into the hyphennumerical strings in which every
 * character corresponds to its alphabete number from decrypted value and divide
 * numbers with hyphens.
 * 
 * Examples: 'abc' => '1-2-3', 'xyz' => '24-25-26'
 *
 * @author Denis Stokovsky <dstokovsky@gmail.com>
 */
class NumericEncrypter implements IEncrypter {
    
    const ASCII_CHARS_OFFSET = 96;
    
    /**
     * Encrypts the given value by the class specified rules.
     * 
     * @param string $decrypted_string
     * @return string
     */
    public function encrypt( $decrypted_string ) {
        $encrypted_string = array();
        for( $i = 0; $i < strlen( $decrypted_string ); $i++ ){
            $encrypted_string[] = ord( strtolower( $decrypted_string[ $i ] ) ) - self::ASCII_CHARS_OFFSET;
        }
        
        return implode( "-", $encrypted_string );
    }
}
