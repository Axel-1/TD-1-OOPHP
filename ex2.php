<?php

include "productClass.php";

$prod1 = new product();
$prod1->constructor2("Stylo");

$prod2 = new product();
$prod2->constructor1("Trousse", 19.6, 8.99, 0);

$prod3 = new product();
$prod3->constructor1("Crayon", 19.6, 1.5, 25);

$prod4 = new product();
$prod4->constructor1("Pomme", 5.5, 0.50, 150);

$prod1->printAll();
print("\n");
$prod2->printAll();
print("\n");
$prod3->printAll();
print("\n");
$prod4->printAll();

print("\n");
print("Nombre de produit : " . product::getObjNbr() . "\n");
print("Produit le plus cher : " . product::getMaxPrice() . "€\n");