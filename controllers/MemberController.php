<?php 

class MemberController { 
 
	public function __construct(){ 
 
	} 

	public function run(){ 

		if(isset($_POST['LOGIN'])&&!empty($_POST['user'])&&!empty($_POST['passwd'])){ 
			$user=htmlentities($_POST['user']); 
			$passwd=htmlentities($_POST['passwd']); 
				if($user==='root' && $passwd=='root'){ 
					require_once(VIEWS_PATH.'member.php'); 
				}else{ 
					require_once(VIEWS_PATH.'home.php'); 
				} 
		}else{ 
			require_once(VIEWS_PATH.'home.php'); 
		} 
	} 
} 
?>  
