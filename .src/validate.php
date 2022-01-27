<?php
session_start();
require_once __DIR__ . '/validation/Validate.php';
$file = file( __DIR__ . '/../function.php');

$v    = new Validate();
if ($_SESSION['step'] === 1) {
    $return = $v->testForeachStep1($file);
} elseif ($_SESSION['step'] >= 2) {
    $return = $v->testForeachStep2($file);
}

if ($return) {
    if ($_SESSION['step'] === 10) {
        header('Location: ../../?finish=true');
    } else {
        header('Location: ../../?return=success');
    }
    ++$_SESSION['step'];
    exit();
}

header('Location: ../../?return=notSuccess');
exit();
