<!-- Calculo de area y perimetro de un rectangulo.-->

<!-- Escribe un script que calcule el área y el perímetro 
 de un rectángulo dados el ancho y el alto-->
 
 <?php 
 //Declaramos los números de cada lado.
 $lado = 2;
 $lado2 = 4;

 //En la variable, formulamos el perímetro y área.
 $perimetro = $lado * 2 + $lado2 * 2;
 $area = $lado * $lado2;

 //Imprimimos por pantalla.
 echo "Dado los lados: $lado y $lado2".nl2br("\n");
 echo "El perímetro es de $perimetro y su area de $area";
 ?>