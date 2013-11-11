<?php

/**
 * Class with implementation of kakuna decription algorithm that transforms every 
 * character to the character situated 3 positions before.
 * 
 * Examples: 'def' => 'abc', 'abc' => 'xyz'
 *
 * @author Denis Stokovsky <dstokovsky@gmail.com>
 */
class KakunaDecrypter implements IDecrypter {
    
    const ALPHABETE_OFFSET = 23;
    
    /**
     * Decrypts the given value by the class specified rules.
     * 
     * @param string $encrypted_string
     * @return string
     */
    public function decrypt( $encrypted_string ) {
        $decrypted_string = "";
        for( $i = 0; $i < strlen( $encrypted_string ); $i++ ){
            $current_char = $encrypted_string[ $i ];
            for( $j = 0; $j < self::ALPHABETE_OFFSET; $j++ ){
                $current_char++;
                if( strlen( $current_char ) > 1 ){
                    $current_char = $current_char[ 0 ];
                }
            }
            $decrypted_string .= $current_char;
        }
        
        return $decrypted_string;
    }
}
