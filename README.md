CSS editor extension for laravel-admin based on code-mirror
======

## Installation 

```bash
composer require laravel-admin-ext/css-editor

php artisan vendor:publish --tag=laravel-admin-code-mirror
```

## Configuration

In `extensions` section of file `config/admin.php`，add following configurations
```php

    'extensions' => [

        'css-editor' => [
        
            // set to false if you want to disable this exteions
            'enable' => true,
            
            // editor configuration 
            'config' => [
                
            ]
        ]
    ]

```

The configuration of the editor can be found in [CodeMirror Documents](https://codemirror.net/)

## Usage

Use it in form
```php
$form->css('code');

$form->scss('code');

$form->less('code');

```

Set height
```php
$form->css('code')->height(500);
```

## Donate

> Help keeping the project development going, by donating a little. Thanks in advance.

[![PayPal Me](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.me/zousong)

![-1](https://cloud.githubusercontent.com/assets/1479100/23287423/45c68202-fa78-11e6-8125-3e365101a313.jpg)

License
------------
Licensed under [The MIT License (MIT)](LICENSE).
