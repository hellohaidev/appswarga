<?php
switch ($_GET['page']){

	/**
	 * Main Page
	 * 
	 */

	case 'home':
	if ($_GET['page']){
		include 'inc/home.php';
		$content = $home;
	}
	break;


	/**
	 * data warga crud
	 */
    case 'delete':
		if ($_GET['page']){
			include 'inc/warga/datawarga/delete.php';
			$content = $delete;
		}
		break;
    case 'edit':
		if ($_GET['page']){
			include 'inc/warga/datawarga/edit.php';
			$content = $edit;
		}
		break;

	case 'homewarga':
		if ($_GET['page']){
			include 'inc/warga/datawarga/home.php';
			$content = $homewarga;
		}
		break;
	
	/**
	 * data rt crud
	 */	
	case 'homert':
		if ($_GET['page']){
			include 'inc/warga/datart/home.php';
			$content = $homert;
		}
		break;
	case 'deletert':
		if ($_GET['page']){
			include 'inc/warga/datart/delete.php';
			$content = $deletert;
		}
		break;
    case 'editrt':
		if ($_GET['page']){
			include 'inc/warga/datart/edit.php';
			$content = $editrt;
		}
		break;


	/**
	 * data kk crud
	 */	
	case 'homekk':
		if ($_GET['page']){
			include 'inc/warga/datakk/home.php';
			$content = $homekk;
		}
		break;
	case 'deletekk':
		if ($_GET['page']){
			include 'inc/warga/datakk/delete.php';
			$content = $deletekk;
		}
		break;
    case 'editkk':
		if ($_GET['page']){
			include 'inc/warga/datakk/edit.php';
			$content = $editkk;
		}
		break;

	case 'viewkk':
		if ($_GET['page']){
			include 'inc/warga/datakk/view.php';
			$content = $viewkk;
		}
		break;

	/**
	 * data kk tetap crud
	 */	
	case 'homekktetap':
	if ($_GET['page']){
		include 'inc/warga/datakktetap/home.php';
		$content = $homekktetap;
	}
	break;
	case 'deletekktetap':
		if ($_GET['page']){
			include 'inc/warga/datakktetap/delete.php';
			$content = $deletekktetap;
		}
		break;
	case 'editkktetap':
		if ($_GET['page']){
			include 'inc/warga/datakktetap/edit.php';
			$content = $editkktetap;
		}
		break;

	case 'viewkktetap':
		if ($_GET['page']){
			include 'inc/warga/datakktetap/view.php';
			$content = $viewkktetap;
		}
		break;

	/**
	 * data kk tinggal di luar crud
	 */	
	case 'homekkluar':
	if ($_GET['page']){
		include 'inc/warga/datakkluar/home.php';
		$content = $homekkluar;
	}
	break;
	case 'deletekkluar':
		if ($_GET['page']){
			include 'inc/warga/datakkluar/delete.php';
			$content = $deletekkluar;
		}
		break;
	case 'editkkluar':
		if ($_GET['page']){
			include 'inc/warga/datakkluar/edit.php';
			$content = $editkkluar;
		}
		break;

	case 'viewkkluar':
		if ($_GET['page']){
			include 'inc/warga/datakkluar/view.php';
			$content = $viewkkluar;
		}
		break;

	/**
	 * data kk kontrak crud
	 */	
	case 'homekkkontrak':
	if ($_GET['page']){
		include 'inc/warga/datakkkontrak/home.php';
		$content = $homekkkontrak;
	}
	break;
	case 'deletekkkontrak':
		if ($_GET['page']){
			include 'inc/warga/datakkkontrak/delete.php';
			$content = $deletekkkontrak;
		}
		break;
	case 'editkkkontrak':
		if ($_GET['page']){
			include 'inc/warga/datakkkontrak/edit.php';
			$content = $editkkkontrak;
		}
		break;

	case 'viewkkkontrak':
		if ($_GET['page']){
			include 'inc/warga/datakkkontrak/view.php';
			$content = $viewkkkontrak;
		}
		break;

	/**
	 * data warga pindah crud
	 */	
	case 'homepindah':
	if ($_GET['page']){
		include 'inc/warga/datapindah/home.php';
		$content = $homepindah;
	}
	break;
	case 'deletepindah':
		if ($_GET['page']){
			include 'inc/warga/datapindah/delete.php';
			$content = $deletepindah;
		}
		break;
	case 'editpindah':
		if ($_GET['page']){
			include 'inc/warga/datapindah/edit.php';
			$content = $editpindah;
		}
		break;

	case 'viewpindah':
		if ($_GET['page']){
			include 'inc/warga/datapindah/view.php';
			$content = $viewpindah;
		}
		break;
	
	default:
		include 'inc/home.php';
		$content = $home;
		break;
}
?>
