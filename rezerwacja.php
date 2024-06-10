<?php

echo "Dodano rezerwacje do bazy";

$pol=mysqli_connect("localhost","root","","baza");

$submit=$_POST['submit'];
$data=$_POST['data'];
$ileosob=$_POST['ileosob'];
$numertelefonu=$_POST['numertelefonu'];
$zgoda=$_POST['zgoda'];

$sql=mysqli_query($pol,"INSERT INTO rezerwacje(data_rez,liczba_osob,telefon) VALUES('$data','$ileosob','$numertelefonu')");



mysqli_close($pol);
?>