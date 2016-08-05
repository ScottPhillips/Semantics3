# Semantics3

[![Latest Stable Version](https://poser.pugx.org/subbe/semantics3/v/stable)](https://packagist.org/packages/subbe/semantics3)
[![Total Downloads](https://poser.pugx.org/subbe/semantics3/downloads)](https://packagist.org/packages/subbe/semantics3)
[![Latest Unstable Version](https://poser.pugx.org/subbe/semantics3/v/unstable)](https://packagist.org/packages/subbe/semantics3)
[![License](https://poser.pugx.org/subbe/semantics3/license)](https://packagist.org/packages/subbe/semantics3)

Semantics3 is a laravel package built using the [lib\semantics3] php library giving access to [Semantics3 API] which lets you retrieve metadata for millions of products.

## Install
##### 1 -
Open terminal and from the root of your project,
```sh
composer require subbe/semantics3
```
##### 2 -
Open the file `config\app.php`

Add the following line to the providers array

`Subbe\Semantics3\Semantics3ServiceProvider::class,`


##### 3 -
`php artisan vendor:publish`

>running this commad will publish the **semantics3config.php** in the projects config folder. The file return an array with 2 values, 'SEMANTICS3_SECRET_KEY' and 'SEMANTICS3_PUBLIC_KEY'.

##### 4 -
To use this package, you will need to register on [semantics3].

Once you are registered and logged in, go to **Application** and you will find the keys required to use the API.

Update the projects **.env** file as required and it should look something like this.

```sh
SEMANTICS3_SECRET_KEY=ZHFAJHS************
SEMANTICS3_PUBLIC_KEY=SEM****************
```
replace the keys with the ones provided by Semantics3.

## Usage

Add this,

```php
use Subbe\Semantics3\Semantics3;
```

#### `Semantics3::search($item);`

```php
$item = Semantic3::search('iphone');
```
This returns product information based on the search term 'iphone'.

---

#### `Semantics3::brand($item);`

```php
$item = Semantic3::brand('apple');
```
This returns products information based on the brand name 'apple'

---

#### `Semantics3::upc($item);`
```php
$item = Semantic3::upc('0885909950942');
```
This returns product information based on the *UPC/EAN/GTIN* '0885909950942'

---

#### `Semantics3::site_query($item, $site);`

```php
$item = Semantics3::site_query('iphone', 'amazon.com');
```
This returns product information based on the search term 'iphone' from the website 'amazon.com'

---

Alternatively, you can use this as
```php
$sem = new Semantics3();
$search = $sem->search('iphone');
$upc = $sem->upc('0885909950942');
$site = $sem->site_query('iphone', 'amazon.com');
$site = $sem->categories('hard drives');
```

---

## THANK YOU

   [Semantics3 API]: https://www.semantics3.com
   [lib\semantics3]: https://github.com/Semantics3/semantics3-php
   [semantics3]: https://dashboard.semantics3.com/signup