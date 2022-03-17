<?php

require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/CreditCard.php';
require_once __DIR__ . '/classes/Giochi.php';
require_once __DIR__ . '/classes/Cibo.php';
require_once __DIR__ . '/classes/Cuccie.php';


$cuccie_cani_legno = new Cuccie('cuccia per cani',20,'legno');
$Cuccie_cani_plastica = new Cuccie('cuccia per cani',10,'plastica');

$pallina = new Giochi ('pallina',2, "gatti");
$osso = new Giochi ('osso',5,'cani');

$cibo_cani = new Cibo ('cibo per cani',25,'cani');
$cibo_gatti = new Cibo ('cibo per gatti',15,'gatti');



$my_user = new User ('gabriele', 'morelli', 'info.morelli@live.it');