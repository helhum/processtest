<?php

require __DIR__ . '/vendor/autoload.php';

mkdir('test1');
chdir('test1');
mkdir('test2');

$p = new \Symfony\Component\Process\Process('pwd');
$p->run();
echo 'Output: ' . $p->getOutput() . chr(10);
echo 'Error Output: ' . $p->getErrorOutput() . chr(10);
echo chr(10);

$p = new \Symfony\Component\Process\Process('pwd', 'test2/');
$p->run();
echo 'Output: ' . $p->getOutput() . chr(10);
echo 'Error Output: ' . $p->getErrorOutput() . chr(10);
echo chr(10);

