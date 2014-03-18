<?php
switch($_GET['page']) {
	default:
		include('include/home.php');
		break;
	case 'home':
		include('include/home.php');
		break;
	case 'aktualnosci':
		include('include/aktualnosci.php');
		break;
	case 'wnioski':
		include('include/wnioski.php');
		break;
}
?>