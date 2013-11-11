<?php

/**
 * Description of IEncrypt
 *
 * @author denis
 */
interface IEncrypter extends ICryptography {
    
    public function encrypt( $decrypted_string );
}
