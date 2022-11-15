<?php
	include_once 'includes/user.php';
	include_once 'includes/user_session.php';

	$userSession = new UserSession();
	$user = new User();

	if (isset($_SESSION['user'])) {
		$user->setUser($userSession->getCurrentUser());
		include_once 'vistas/home.php';
	} else if (isset($_POST['username']) && $_POST['password']){
		$userForm = $_POST['username'];
		$passForm = $_POST['password'];
		$user = new User();
		if ($user->userExists($userForm, $passForm)) {
			//Valida si el usuario existe
			$userSession->setCurrentUser($userForm);
			$user->setUser($userForm);
			include_once 'vistas/home.php';
		} else {
			$errorLogin = 'Nombre y/o password incorrectos';
			include_once 'vistas/login.php';
		}
	} else {
		include_once 'vistas/login.php';
	}
?>
