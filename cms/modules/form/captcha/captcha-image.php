<?php
define('__PRAGYAN_CMS', true);
ini_set('display_errors', 0);

$sourceFolder = dirname(dirname(dirname(__DIR__)));
$uploadFolder = 'uploads';
$moduleFolder = 'modules';
$cmsFolder = 'cms';

ini_set('session.name', 'PHPSESSID');
ini_set('session.use_cookies', 1);
ini_set('session.use_only_cookies', 1);
$sessionSavePath = $sourceFolder . '/' . $uploadFolder . '/sessions';
ini_set('session.save_path', $sessionSavePath);
session_start();

$scriptUrl = $_SERVER['SCRIPT_NAME'];
$cmsUrlPath = dirname(dirname(dirname($scriptUrl)));
$urlRequestRoot = dirname($cmsUrlPath);
if ($urlRequestRoot == '/') $urlRequestRoot = '';

require_once(__DIR__ . '/class/captcha.class.php');
$captcha = new captcha($sourceFolder, $moduleFolder, $uploadFolder, $urlRequestRoot, $cmsFolder, 6);
$_SESSION['CAPTCHAString'] = $captcha->getCaptchaString();

$imageFile = basename($captcha->getCaptchaUrl());
$imagePath = $sourceFolder . '/' . $uploadFolder . '/temp/' . $imageFile;
header('Content-Type: image/png');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Pragma: no-cache');
readfile($imagePath);
