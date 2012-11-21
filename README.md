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
        "Sinner/PhpseclibBundle": "*"
    }
}
```

Now tell composer to download the bundle by running the command:

``` bash
$ php composer.phar update sinner/phpseclib-bundle
```
or


``` bash
$ composer update sinner/phpseclib-bundle
```

Composer will install the bundle to your project's `vendor/Sinner` directory.

### Step 2: Activate PHPSecLibBundle in you Symfony2 Project

Edit the appKernel.php file in the $bundles array area:

```php
    //"app/appKernel.php"
    ...
    $bundles = array(
        new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
		...
		new Sinner\Phpseclib\PhpseclibBundle();
		...
    );
    ...
```

### Step 3: Encrypt, Decrypt and Enjoy