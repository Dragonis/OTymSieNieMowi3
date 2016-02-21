<?php
$host = 'mysql.cba.pl';
$username = 'otymsieniemowi3';
$password = 'dragonis';
$database = 'otymsieniemowi3_cba_pl';
$dbconfig = mysqli_connect($host,$username,$password,$database);

// Fetching Values From the post method
$Imie = $_POST['Imie'];
$Nazwisko = $_POST['Nazwisko'];
$Ulica = $_POST['Ulica'];
$NrBloku = $_POST['NrBloku'];
$NrMieszkania = $_POST['NrMieszkania'];
$KodPocztowy = $_POST['KodPocztowy'];
$Miasto = $_POST['Miasto'];
$TelKom = $_POST['TelKom'];
$Email = $_POST['Email'];
$Uwagi = $_POST['Uwagi'];

$UczestnikBierny = $_POST['UczestnikBierny'];
$UczestnikCzynny = $_POST['UczestnikCzynny'];


if (isset($_POST['Imie'])) {
//$query = mysqli_query($dbconfig,"INSERT INTO `OTymSieNieMowi3` 
//(`Imie`, `Nazwisko`,`Email`,`TelKom`,`AdresZamieszkania`,`KodPocztowy`,`Miasto`) 
//VALUES
//('Jan', 'Kowalski','a@a.pl','4851234','ul.Przykladowa','56-5020','Zgadnij');"); //Insert Query
//echo"Form Submitted succesfully";
//}

$query = mysqli_query($dbconfig,"insert into OTymSieNieMowi3(`Imie`, `Nazwisko`,`Ulica`,`NrBloku`,`NrMieszkania`,`KodPocztowy`,`Miasto`,`TelKom`,`Email`,`Uwagi`,`UczestnikBierny`,`UczestnikCzynny`) values('$Imie', '$Nazwisko','$Ulica', '$NrBloku','$NrMieszkania', '$KodPocztowy','$Miasto','$TelKom','$Email','$Uwagi','$UczestnikBierny','$UczestnikCzynny');"); //Insert Query
//echo "Form Submitted succesfully";

}
?>
