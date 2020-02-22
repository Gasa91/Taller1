<?php


/*EJERCICIOS
Cree un repositorio que se llame generalidadesPHP1 y desarrolle los siguientes ejercicios de programación:
1.Hacer un programa en PHP que permita mostrar en pantalla la suma, resta, multiplicación, de dos números enteros
almacenados en 2 variables diferentes. Conserve el siguiente formato de impresión:
La suma de () + () = ()
La resta de ()-()= ()
La multiplicación de ()x() =()
La división de ()/()=()
2. El gimnasio Bodytech, lo contrata para desarrollar una aplicación web que permita a sus usuarios calcular el índice de
masa corporal, basado en la formula 𝐈𝐌𝐂 =
𝑷𝒆𝒔𝒐
𝑨𝒍𝒕𝒖𝒓𝒂𝒙𝑨𝒍𝒕𝒖𝒓𝒂
La clasificación del IMC es la siguiente:
 IMC <= 18,4 (Insuficiencia de peso)
 18,5<=IMC<=24,9 (Peso normal)
 25<=IMC<=29,9 (Sobrepeso)
 30<=IMC<=34,9 (Obesidad 1)
 35<=IMC<=39,9 (Obesidad 2)
 IMC>=40 (Obesidad 3)
Ejecute su programa para un usuario cuyo peso es de 85KG y cuya estatura es de
1.78m y muestre en pantalla el resultado obtenido
EJERCICIOS
3.Hacer un programa en PHP para la tienda Spring Step que tiene una promoción de descuento para vender al mayor, esta
dependerá del número de zapatos que se compren. Si son 3 pares se les dará un 10% de descuento sobre el total de la
compra; si el número de zapatos es mayor 3 pares pero menor o igual de 5 pares, se le otorga un 20% de descuento; y si son
más 5 pares de zapatos se otorgará un 40% de descuento. Defina la cantidad de variables que necesite, el precio de cada
pare de zapatos =$150.000 y establezca el valor total de una compra de 5 pares de zapatos.
4. Hacer un programa en PHP para ayudar a un trabajador de Postobón a saber cuál será su sueldo semanal, se sabe que si
trabaja 40 horas o menos, se le pagará $20000 por hora, pero si trabaja más de 40 horas entonces las horas extras se le
pagarán a $25 por hora. Ejecute su código para calcular el salario con 36 horas trabajadas.
5.Bancolombia contrata sus servicios de desarrollador para realizar un programa en PHP que permita almacenar
información de nombre, teléfono dirección y salario de 5 usuarios de una sucursal llamada sucursal A. Además, su
programa debe estar en la capacidad de sumar todos los salarios de los usuarios de la sucursal A en una sola variable
llamada $sumatoriaSalarios y así poder comparar dicho valor con las sucursales B cuyo valor de salarios mensual es de
20.000.000 y la sucursal C cuyo valor de salarios mensuales es de 15.000.000. Permita que su código muestre cual sucursal
tiene la mejor sumatoria de salarios y además muestre en pantalla la información completa de los 5 usuarios de la sucursal
A
*/


echo("FUE REALIZADO POR GIOVANNY SANCHEZ ");
/*1.Hacer un programa en PHP que permita mostrar en pantalla la suma, resta, multiplicación, de dos números enteros
almacenados en 2 variables diferentes. Conserve el siguiente formato de impresión:
La suma de () + () = ()
La resta de ()-()= ()
La multiplicación de ()x() =()
La división de ()/()=()*/

echo "<br>";
echo("PUNTO 1");

echo "<br>";
$n1=300;
$n2=400;
$suma=$n1+$n2;
$resta=$n1-$n2;
$multiplicacion=$n1*$n2;
$divicion=$n1/$n2;

echo("<br> la suma de:".$n1."+".$n2."=".$suma);
echo("<br> la resta de:".$n1."-".$n2."=".$resta);
echo("<br> la multiplicacion de:".$n1."*".$n2."=".$multiplicacion);
echo("<br> la divicion de:".$n1."/".$n2."=".$divicion);





?>