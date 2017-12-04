<?php

// Tworzymy zmienną dla imienia i nazwiska
$name = $_POST['name'];

// Tworzymy zmienną dla adresu email
$email = $_POST['email'];

// Tworzymy zmienną dla wiadomości
$message = $_POST['message'];

// Podajesz adres email z którego ma być wysłana wiadomość
//biuro@79level.pl
$odkogo = "janczakpawel@op.pl";

// Podajesz adres email na który chcesz otrzymać wiadomość
//kontakt@tomaszblaszczyk.com
$dokogo = "biuro@djtomi.com";

// Podajesz tytuł jaki ma mieć ta wiadomość email
$tytul = "Wiadomość z www.djtomi.com";

// Przygotowujesz treść wiadomości
$wiadomosc = "";
$wiadomosc .= "Imie i nazwisko: " . $name . "\n";
$wiadomosc .= "Email: " . $email . "\n";
$wiadomosc .= "Wiadomość: " . $message . "\n";

// Dodajemy UTF-8 do naglowka naszej wiadomości
$naglowek = "";
$naglowek .= "Od:" . $odkogo . " \n";
$naglowek .= "Content-Type:text/plain;charset=utf-8";

// Wysyłamy wiadomość
$sukces = mail($dokogo, $tytul, $wiadomosc, $naglowek);

// Przekierowywujemy na potwierdzenie
if ($sukces){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=potwierdzenie.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>