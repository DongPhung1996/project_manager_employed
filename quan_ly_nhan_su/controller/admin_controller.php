<?php 
require_once './model/admin_model.php';
class AdminController {
	function handleRequest() {
		$controller = isset($_GET['controller'])?$_GET['controller']:'users';
		$action     = isset($_GET['action'])?$_GET['action']:'list';
		if($controller == 'users') {
			switch ($action) {
				case 'list':
					$userModel = new AdminModel();
					$data 	   = $userModel->listUser();
					include 'views/admin/users/list.php';
					break;
				case 'add':
				
					include 'views/admin/users/add.php';
					break;	
				case 'insurrance':
					$userModel = new AdminModel();
					$data 	   = $userModel->listInsurrance();
					include 'views/admin/users/insurrance.php';
					break;
				case 'contract':
					$userModel = new AdminModel();
					$data 	   = $userModel->listContract();
					include 'views/admin/users/contract.php';
					break;	
				case 'certification':
					
					include 'views/admin/users/certification.php';
					break;	
				case 'skills':
					$userModel = new AdminModel();
					$data 	   = $userModel->listSkill();
					include 'views/admin/users/skills.php';
					break;	
				case 'experience':
					$userModel = new AdminModel();
					$data 	   = $userModel->listExperience();
					include 'views/admin/users/experience.php';
					break;	
				case 'fort':
					
					include 'views/admin/users/fort.php';
					break;				
				default:
					# code...
					break;
			}
		}elseif($controller == '') {
			switch ($action) {
				case 'list':
					
					include 'views/admin/users/list.php';
					break;
				case 'add':
					if(isset($_POST['add_user'])) {
						$username  = $_POST['username'];
						$password  = $_POST['password'];
						$role      = $_POST['role'];
						$userModel = new UserModel();
						$result    = $userModel->addUser($username, $password, $role);
						if($result) {
							$this->redirectPage('admin.php?controller=users&action=list');
						}						
					}
					include 'views/admin/users/add.php';
					break;
				default:
					# code...
					break;
			}
		}
	}
	// ham nay de redirect trang
	function redirectPage($link) {
		header("Location: $link");
	}
}
?>