<?php
header('Content-type: text/html; charset=utf-8');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title> Замовлення піци </title>
<script language="JavaScript">



function calculate()
{

var Morskaia=parseFloat(document.myform.Pizza_Morskaia.value);
var Gribu_kovbasa=parseFloat(document.myform.Pizza_Gribu_kovbasa.value);
var Shunka=parseFloat(document.myform.Pizza_Shunka.value);
var Chicen=parseFloat(document.myform.Pizza_Chicen.value);
var Osnova_pod_pizzy=parseFloat(document.myform.Osnova_pod_pizzy.value);
var Perec=parseFloat(document.myform.Pizza_Perec.value);
var Cur=parseFloat(document.myform.Pizza_Cur.value);
var Kykyrydza=parseFloat(document.myform.Pizza_Kykyrydza.value);
var Ananasu=parseFloat(document.myform. Pizza_Ananasu.value);
var Selen=parseFloat(document.myform.Pizza_Selen.value);
var Kilkist=parseFloat(document.myform.кількість.value);
var Sym=0;



if(document.myform.Pizza_Morskaia.checked)
Sym=Sym+(50*Kilkist);
if(document.myform.Pizza_Gribu_kovbasa.checked)
Sym=Sym+(35*Kilkist);
if(document.myform.Pizza_Shunka.checked)
Sym=Sym+(39*Kilkist)
if(document.myform.Pizza_Chicen.checked)
Sym=Sym+(29*Kilkist);
if(document.myform.Osnova_pod_pizzy.value.checked)
Sym=Sym+(15*Kilkist);
if(document.myform.Pizza_Perec.value.checked)
Sym=Sym+(3*Kilkist);
if(document.myform.Pizza_Cur.value.checked)
Sym=Sym+(5*Kilkist);
if(document.myform.Pizza_Kykyrydza.value.checked)
Sym=Sym+(4*Kilkist);
if(document.myform.Pizza_Ananasu.value.checked)
Sym=Sym+(9*Kilkist);
if(document.myform.Pizza_Selen.value.checked)
Sum=Sym+(6*Kilkist);

document.myform.result.value=Sym;

}



</script>
</head>
<body>
<form name=myform action="pizza.php">
<H1>Замовлення піци онлайн</H1>


<p> Асортимент </p>
<input type="checkbox" name="Pizza_Morskaia" >Піца морська
<label>
 -  <input type=reset value="50 грн" name=Піца морська><br>
</label>
<input type="checkbox" name="Pizza_Gribu_kovbasa" >Піца з грибами та кобасою
<label>
 - <input type=reset value="35 грн" name=Піца з грибами та кобасою><br>
</label>
<input type="checkbox" name="Pizza_Shunka" >Піца з шинкою
<label>
-  <input type=reset value="39 грн" name=Піца з шинкою><br>
</label>
<input type="checkbox" name="Pizza_Chicen">Піца з куркою
<label>
-  <input type=reset value="29 грн" name=Піца з куркою><br>
</label>
<p> Зроби піцу сам </p><br>
<br>
 <input type="radio" name="Osnova_pod_pizzy" value="rad5">Основа під піцу
<label>
-  <input type=reset value="15 грн" name=Основа під піцу<br>
</label></p>
Начинка:<br>
<input type="checkbox" name="Pizza_Perec" onclick="plus()">Перець
<label>
 -  <input type=reset value="3 грн " name=Перець><br>
</label>
<input type="checkbox" name="Pizza_Cur" onclick="plus()">Сир
<label>
 - <input type=reset value="5 грн " name=Сир><br>
</label>
<input type="checkbox" name="Pizza_Kykyrydza" onclick="plus()">Кукурудза
<label>
-  <input type=reset value="4 грн " name=Кукурудза><br>
</label>
<input type="checkbox" name="Pizza_Ananasu" onclick="plus()">Ананаси
<label>
-  <input type=reset value="9 грн " name=Ананаси><br>
</label>
<input type="checkbox" name="Pizza_Selen" onclick="plus()">Зелень
<label>
-  <input type=reset value="6 грн " name=Зелань><br>
</label>

<p> Спосіб отриманнЯ </p>
<select name="otrumania">
<option selected value="home">Доставка</option>
<option value="Pickup">Самовивіз</option>

<select>
<Br>
<label>
Кількість -  <input type=text name="kilkist"><br>
</label>

<input type=button value="Зробити розрахунок" onClick="calculate();"><br>
<input type=submit value="замовити"><br>
<textarea name=result>
</textarea>

</form>
</body>
</html>

