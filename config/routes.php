<?php
 

$f3->route('GET|POST /','\Home->index');

$f3->route('GET|POST /@controller','\@controller->index');
$f3->route('GET|POST /@controller/@action/@id','\@controller->@action');
$f3->route('GET|POST /@controller/@action','\@controller->@action');