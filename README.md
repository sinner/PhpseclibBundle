# PhpseclibBundle - PHP Secure Communications Library modified to be a Symfony2 Bundle

PHP Secure Communications Library - Pure-PHP implementations of RSA, AES, SSH2, SFTP, X.509 etc. Created By Jim Wigginton and Modified to be a Symfony2 Bundle.

MIT-licensed pure-PHP implementations of an arbitrary-precision integer
arithmetic library, fully PKCS#1 (v2.1) compliant RSA, DES, 3DES, RC4, Rijndael,
AES, SSH-1, SSH-2, SFTP, and X.509


### Step 1: Download phpseclib-bundle using composer

Add FOSUserBundle in your composer.json:

```js
{
    "require": {
        ...
        "sinner/phpseclibbundle": "dev-master"
        ...
    }
}
```

Now tell composer to download the bundle by running the command:

``` bash
$ php composer.phar update Sinner/PhpseclibBundle
```
or


``` bash
$ composer update Sinner/PhpseclibBundle
```

Composer will install the bundle to your project's `vendor/sinner` directory.

### Step 2: Activate PHPSecLibBundle in you Symfony2 Project

Edit the appKernel.php file in the $bundles array area:

```php
    //"app/appKernel.php"
    ...
    $bundles = array(
	...
	new Sinner\Phpseclib\PhpseclibBundle();
	...
    );
    ...
```

### Step 3: Encrypt, Decrypt and Enjoy

Suppose that you have a User Entity...

```php

    /**
     * Entity/Usuario.php
     * */   
    
    class Usuario {

        public $id;

        public $nombre;

        public $apellido;

        public $email;

        public $twitter;

    }

```

... and you want to save the User data on Encrypted Way (For example in a Session) from your Controller

```php

    /**
     * Controller/DefaultController.php
     * */

    use Sinner\Phpseclib\Crypt\Crypt_TripleDES as TripleDES;
    
    Class DefaultController extends Controller{

        public fucntion indexAction(){

             //...

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

            //...

        }

    }
   

```