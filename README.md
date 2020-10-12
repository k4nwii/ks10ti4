# Własne repozytorium kodu
 

```php
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
```

## Dokumentacja

Moja dokumentacja dotycząca pracy w domu na zajęcia tworzenie stron i aplikacji internetowych.

## Instalacja
Instalacja została wykonana na zajęciach.

```
https://github.com/k4nwii/ks10ti4
```

## Cel i funkcje

* zbiór elementów pracy w domu
* możliwość pomocy kolegów z zespołu projektowego
* nadzór kierownika projektu

## Wkład projektowy

* główny nadzór: https://github.com/Michal3456
* kod projektu: https://github.com/k4nwii

## Licencja

Ten projekt jest udostępniany na licencji MIT. Szczegółowe informacje można znaleźć w dołączonym pliku LICENCJA.

## Autor

Kacper Szmytkowski
