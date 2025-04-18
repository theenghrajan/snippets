<?php
/**
 * Created by PhpStorm.
 * User: XperSona
 * Date: 4/18/2019
 * Time: 21:58
 */
require __DIR__ . '/../functions.php';

$config = CONFIG;
unset($config['smtp']);
echo '<pre>';
print_r($config);
echo '</pre>';