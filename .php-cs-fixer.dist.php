<?php

$finder = PhpCsFixer\Finder::create()
    ->in('src')
;

$config = new PhpCsFixer\Config();

return $config->setRules([
    '@Symfony' => true,
    '@DoctrineAnnotation' => true,
    '@PHP81Migration' => true,
])
    ->setFinder($finder)
;
