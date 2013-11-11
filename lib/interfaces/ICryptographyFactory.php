<?php

/**
 * Description of ICryptoFactory
 *
 * @author denis
 */
interface ICryptographyFactory {

    public static function getInstance( $cryptography_method_name );
}
