<?php
	
	class Usuario {

		public $id;

		public $nombre;

		public $apellido;

		public $email;

		public $twitter;

	}

	require_once('Phpseclib/Crypt/TripleDES.php');

	use Phpseclib\Crypt\Crypt_TripleDES as TripleDES;
	
	$usuario_obj = new Usuario();
	$usuario_obj->id = 1;
	$usuario_obj->nombre = 'Jos&eacute; Gabriel';
	$usuario_obj->apellido = 'Gonz&aacute;lez P&eacute;rez';
	$usuario_obj->email = 'jgabrielsinner10@gmail.com';
	$usuario_obj->twitter = '@JGabrielTupac';

	const KEY_ENCRYPT = '548c286a61462d896573567b7a30335d4959427e5c7a675e325b6c7a7c';

	$_KEY_ENCRYPT = KEY_ENCRYPT;

	$encrypter = new TripleDES();
	$encrypter->setKey($_KEY_ENCRYPT);
	$usuario_obj_encrypt = $encrypter->encrypt(serialize($usuario_obj));
	$usuario = unserialize($encrypter->decrypt($usuario_obj_encrypt));

	var_dump($usuario_obj_encrypt);

	var_dump($usuario);

?>