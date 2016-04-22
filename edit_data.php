<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
$first_name = $_POST['first_name'];
 $senha = $_POST['senha'];
 $curso = $_POST['curso'];
 $campus = $_POST['campus'];
 $RA = $_POST['RA'];
 $orientador = $_POST['orientador'];
 $empresa = $_POST['empresa'];
 $CNPJ = $_POST['CNPJ'];
 $cidade = $_POST['cidade'];
 $ramo = $_POST['ramo'];
 $data_nasc = $_POST['data_nasc'];
 $CPF = $_POST['CPF'];
 // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE users SET first_name='$first_name',senha='$senha',cidade='$cidade',ramo='$ramo',curso = '$curso',campus = '$campus',RA = '$RA',orientador = '$orientador',empresa = '$empresa',CNPJ='$CNPJ',data_nasc = '$data_nasc', CPF = '$CPF' WHERE user_id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Dados Atualizados com sucesso');
  window.location.href='bemvindo.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('Ocorreu um erro');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
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
    <td><input type="text" name="first_name" placeholder="Nome completo" value="<?php echo $fetched_row['first_name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="password" name="senha" placeholder="Senha" value="<?php echo $fetched_row['senha']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="CPF" placeholder="CPF" value="<?php echo $fetched_row['CPF']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="data_nasc" placeholder="data_nasc" value="<?php echo $fetched_row['data_nasc']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="curso" placeholder="Curso" value="<?php echo $fetched_row['Curso']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="cidade" placeholder="Cidade" value="<?php echo $fetched_row['cidade']; ?>" required /></td>
    </tr>
	<tr>
    <td> <select name="curso"> 
	
			<?php $sql_query="SELECT curso FROM cursos";
			$result_set=mysql_query($sql_query);
				$i=0;
				while($row=mysql_fetch_row($result_set))
			{
				echo "<option value='$row[0]'> $row[0] </option>";
				$i++;
			}
	 ?> <select>
	 </td>
    </tr>
	<tr>
    <td> <select name="campus"> 
	
			<?php $sql_query="SELECT campus FROM campi";
			$result_set=mysql_query($sql_query);
				$i=0;
				while($row=mysql_fetch_row($result_set))
			{
				echo "<option value='$row[0]'> $row[0] </option>";
				$i++;
			}
	 ?> <select>
	 </td>
    </tr>
	<tr>
    <td><input type="text" name="RA" placeholder="RA" value="<?php echo $fetched_row['RA']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="orientador" placeholder="Orientador" value="<?php echo $fetched_row['orientador']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="empresa" placeholder="Empresa" value="<?php echo $fetched_row['Empresa']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="CNPJ" placeholder="CNPJ" value="<?php echo $fetched_row['CNPJ']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="ramo" placeholder="Ramo" value="<?php echo $fetched_row['ramo']; ?>" required /></td>
    </tr>
	
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>Atualizar</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancelar</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>