<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'test';
$dbconfig = mysqli_connect($host,$username,$password,$database);

// Fetching Values From the post method
$Imie = $_POST['Imie'];
$Nazwisko = $_POST['Nazwisko'];
$Email = $_POST['Email'];
$TelKom = $_POST['TelKom'];
$AdresZamieszkania = $_POST['AdresZamieszkania'];
$KodPocztowy = $_POST['KodPocztowy'];
$Miasto = $_POST['Miasto'];

if (isset($_POST['Imie'])) {
//$query = mysqli_query($dbconfig,"INSERT INTO `OTymSieNieMowi3` 
//(`Imie`, `Nazwisko`,`Email`,`TelKom`,`AdresZamieszkania`,`KodPocztowy`,`Miasto`) 
//VALUES
//('Jan', 'Kowalski','a@a.pl','4851234','ul.Przykladowa','56-5020','Zgadnij');"); //Insert Query
//echo"Form Submitted succesfully";
//}

$query = mysqli_query($dbconfig,"insert into otymsieniemowi3(`Imie`, `Nazwisko`, `Email`, `TelKom`, `AdresZamieszkania`, `KodPocztowy`, `Miasto`) values('$Imie', '$Nazwisko','$Email', '$TelKom','$AdresZamieszkania', '$KodPocztowy','$Miasto');"); //Insert Query
echo "Form Submitted succesfully";

}
?>
