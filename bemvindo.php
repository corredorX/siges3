<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{ 
unset($_SESSION['login']); 
unset($_SESSION['senha']); 
header('location:index.php'); 
} 
$logado = $_SESSION['login'];
$nome = $_SESSION['nome'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SIGES-Sistema Integrado Gestão de Estágio</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript">

</script>
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>SIGES-Sistema Integrado de Estágio </label>
    </div>
</div>

<div id="body">
 <div id="content">
    <table align="center">
    <tr>
    <th colspan="5"><a href="#">Olá <?php echo $nome ?> </a></th>
	
	<th colspan="5"><a href="index.php">Login </a></th>
    
  <?php if ($nome == 'administrador'){
	  
	  echo "<th><a href='lista_aluno.php'>Lista de Alunos Cadastrados</a></th>";
	include_once 'lista_curso.php';
	include_once 'lista_campus.php';
  }
	

  ?>
    </tr>
    </table>
    </div>
</div>

</center>
</body>
</html>