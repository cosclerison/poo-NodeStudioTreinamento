<?php

/**
 * [Aula - 23 - Composer Install]
 */

 require_once 'vendor/autoload.php';

 use Cocur\Slugify\Slugify;

$slugify = new Slugify();
echo $slugify->slugify("Testando SLUG!", '_'); // hello-world