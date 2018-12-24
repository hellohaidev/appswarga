<?php
switch ($_GET['page']){

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
    
	
	default:
		include 'inc/home.php';
		$content = $home;
		break;
}
?>
