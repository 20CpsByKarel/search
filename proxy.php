<?php
// PHP skript, který načte XML z externího URL a vrátí ho
header("Access-Control-Allow-Origin: *"); // Povolit CORS
header("Content-Type: text/xml"); // Nastavit správný obsahový typ

// URL externího XML souboru
$url = 'https://www.henrymorgan.cz/export-full-products-TGp7rYDROL.xml';

// Načtení obsahu XML a vrácení jako odpověď
echo file_get_contents($url);
?>
