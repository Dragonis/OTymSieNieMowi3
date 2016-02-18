<?php
$servername = 'mysql.cba.pl';
$username = 'otymsieniemowi3';
$password = 'dragonis';
$dbname = 'otymsieniemowi3_cba_pl';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Id,Imie,Nazwisko,Email,TelKom,AdresZamieszkania,KodPocztowy,Miasto,UczestnikBierny,UczestnikCzynny FROM OTymSieNieMowi3";
$result = $conn->query($sql);

echo "<html>
<head>
<meta charset='UTF-8'>
</head>
<body>";

echo '<table>
<tr>
<td>Id</td>
<td>Imię:</td>
<td>Nazwisko:</td>
<td>Email:</td>
<td>TelKom:</td>
<td>Adres Zamieszkania:</td>
<td>Kod Pocztowy::</td>
<td>Miasto:</td>
<td>UczestnikBierny:</td>
<td>UczestnikCzynny:</td>
</tr>';

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

echo'
<td>'.$row["Id"].'</td>
<td>'.$row["Imie"].'</td>
<td>'.$row["Nazwisko"].'</td>
<td>'.$row["Email"].'</td>
<td>'.$row["TelKom"].'</td>
<td>'.$row["AdresZamieszkania"].'</td>
<td>'.$row["KodPocztowy"].'</td>
<td>'.$row["Miasto"].'</td>
<td>'.$row["UczestnikBierny"].'</td>
<td>'.$row["UczestnikCzynny"].'</td>
</tr>
';


//        echo "<br> Id:  ". $row["Id"]. "<br>"
//            . "Imie : ". $row["Imie"]. "<br> "
//            . "Nazwisko :" . $row["Nazwisko"] . "<br>"
//            . "Email: " . $row["Email"] . "<br>"
//            . "TelKom: " . $row["TelKom"] . "<br>"
//            . "Adres Zamieszkania: " . $row["AdresZamieszkania"] . "<br>"
//            . "Kod Pocztowy: " . $row["KodPocztowy"] . "<br>"
//            . "Miasto: " . $row["Miasto"] . "<br>"
//            . "Uczestnik Bierny: " . $row["UczestnikBierny"] . "<br>"
//            . "Uczestnik Czynny: " . $row["UczestnikCzynny"] . "<br>";
    }
} else {
    echo "0 results";
}
echo "</table></body></html>";
$conn->close();

echo"Zapisz jako .xls, pdf, word <br>
    Generuj etykiety z powyższej listy osob.";
?>