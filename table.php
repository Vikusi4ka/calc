<title> Замовлення </title>
</head>
<body>
<H1> Замовлення піци </H1>
<table border=2>
<tr> <td>name</td> <td>Pizza_Morskaia</td> <td>Pizza_Gribu_kovbasa</td> <td>Pizza_Shunka</td> <td>Pizza_Chicen</td> <td>Osnova_pod_pizzy</td> <td>Pizza_Perec</td> <td>Pizza_Cur</td> <td>Pizza_Kykyrydza</td> <td>Pizza_Ananasu</td> <td>Pizza_Selen</td> <td>otrumania</td> <td>kilkist</td> <td>result</td> </tr>
<?phpsa
$fp=fopen("new.txt","r");
if ($fp)

   {
       while(!feof($fp))

    {
       $stroka=fscanf($fp,"%s\t %s\t %d\t %d\n");
       list($name,$Pizza_Morskaia,$Pizza_Gribu_kovbasa,$Pizza_Shunka$Pizza_Chicen,$Osnova_pod_pizzy,$Pizza_Perec,$Pizza_Cur,$Pizza_Kykyrydza,$Pizza_Ananasu,$Pizza_Selen,$otrumania,$kilkist,$result)=$stroka;
        //$Pizza_Morskaia=fscanf($fp,"%s\t");
        //$Pizza_Gribu_kovbasa=fscanf($fp,"%d\t");
        //$Pizza_Shunka=fscanf($fp,"%s\t");
        //$Pizza_Chicen=fscanf($fp,"%d\t");//$Pizza_Morskaia=fscanf($fp,"%s\t");
        //$Osnova_pod_pizzy=fscanf($fp,"%d\t");//$Pizza_Morskaia=fscanf($fp,"%s\t");
        //$Pizza_Perec=fscanf($fp,"%d\t");//$Pizza_Morskaia=fscanf($fp,"%s\t");
        //$Pizza_Cur=fscanf($fp,"%d\t");//$Pizza_Morskaia=fscanf($fp,"%s\t");
        //$Pizza_Kykyrydza=fscanf($fp,"%d\t");//$Pizza_Morskaia=fscanf($fp,"%s\t");
        //$Pizza_Ananasu=fscanf($fp,"%d\t");//$Pizza_Morskaia=fscanf($fp,"%s\t");
        //$Pizza_Selen=fscanf($fp,"%d\t");//$Pizza_Morskaia=fscanf($fp,"%s\t");
        //$otrumania=fscanf($fp,"%d\t");//$Pizza_Morskaia=fscanf($fp,"%s\t");
        //$kilkist=fscanf($fp,"%d\t");
        //$result=fscanf($fp,"%d\n");
echo "<TR><td>$name</td> <td>$Pizza_Morskaia</td> <td>$Pizza_Gribu_kovbasa</td> <td>$Pizza_Shunka</td> <td>$Pizza_Chicen</td> <td>$Osnova_pod_pizzy</td> <td>$Pizza_Perec</td> <td>$Pizza_Cur</td> <td>$Pizza_Kykyrydza</td> <td>Pizza_Ananasu</td> <td>$Pizza_Selen</td> <td>$otrumania</td> <td>$kilkist</td> <td>$result</td> </TR>";
}
fclose($fp);

}
?>
</body>
</html>
