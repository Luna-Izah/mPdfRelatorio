<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> Cadastro de Funcionário </title>
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
 </head>
 
 <?php
require_once __DIR__ . '/vendor/autoload.php'; 
$numfunc = $_POST["numfunc"]; 
$pass = $_POST["numpass"]; 
ob_start();
?>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;
    }               
    table tr:nth-child(odd) {
      background-color: #eee;
    }  
    table tr:nth-child(even) {
      background-color: #fff;
    }   
    table thead th {
      background-color: #ccc;
    } 
    table tfoot td {
      background-color: #ccc;
    } 
</style> 
<h1>Meu Relatório</h1>
<table align="center">
    <thead>
        <tr>
            <th>N°Cadastro</th>
			<th>Nome</th>
            <th>Departamento</th>
            <th>E-mail</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <td colspan="4" align="center">Copyright ® 2017</td>
        </tr>
    </tfoot>>    
    <tbody>
        <tr>
            <td><?= $numfunc?></td>
			<td>Taylor Amane</td>
            <td align="center">Contabilidade</td>
            <td >taylor@amail.com</td>
        </tr>
        <tr>
            <td><?= $numfunc?></td>
			<td>Rodrigo Portela</td>
            <td align="center">T.I.</td>
            <td>portela@bmail.com</td>
        </tr> 
		<tr>
            <td><?= $numfunc?></td>
			<td>Renata Kubiank</td>
            <td align="center">Administração</td>
            <td >reKubi@cmail.com</td>
        </tr>
        <tr>
            <td><?= $numfunc?></td>
			<td>Jeniffer Kristen</td>
            <td align="center">T.I.</td>
            <td>jenk@dmail.com</td>
        </tr> 
    </tbody>
</table>
<?php
$html = ob_get_contents();
$mpdf = new Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();