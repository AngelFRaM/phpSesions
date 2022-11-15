<?php
	include_once 'user_session.php';
	$userSession = new UserSession();
	$userSession->closeSession();
	Header("Location: ../index.php");
?>