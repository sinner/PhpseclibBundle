<?php

namespace Phpseclib;

require_once(__DIR__.'/Crypt/AES.php');
require_once(__DIR__.'/Crypt/DES.php');
require_once(__DIR__.'/Crypt/Hash.php');
require_once(__DIR__.'/Crypt/RC4.php');
require_once(__DIR__.'/Crypt/Random.php');
require_once(__DIR__.'/Crypt/Rijndael.php');
require_once(__DIR__.'/Crypt/RSA.php');
require_once(__DIR__.'/Crypt/TripleDES.php');


use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

use Phpseclib\Crypt\Crypt_AES as AES;
use Phpseclib\Crypt\Crypt_DES as DES;
use Phpseclib\Crypt\Crypt_Hash as Hash;
use Phpseclib\Crypt\Crypt_RC4 as RC4;
use Phpseclib\Crypt\Crypt_Rijndael as Rijndael;
use Phpseclib\Crypt\Crypt_RSA as RSA;
use Phpseclib\Crypt\Crypt_TripleDES as TripleDES;

class PhpseclibCryptBundle extends Bundle{

	public $AES;
	public $DES;
	public $Hash;
	public $Rijndael;
	public $RSA;
	public $TripleDES;

	public function build(ContainerBuilder $container){
		
		parent::build($container);

		$this->AES = new AES();
		$this->DES = new DES();
		$this->Hash = new Hash();
		$this->Rijndael = new Rijndael();
		$this->RSA = new RSA();
		$this->TripleDES = new TripleDES();
	}

}