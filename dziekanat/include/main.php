<?php
switch($_GET['page']) {
	default:
		include('include/home.php');
		break;
	case 'home':
	 	include('include/home.php');
	 	break;
	case 'wniosek':
		include('include/wniosek.php');
		break;
	case 'o-nas':
		include('include/about.php');
		break;
	case 'pomoc':
		include('include/help.php');
		break;
	case 'prywatnosc':
		include('include/prywatnosc.php');
		break;
	case 'regulamin':
		include('include/regulamin.php');
		break;
	case 'misja':
		include('include/misja.php');
		break;
	case 'sprawdz':
		include('include/sprawdz.php');
		break;
}
?>