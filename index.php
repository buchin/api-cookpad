<?php
require "vendor/autoload.php";
require "cookpad/Cookpad.php";

$cookpad = new Cookpad(new \PHPHtmlParser\Dom);
$cookpad->set('locate', 'id');

//echo $cookpad->get('pengguna/4855359');
//echo $cookpad->get('recook/1527234');
echo $cookpad->search('kukus surabaya');
//echo $cookpad->detail('resep/2270680');
//echo $cookpad->profile('pengguna/4855359');
//echo $cookpad->get('resep/1408010');
//echo $cookpad->detail('resep/1453533');

