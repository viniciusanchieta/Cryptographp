<p align="center">
    <img src="https://img.icons8.com/nolan/256/password.png" width="150">
</p>

<h1 align="center">Cryptographp</h1>

<p align="center">
  API designed to encrypt any data.
</p>


## What did I use?

 * Visual Studio Code
 * Xampp
 * PHP Pure


## How to use
```
$ git clone https://github.com/viniciusanchieta/Cryptographp.git
$ cd Cryptographp/
$ cd code .
```
If you prefer, edit the env.php file as shown below.
``` php
    $variables = [
    //Enter a reference key in the encryption.
    'key' => 'Fd9xg84HF\/ZSjg+cH45mLHigZelLwUdX++WGp6jkZ3Vx4j3woNYO\/l5zvRgNs9GUpf3ejJlpVlTvbpRXL9Fwa9R8EuaqP0qPvm1RKv22Lps=',

    //AES: Advanced Cryptography Standard. This is the name of the encryption algorithm (symmetric encryption). Other symmetric encryption algorithms are: DES, 3-DES etc.
    //128: This is the key size. AES encryption uses three key sizes (128 bits, 192 bits, and 256 bits). The block size in AES is also 128 bits.
    //CBC: This is the encryption mode you want. There are several encryption modes, which depend on how fast you can query your functional algorithm, parallelism, and security level. Some modes are CBC (Cipher Block Chaining), BCE (Electronic Code Book), CFB (Cipher FeedBack), CTR (Counter), etc.
    'cipher'=> 'AES-128-CBC'
    ];

    foreach ($variables as $key => $value) {
        putenv("$key=$value");
    }

    if (!function_exists('env')) {
        function env($key, $default = null)
        {
            $value = getenv($key);

            if ($value === false) {
                return $default;
            }

            return $value;
        }
    }
```

## By


| [<img src="https://avatars3.githubusercontent.com/u/31235308?s=460&u=f4799cdf05b9188e08c4802f76ee7059fa515c86&v=4" width="150"><br><sub>Vinicius Cesar</sub>](https://github.com/viniciusanchieta) |
| :---: |
