<?php

/**
 * Description of IDecrypt
 *
 * @author denis
 */
interface IDecrypter extends ICryptography {
    
    public function decrypt( $encrypted_string );
}
