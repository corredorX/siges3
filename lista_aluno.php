<?php
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SIGES-Sistema Integrado Gestão de Estágio</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Tem certeza que deseja editar ?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Deseja deletar'))
 {
  window.location.href='lista_aluno.php?delete_id='+id;
 }
}
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
    <th colspan="5"><a href="add_data.php">Adicionar Aluno</a></th>
	<th colspan="5"><a href="index.php">Login</a></th>
    </tr>
    <th>Nome Completo</th>
    <th>Senha</th>
    <th>Cidade</th>
    <th colspan="1">RA</th>
	<th colspan="1">Curso</th>
	<th colspan="1">Data de nascimento</th>
	<th colspan="1">Orientador</th>
	<th colspan="1">CPF</th>
	<th colspan="1">Empresa</th>
	<th colspan="1">CNPJ</th>
	<th colspan="1">Ramo</th>
	<th colspan="1">Unidade Campus</th>
	<th colspan="2">Operações</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM users";
 $result_set=mysql_query($sql_query);
 while($row=mysql_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
		<td><?php echo $row[7]; ?></td>
		<td><?php echo $row[8]; ?></td>
		 <td><?php echo $row[9]; ?></td>
		 <td><?php echo $row[10]; ?></td>
		 <td><?php echo $row[11]; ?></td>
		 <td><?php echo $row[12]; ?></td>
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="img/b_edit.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="img/b_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>

</center>
</body>
</html>