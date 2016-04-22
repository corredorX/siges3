<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM cursos WHERE curso_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
$curso = $_POST['curso'];
 $horas = $_POST['horas'];
 
 // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE cursos SET curso='$curso',horas='$horas' WHERE curso_id=".$_GET['edit_id'];
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
    <td><input type="text" name="curso" placeholder="curso" value="<?php echo $fetched_row['curso']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="texte" name="horas" placeholder="Horas Mínimas" value="<?php echo $fetched_row['horas']; ?>" required /></td>
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