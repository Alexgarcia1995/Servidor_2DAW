<?php
	require_once("view/inc/header.html");
	require_once("view/inc/menu.php");


	include 'utils/utils.inc.php';

	session_start();

	if (!isset($_GET['module'])) {
		require_once("modules/Home/controller/home.php");
	} else	if ( (isset($_GET['module'])) && (!isset($_GET['view'])) ){
		require_once("modules/".$_GET['module']."/controller/".$_GET['module'].".php");
	}

	if ( (isset($_GET['module'])) && (isset($_GET['view'])) ) {
		require_once("modules/".$_GET['module']."/view/".$_GET['view'].".php");
	}

	require_once("view/inc/footer.html");
