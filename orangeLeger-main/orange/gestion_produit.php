<h2>Gestion des produits</h2>

<?php

$lesClients = $unControleur->selectAllClient();

require_once("vue/vue_insert_produit.php");

if(isset($_POST['Valider']))
{
    $unControleur->insertProduit($_POST);
}

$lesProduits = $unControleur->selectAllProduit();

require_once("vue/vue_select_produit.php");

?>