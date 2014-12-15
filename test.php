<?php
define('LF', chr(10));
require __DIR__ . '/vendor/autoload.php';

mkdir('test1');
chdir('test1');
mkdir('test2');

echo 'No cwd:' . LF;
$process1 = new \Symfony\Component\Process\Process('pwd');
$process1->run();
echo 'Output: ' . $p->getOutput() . LF;
echo 'Error Output: ' . $p->getErrorOutput() . LF;
echo LF;

echo 'Relative path:' . LF;
$process2 = new \Symfony\Component\Process\Process('pwd', 'test2/');
$process2->run();
echo 'Output: ' . $p->getOutput() . LF;
echo 'Error Output: ' . $p->getErrorOutput() . LF;
echo LF;

echo 'Absolute path:' . LF;
$process3 = new \Symfony\Component\Process\Process('pwd', realpath('test2/'));
$process3->run();
echo 'Output: ' . $p->getOutput() . LF;
echo 'Error Output: ' . $p->getErrorOutput() . LF;
echo LF;

