<?php
if(!defined('__PRAGYAN_CMS'))
{ 
	header($_SERVER['SERVER_PROTOCOL'].' 403 Forbidden');
	echo "<h1>403 Forbidden<h1><h4>You are not authorized to access the page.</h4>";
	echo '<hr/>'.$_SERVER['SERVER_SIGNATURE'];
	exit(1);
}

function _ensureSession() {
	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}
}

function generateCsrfToken() {
	_ensureSession();
	if (!isset($_SESSION['csrf_token'])) {
		$_SESSION['csrf_token'] = bin2hex(random_bytes(32));
	}
	return $_SESSION['csrf_token'];
}

function validateCsrfToken($token) {
	_ensureSession();
	if (!isset($_SESSION['csrf_token']) || $token !== $_SESSION['csrf_token']) {
		return false;
	}
	unset($_SESSION['csrf_token']);
	return true;
}

function getCsrfTokenField() {
	return '<input type="hidden" name="csrf_token" value="'.generateCsrfToken().'" />';
}

function verifyCsrfToken() {
	if (!isset($_POST['csrf_token'])) {
		displayerror("Session expired. Please try again.");
		return false;
	}
	if (!validateCsrfToken($_POST['csrf_token'])) {
		displayerror("Session expired. Please try again.");
		return false;
	}
	return true;
}
