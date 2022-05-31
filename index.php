<?php

function affiche_pre($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$tab = [1, 2, 3, 4, 5, 6];
$tab2 = ["des", "chaines", "de", "char"];

$menu = [
    "Accueil" => "/HTML CSS/cours_2",
    "Catégories" => [
        "Categ 1" => "?page=categories&categId=1",
        "Categ 2" => "?page=categories&categId=2",
        "Categ 3" => "?page=categories&categId=3"
    ],
    "Contact" => "?page=contact",
    "FAQ" => "?page=faq"
];

affiche_pre($tab);
affiche_pre($tab2);
affiche_pre($menu);

affiche_pre($_GET);
?>