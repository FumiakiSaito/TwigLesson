<?php
require_once './vendor/autoload.php';

$loader = new Twig_Loader_Filesystem("template");
$twig = new Twig_Environment($loader);

$template = $twig->loadTemplate("sample2.html.twig");

$data = array(
	'title' => 'twigテスト',
	'body' => 'これはtwigテストです',
);
$template->display($data);
