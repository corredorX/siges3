<?php
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM cursos WHERE curso_id=".$_GET['delete_id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SIGES-Sistema Integrado Gestão de Estágio</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript">
function editdarCurso_id(id)
{
 if(confirm('Tem certeza que deseja editar ?'))
 {
  window.location.href='edit_curso.php?edit_id='+id;
 }
}
function deleteCurso_id(id)
{
 if(confirm('Deseja deletar'))
 {
  window.location.href='bemvindo.php?delete_id='+id;
 }
}
</script>
</head>

<center>



<div id="body">
 <div id="content">
    <table align="center">
    <tr>
    <th colspan="5"><a href="add_curso.php">Adicionar Curso</a></th>
	<th colspan="5"><a href="index.php">Login</a></th>
    </tr>
    <th>Curso</th>
    <th colspan="1">Mínimo de horas de estágio </th>
	<th colspan="2">Opções </th>
    </tr>
    <?php
 $sql_query="SELECT * FROM cursos";
 $result_set=mysql_query($sql_query);
 while($row=mysql_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
  <td align="center"><a href="javascript:editdarCurso_id('<?php echo $row[0]; ?>')"><img src="img/b_edit.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:deleteCurso_id('<?php echo $row[0]; ?>')"><img src="img/b_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>

</center>
