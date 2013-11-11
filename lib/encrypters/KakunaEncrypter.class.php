<?php

/**
 * Class with implementation of kakuna encription algorithm that transforms every 
 * character to the character situated 3 positions after.
 * 
 * Examples: 'abc' => 'def', 'xyz' => 'abc'
 *
 * @author Denis Stokovsky <dstokovsky@gmail.com>
 */
class KakunaEncrypter implements IEncrypter {
    
    const ALPHABETE_OFFSET = 3;
    
    /**
     * Encrypts the given value by the class specified rules.
     * 
     * @param string $decrypted_string
     * @return string
     */
    public function encrypt( $decrypted_string ) {
        $encrypted_string = "";
        for( $i = 0; $i < strlen( $decrypted_string ); $i++ ){
            $current_char = $decrypted_string[ $i ];
            for( $j = 0; $j < self::ALPHABETE_OFFSET; $j++ ){
                $current_char++;
                if( strlen( $current_char ) > 1 ){
                    $current_char = $current_char[ 0 ];
                }
            }
            $encrypted_string .= $current_char;
        }
        
        return $encrypted_string;
    }
}
