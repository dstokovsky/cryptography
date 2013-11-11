<?php

/**
 * Class with implementation of numeric decription algorithm based on converting
 * hyphennumerical type strings into the clear characters strings in which every
 * character corresponds to its alphabete number from encrypted value, also remove
 * all hyphens.
 * 
 * Examples: '1-2-3' => 'abc', '24-25-26' => 'xyz'
 *
 * @author Denis Stokovsky <dstokovsky@gmail.com>
 */
class NumericDecrypter implements IDecrypter {
    
    const ASCII_CHARS_OFFSET = 96;
    
    /**
     * Decrypts the given value by the class specified rules.
     * 
     * @param string $encrypted_string
     * @return string
     */
    public function decrypt( $encrypted_string ) {
        $decrypted_string = "";
        $encrypted_string = explode( "-", $encrypted_string );
        foreach( $encrypted_string as $encrypted_char ){
            $decrypted_string .= chr( $encrypted_char + self::ASCII_CHARS_OFFSET );
        }
        
        return $decrypted_string;
    }
}
