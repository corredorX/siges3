<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
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
 // CPF

	
	
 // sql query for inserting data into database
 $sql_query = "INSERT INTO users(first_name,senha,campus,cidade,CNPJ,CPF,Curso,data_nasc,Empresa,orientador,RA,ramo) 
 VALUES('$first_name','$senha','$campus','$cidade','$CNPJ','$CPF','$curso','$data_nasc','$empresa','$orientador','$RA','$ramo')";
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
    <td><input type="text" name="first_name" placeholder="Nome completo"    required /></td>
    </tr>
    <tr>
    <td>Mínimo de 6 caracteres <input type="password" name="senha" pattern=".{6,}" placeholder="senha" required /></td>
    </tr>
	<tr>
    <td > Formato dd/mm/aaaa<input type="text" name="data_nasc" placeholder="Data de Nascimento" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="2012-01-01" max="2014-02-18" maxlength="10" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="CPF" placeholder="CPF" pattern="[0-9]{11}" required /></td>
    </tr>
	
	<tr>
    <td><input type="text" name="cidade" placeholder="Cidade da Unid. de Ensino" required /></td>
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
    <td><input type="text" name="RA" placeholder="RA" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="orientador" placeholder="Orientador" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="empresa" placeholder="Empresa" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="CNPJ" placeholder="CNPJ" required /></td>
    </tr>
	
	<tr>
    <td><input type="text" name="ramo" placeholder="ramo" required /></td>
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