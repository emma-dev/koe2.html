<html><head>
<meta charset = "UTF-8">
 <link rel="stylesheet" href="https://outlook.office365.com/mail/inbox/id/AAQkADA0YjQ1YjE5LWVmM2ItNGI0Mi05MTAyLWU3MmY4MDlmOGQzZQAQAKv46aKEWUaPtDcN072S96E%3D">
<title>Kiitos viestistäsi</title>

</head>
<body>

<?php 
$posti = array 
( 
$nimi=>$_POST['nimi'],
//osoite=>$_POST['osoite'],
//puhelin=>$_POST['puhelin'],
//email=>$_POST['email'],
$Olen=>$_POST['olen'],
$Kommentit=>$_POST['kommentit'] 
); 

$osoite = "19124742@edu.riveria.fi"; 
$otsikko = "Viesti nettisivulta"; 
$viesti = "Nimi: ".$_POST['nimi']." 
Osoite: ".$_POST['osoite']."
Puhelin: ".$_POST['puhelin']."
E-mail: ".$_POST['email']." 
Olen:".$_POST['olen']."
Kommentit: ".$_POST['kommentit']."";
 

mail ($osoite, $otsikko, $viesti, "From: Mallilomake"); 
?> 

<p>&nbsp;</p>
<p>&nbsp;</p> 
<p>Kiitos viestistäsi, mallilomakkeesi tuli perille.</p>
</body>
</html>
