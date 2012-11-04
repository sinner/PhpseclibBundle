# phpseclib - PHP Secure Communications Library modified to be a Symfony2 Bundle

PHP Secure Communications Library - Pure-PHP implementations of RSA, AES, SSH2, SFTP, X.509 etc. Created By Jim Wigginton and Modified to be a Symfony2 Bundle.

MIT-licensed pure-PHP implementations of an arbitrary-precision integer
arithmetic library, fully PKCS#1 (v2.1) compliant RSA, DES, 3DES, RC4, Rijndael,
AES, SSH-1, SSH-2, SFTP, and X.509


### Step 1: Download FOSUserBundle using composer

Add FOSUserBundle in your composer.json:

```js
{
    "require": {
        "jgabrielsinner10/phpseclib-bundle": "*"
    }
}
```

Now tell composer to download the bundle by running the command:

``` bash
$ php composer.phar update friendsofsymfony/user-bundle
```
or


``` bash
$ composer update jgabrielsinner10/phpseclib-bundle
```

Composer will install the bundle to your project's `vendor/jgabrielsinner10` directory.

### Step 2: Enable the bundle

Enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Phpseclib\Crypt\PhpseclibBundle(),
    );
}
```

### Step 3: Example to Use it.