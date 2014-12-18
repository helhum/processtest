<?php
define('LF', chr(10));
require __DIR__ . '/vendor/autoload.php';

mkdir('test1');
chdir('test1');
mkdir('test2');


echo 'getcwd(): ' . getcwd() . LF;
echo LF;
echo 'Passed cwd: null' . LF;
$process1 = new \Symfony\Component\Process\Process('pwd');
$process1->run();
echo 'Output: ' . $process1->getOutput() . LF;
//echo 'Error Output: ' . $process1->getErrorOutput() . LF;
echo LF;

echo 'Passed cwd: "test2/"' . LF;
$process2 = new \Symfony\Component\Process\Process('pwd', 'test2/');
$process2->run();
echo 'Output: ' . $process2->getOutput() . LF;
//echo 'Error Output: ' . $process2->getErrorOutput() . LF;
echo LF;

echo sprintf('Passed cwd: "%s"' . LF, realpath('test2/'));
$process3 = new \Symfony\Component\Process\Process('pwd', realpath('test2/'));
$process3->run();
echo 'Output: ' . $process2->getOutput() . LF;
//echo 'Error Output: ' . $process2->getErrorOutput() . LF;
echo LF;

