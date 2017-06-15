<?php
include ("conexao.php");
include 'functions.php';
$idUtilizador = $_SESSION['idUtilizador'];

		if(isset($_POST['re_password'])){
            
		$old_pass=md5($_POST['old_pass']);
		$new_pass=md5($_POST['new_pass']);
		$re_pass=md5($_POST['re_pass']);
            
		$query = "SELECT password FROM login WHERE idUtilizador ='$idUtilizador'";
        $chg_pwd=mysqli_query($conn, $query);
		
        $chg_pwd1=mysqli_fetch_array($chg_pwd);
		
        $data_pwd=$chg_pwd1['password'];
		if($data_pwd==$old_pass){
		if($new_pass==$re_pass){
		
            $query1 = "UPDATE login set password='$new_pass' where idUtilizador='$idUtilizador'";
            $update_pwd=mysqli_query($conn, $query1);
			echo "<script>alert('Palavra-Passe alterada com sucesso!'); window.location='meu_perfil_ps.php'</script>";
		}else{
			echo "<script>alert('As Palavras-Passe não coicidem!'); window.location='alterar_pass.php'</script>";
		}
		}
		else
		{
		echo "<script>alert('Palavra-Passe atual incorreta!'); window.location='alterar_pass.php'</script>";
		}
        }
	?>