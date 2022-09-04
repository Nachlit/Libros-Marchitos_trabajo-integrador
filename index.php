<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
</header>
<header class="header">

<h1>Libros </h1>
</header>
</header>
<header class="header1">

<h1>Marchitos </h1>
</header>
<NAV class="botonera_principal">
<UL>
<LI><A href= "index.php"> Home</A></LI>
<LI><A href= "consultas.php"> Consultas</A></LI>
<LI><A href= "Libros.php"> Comprar Libro</A></LI>
</UL>


</NAV>

<section class="autor">
<h2>Autor del més </h2>

<?php


define('Autor_del_mes', array ('Julio Cortazar','Jorge Luis Borges','Pedro Mairal','Juan Jose Saer','Abelardo Castillo','Mariana Eriquez','Luciano Lamberti','Federico Falco'
,'Selva Almada','Ricardo Piglia','Enrique Fogwill','Maria Moreno' ));

echo Autor_del_mes[7];
echo'<br>';
?>
</section>
<br>


<?php 
   
$curso1 = "Literatura Argentina 1";
$unidades_curso = 4;
$arancel = 500;
$fecha = '01/09/2022';


$curso2 = "Taller de Poesía";
$unidades_curso2 = 8;
$arancel2 = 1000;
$fecha2 = '01/10/2022';

$curso3 = "Taller de Cuento";
$unidades_curso3 = 8;
$arancel3 =1000;
$fecha3 = '01/10/2022';

 ?>
 <section class="contenido">
    <h2> Talleres disponibles</h2>
<h3><?php 
echo $curso1 ;?>
</h3>
<ul>
<li> Clases: <?php echo$unidades_curso;?>
</li>
<li> Costo: $<?php echo$arancel;?>
</li>
<li> Fecha de inicio: <?php echo$fecha;?>
</li>


</ul>


<h3><?php 
echo $curso2 ;?>
</h3>
<ul>
<li> Duración: <?php echo$unidades_curso2;?>
</li>
<li> Costo: $<?php echo$arancel2;?>
</li>
<li> Fecha de inicio: <?php echo$fecha2;?>
</li>


</ul>

<h3><?php 
echo $curso3;?>
</h3>
<ul>
<li> Duración: <?php echo$unidades_curso3;?>
</li>
<li> Costo: $<?php echo$arancel3;?>
</li>
<li> Fecha de inicio: <?php echo$fecha3;?>
</li>


</ul>


</section>
<?php
//variables
$Pack1 = $arancel + $arancel2;
$Pack2 = $arancel + $arancel2 + $arancel3;
$aranceles_totales = $arancel + $arancel2;
$descuento1= $Pack1 * 0.10;
$descuento2= $Pack2 * 0.20;
$Promocion1= $Pack1 - $descuento1;
$Promocion2= $Pack2 - $descuento2;
?>

<section class="Totales">

<h3>Promociones 
</h3>
<ul>
<li> Comprando 2 Cursos - 10% descuento: $<?php echo$Promocion1;?>
</li>
<li> Comprando 3 Cursos - 20% descuento: $<?php echo$Promocion2;?>
</li>


<section>






</body>
</html>