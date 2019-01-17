# Laravel 5 DKIM
Package, that allows sign emails with DKIM.

## Installation
1. Install via Composer:
```
composer require vitalybaev/laravel5-dkim
```
2. In `config/app.php` comment line with original service provider:
```
// Illuminate\Mail\MailServiceProvider::class,
```
3. In `config/app.php` add following line to provider's section:
```
Vitalybaev\LaravelDkim\DkimMailServiceProvider::class,
```
4. Fill your settings in `config/mail.php`:
```
'dkim_selector' => env('MAIL_DKIM_SELECTOR'), // selector, required
'dkim_domain' => env('MAIL_DKIM_DOMAIN'), // domain, required
'dkim_private_key' => env('MAIL_DKIM_PRIVATE_KEY'), // path to private key, required
'dkim_identity' => env('MAIL_DKIM_IDENTITY'), // identity (optional)
'dkim_algo' => env('MAIL_DKIM_ALGO'), // sign algorithm (defaults to rsa-sha256)
'dkim_passphrase' => env('MAIL_DKIM_PASSPHRASE'), // private key passphrase (optional)
```

## License

> The MIT License
>  
>  Copyright (c) 2016 Vitaly Baev
>  
>  Permission is hereby granted, free of charge, to any person obtaining a copy
>  of this software and associated documentation files (the "Software"), to deal
>  in the Software without restriction, including without limitation the rights
>  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
>  copies of the Software, and to permit persons to whom the Software is
>  furnished to do so, subject to the following conditions:
>  
>  The above copyright notice and this permission notice shall be included in
>  all copies or substantial portions of the Software.
>  
>  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
>  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
>  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
>  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
>  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
>  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
>  THE SOFTWARE.
