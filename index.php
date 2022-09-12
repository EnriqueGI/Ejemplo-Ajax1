<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<button onclick="Llamar()" > Ingresar

</button>

<button onclick="Salir()" > Salir

</button>

<button onclick="Mostrar()" > Mostrar

</button>

<h1 id="user">Nombre del usuario:</h1>
<script>
function Llamar(){
var obAjax = new XMLHttpRequest();
obAjax.open('POST','Usuario.php', true);
obAjax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
obAjax.onreadystatechange = function(){
    document.getElementById('user').innerHTML= obAjax.responseText;
}
obAjax.send('crear');
}




function Salir(){
var obAjax = new XMLHttpRequest();
obAjax.open('POST','Usuario.php', true);
obAjax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
obAjax.onreadystatechange = function(){
    document.getElementById('user').innerHTML= obAjax.responseText;
}
obAjax.send('Salir');
}



function Mostrar(){
var obAjax = new XMLHttpRequest();
obAjax.open('POST','Usuario.php', true);
obAjax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
obAjax.onreadystatechange = function(){
    document.getElementById('user').innerHTML= obAjax.responseText;
}
obAjax.send('Mostrar');
}
</script>




</body>
</html>