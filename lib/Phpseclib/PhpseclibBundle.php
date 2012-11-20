<?php

namespace Phpseclib;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

use Phpseclib\Crypt\Crypt_AES as AES;
use Phpseclib\Crypt\Crypt_DES as DES;
use Phpseclib\Crypt\Crypt_Hash as Hash;
use Phpseclib\Crypt\Crypt_RC4 as RC4;
use Phpseclib\Crypt\Crypt_Rijndael as Rijndael;
use Phpseclib\Crypt\Crypt_RSA as RSA;
use Phpseclib\Crypt\Crypt_TripleDES as TripleDES;


class PhpseclibBundle extends Bundle{

	public function build(ContainerBuilder $container){
		parent::build($container);
	}

}