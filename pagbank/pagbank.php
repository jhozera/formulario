<?php

include_once('../login/mys.php');

if(isset($_POST['email'])) {

    if(!isset($_SESSION)) {
        session_start();
    }      

    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM crograma";
      
    }   
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script defer src="div.js" defer></script>
</head>
<body>
<div id="esconder">
<table> 
<caption>Agosto</caption>
      <thead>
        <tr>
            <th style="font-size: 15px; border: 3px solid rgb(200, 202, 200);">Data</th>
            <th style="font-size: 15px;border: 3px solid rgb(200, 202, 200);">SMS</th>
            <th style="font-size: 15px;border: 3px solid rgb(200, 202, 200);" >RCS</th>
            <th style="font-size: 15px;border: 3px solid rgb(200, 202, 200);">EMAIL</th>
            <th style="font-size: 15px;border: 3px solid rgb(200, 202, 200);">WHATS</th>
        </tr>
    </thead>
    <tbody>
    <td class="semana" colspan="5">SEMANA 1</td>
        <tr>
        <td>02/09</td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>
        </tr>
       <tr>
        <td>03/09</td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>
       </tr> 
       <tr>
        <td>04/09</td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>
       </tr> 
       <tr>
        <td>05/09</td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>
       </tr> 
       <tr>
        <td>06/09</td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>
       </tr> 
       <tr>
        <td>07/09</td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>
       </tr> 
       <td class="semana" colspan="5">SEMANA 2 </td>
       <tr>
        <td>09/09</td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>
        </tr>
       <tr>
        <td>10/09</td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>
       </tr> 
       <tr>
        <td>11/09</td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>
       </tr> 
       <tr>
        <td>12/09</td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>
       </tr> 
       <tr>
        <td>13/09</td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>
       </tr> 
       <tr>
        <td>14/09</td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>
       </tr> 
       <td class="semana" colspan="5">SEMANA 3 </td>
       <tr>
        <td>16/09</td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>
       </tr> 
       <tr>
        <td>17/09</td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>
       </tr> 
       <tr>
        <td>18/09</td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>
       </tr> 
       <tr>
        <td>19/09</td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>
       </tr> 
       <tr>
        <td>20/09</td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>
       </tr> 
       <tr>
        <td>21/09</td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>
       </tr> 
       <td class="semana" colspan="5">SEMANA 4 </td>
       <tr>
        <td>23/09</td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>
       </tr> 
       <tr>
        <td>24/09</td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>
       </tr> 
       <tr>
        <td>25/09</td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>
       </tr> 
       <tr>
        <td>26/09</td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>
       </tr> 
       <tr>
        <td>27/09</td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>
       </tr> 
       <tr>
        <td>28/09</td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>
       </tr> 
       <td class="semana" colspan="5">SEMANA 5 </td>
       <tr>
        <td>30/09</td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>
       </tr> 
    </tbody>
</table>
</div> 
<div id='orca'>
    <table>
        <thead>
        <tbody>
            <tr>
        <td>ORÇAMENTO TOTAL</td><td>SMS</td><td>RCS</td><td>EMAIL</td><td>WHATS</td>
        </tr>
        </thead>
        </tbody>
        <tbody>
            <tr>
            <td>R$3.000</td><td></td><td></td><td></td><td></td>
            </tr>
        </tbody>
    </table>
</div>
<nav>
    <ul id="barra">
        <h1><a href="../web/pagina.php">PAGBANK</a></h1>
    </ul>
    <ul id="lateral"></ul>
</nav>
<form>
    <button  id="controle" >controle</button>
    <button type="button" onclick="toggleDiv()"   id="cronograma" >cronograma</button>
    <button type="button" onclick="toggleorca()"  id="orcamento" >orçamento</button>
</form>
<div id="importar">
<form method="POST" action="../dados/dados.php"  enctype="multipart/form-data">
    <input id="arquivo1"  onclick="toggleDiv()" type="file"   name="arquivo">
    <input id="enviar"   onclick="toggleDiv()" type="submit" value="Enviar">
</form>
</div>
</body>
</html>


