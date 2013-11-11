<?php

function __autoload( $classname ){
    switch ( true ){
        case file_exists( dirname( __FILE__ ) . "/lib/decrypters/$classname.class.php" ):
            require_once dirname( __FILE__ ) . "/lib/decrypters/$classname.class.php";
            break;
        case file_exists( dirname( __FILE__ ) . "/lib/encrypters/$classname.class.php" ):
            require_once dirname( __FILE__ ) . "/lib/encrypters/$classname.class.php";
            break;
        case file_exists( dirname( __FILE__ ) . "/lib/factories/$classname.class.php" ):
            require_once dirname( __FILE__ ) . "/lib/factories/$classname.class.php";
            break;
        default:
            require_once dirname( __FILE__ ) . "/lib/interfaces/$classname.php";
            break;
    }
}

$password = 'abc';
$encrypter = Encrypter::getInstance( "kakuna" );
print $encrypter->encrypt( $password ) . PHP_EOL;

$password = 'xyz';
$encrypter = Encrypter::getInstance( "numeric" );
print $encrypter->encrypt( $password ) . PHP_EOL;

$password = 'abc';
$decrypter = Decrypter::getInstance( "kakuna" );
print $decrypter->decrypt( $password ) . PHP_EOL;

$password = '12-6-9';
$decrypter = decrypter::getInstance( "numeric" );
print $decrypter->decrypt( $password ) . PHP_EOL;