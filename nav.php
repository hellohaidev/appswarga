<?php
switch ($_GET['page']){

	/**
	 * data warga crud
	 */
	case 'add':
		if ($_GET['page']){
			include 'inc/warga/datawarga/add.php';
			$content = $add;
		}
        break;
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
			$content = $home;
		}
		break;
    
	
	default:
		include 'inc/home.php';
		$content = $home;
		break;
}
?>
