<?php
switch ($_GET['page']){

	case 'add':
		if ($_GET['page']){
			include './inc/add.php';
			$content = $add;
		}
        break;
    case 'delete':
		if ($_GET['page']){
			include './inc/delete.php';
			$content = $delete;
		}
		break;
    case 'edit':
		if ($_GET['page']){
			include './inc/edit.php';
			$content = $edit;
		}
		break;

	case 'home':
		if ($_GET['page']){
			include './inc/home.php';
			$content = $home;
		}
		break;
    
	
	default:
		include './inc/home.php';
		$content = $home;
		break;
}
?>
