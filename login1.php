<?php

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
    <form method="post" action="login.php" name="loginform">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">Página inicial</a></td>
    </tr>
    <tr>
    <td><input type="text" name="login" placeholder="CPF" required /></td>
    </tr>
    <tr>
    <td><input type="password" name="senha" placeholder="senha" required /></td>
    </tr>
	<tr>
    <td><a href="add_data.php"> Registrar aluno</a></td>
    </tr>
    <tr>
   
    </tr>
    <tr>
    <td><input type="submit" value=" Logar " </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>