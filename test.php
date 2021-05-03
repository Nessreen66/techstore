<?php

require_once('classes/Db.php');

require_once('classes/Product.php');

$prod=new Product();

$res =$prod ->selectAll();

echo '<pre>';
print_r ($prod);
echo '</pre>';