<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
$campus = $_POST['campus'];
 $cidade = $_POST['cidade'];
 $endereco = $_POST['endereco'];
 $telefone = $_POST['telefone'];
 
 
 // CPF

	
	
 // sql query for inserting data into database
 $sql_query = "INSERT INTO campi (campus,cidade,endereco,telefone) 
 VALUES('$campus','$cidade','$endereco','$telefone')";
 // sql query for inserting data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Dados inseridos com sucesso ');
  window.location.href='bemvindo.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('Erro ocorreu');
  </script>
  <?php
 }
 // sql query execution function
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SIGES-Sistema Integrado Gestão de Estágio</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>SIGES-Sistema Integrado Gestão de Estágio</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">Página inicial</a></td>
    </tr>
    <tr>
    <td><input type="text" name="campus" placeholder="Campus" required /></td>
    </tr>
     <tr>
    <td><input type="text" name="cidade" placeholder="Cidade" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="endereco" placeholder="endereco" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="telefone" placeholder="telefone" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>Salvar</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
<div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
</body>

</html>