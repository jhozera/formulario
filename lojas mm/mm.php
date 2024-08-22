<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
        #esconder {
            display: block;
            position: absolute;
            background-color: red;
            left: 500px;
            border: green;
        }
    </style>
<div id="esconder">

</div>


    <nav
    <ul id="barra">
    <h1><a href="../web/pagina.php">LOJAS MM</a></h1>
    </ul>
    <ul id="lateral"></ul>
</nav>
<form>
    <button id="controle"  >controle</button>
    <button class="cronograma" name="cronograma" >cronograma</button>
    <button class="orcamento" name="orcamento" >orçamento</button>
</form>
</body>
</html>
<script>
var button = document.getElementById('controle');
var container = document.querySelector('#esconder');
var isVisible = false;

button.onclick = function() {
    if(!isVisible) {
        container.style.display = 'block';
        isVisible = true;
    } else {
        container.style.display = 'none';
        isVisible = false;
    }
} 

</script>