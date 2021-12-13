<?php 

try {
	$db=new PDO("mysql:host=localhost;dbname=tpanel;charset=utf8",'root','Asdfghjkl84126');
}

catch (PDOExpception $e) {
	echo $e->getMessage();
}

ob_start();
session_start();

if (isset($_POST['adminlogin'])) {

	$nnick=$_POST['adminmail'];
	$npass=md5($_POST['adminpassword']);

	$checkadmin=$db->prepare("SELECT * FROM admin where admin_mail=:mail and admin_password=:password and admin_permission=:permission");
	$checkadmin->execute(array(
		'mail' => $nnick,
		'password' => $npass,
		'permission' => 2
		));

	echo $say=$checkadmin->rowCount();

	if ($say==1) {
		$_SESSION['adminmail']=$nnick;
		$_SESSION['permission']=2;
		header("Location:/src/admin.php?durum=basarili");
		exit;

	} else {
		header("Location:/src/login.php?durum=no");
		exit;

	}
}	

if (isset($_POST['userlogin'])) {

	$usernick=$_POST['usermail'];
	$userpass=md5($_POST['userpassword']);

	$checkuser=$db->prepare("SELECT * FROM admin where admin_mail=:mail and admin_password=:password and admin_permission=:permission");
	$checkuser->execute(array(
		'mail' => $usernick,
		'password' => $userpass,
		'permission' => 1
		));

	echo $sayuser=$checkuser->rowCount();

	if ($sayuser==1) {
		$_SESSION['usermail']=$usernick;
		$_SESSION['permission']=1;
		header("Location:/index.php?durum=basariliuser");
		exit;

	} else {
		header("Location:/src/login.php?durum=nouser");
		exit;

	}
}

if (isset($_POST['adminnotif'])) {

	$settingsupdate=$db->prepare("INSERT INTO admin_notif SET
	notification=:notification");

	$update=$settingsupdate->execute(array(
		'notification' => $_POST['notification'],
	));

	if ($update) {
		header("Location:/src/admin.php?durum=ok");
	} else {
		header("Location:/src/admin.php?durum=no");
	}
}

if (isset($_POST['adminregister'])) {

	
	echo $admin_mail=htmlspecialchars($_POST['adminmail']); echo "<br>";

	echo $admin_passwordone=trim($_POST['adminpassword']); echo "<br>";
	echo $admin_passwordtwo=trim($_POST['adminpassword2']); echo "<br>";



	if ($admin_passwordone==$admin_passwordtwo) {


		if (strlen($admin_passwordone)>=6) {


			$adminsor=$db->prepare("select * from admin where admin_mail=:mail");
			$adminsor->execute(array(
				'mail' => $adminmail
				));

			$say=$adminsor->rowCount();



			if ($say==0) {

				$password=md5($admin_passwordone);

				$permission=1;

				$adminkaydet=$db->prepare("INSERT INTO admin SET
					admin_mail=:admin_mail,
					admin_password=:admin_password,
					admin_permission=:admin_permission
					");
				$insert=$adminkaydet->execute(array(
					'admin_mail' => $admin_mail,
					'admin_password' => $password,
					'admin_permission' => $permission
					));

				if ($insert) {


					header("Location:/src/login.php?durum=loginbasarili");


				//Header("Location:../production/genel-ayarlar.php?durum=ok");

				} else {


					header("Location:/src/login.php?durum=basarisiz");
				}

			} else {

				header("Location:/src/login.php?durum=mukerrerkayit");



			}




		// Bitiş



		} else {


			header("Location:/src/login.php?durum=eksiksifre");


		}



	} else {



		header("Location:/src/login.php?durum=farklisifre");
	}
	


}

function kontrol () {
    if (empty($_SESSION['adminmail'])) {

        header("Location:/src/login.php?durum=izinsiz");
        exit;
    }
}


function kontroluser () {
    if (empty($_SESSION['permission'])) {

        header("Location:/src/login.php?durum=izinsiz");
        exit;
    }
}



?>