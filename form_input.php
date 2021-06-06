<?php

include "form.php";

echo "<html><head>
      <title>Mahasiswa</title>
      <link rel='stylesheet' href='style.css' type=text/css>
      </head><body>";
$form = new Form("", "Input Form");
$form->addField("txtnim", "Nim");
$form->addField("txtnama", "Nama");
$form->addField("txtalamt", "Alamat");
echo "<h3>Silahkan isi Form berikut : </h3>";
$form->displayForm();
echo "</body></html>";

?>