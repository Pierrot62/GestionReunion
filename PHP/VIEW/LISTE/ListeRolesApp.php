<?php

echo '<main>';
echo '<div class="flex-0-1"></div>';
echo '<div>';

$role=RolesappManager::getList();
$attributes=$role[0]->getAttributes();
$nbChamp=count($attributes); 

//Création du template de la grid
echo '<div class="GridListe" style="grid-template-columns: ';
for($i=0;$i<$nbChamp;$i++){
    echo '2fr ';
}
echo '0.5fr 0.5fr 0.5fr;">';
$nbChamp=$nbChamp+3+1; //+3 pour les bouttons supprimer/modifier/Afficher et +1 pour la borne supérieur : [1,$nbChamp+3+1[
//Une ligne du formulaire
echo '<div class="test" style="grid-column:1/'.$nbChamp.';">TITRE </div>';

//Entete
//champs des entetes
for($i=1;$i<$nbChamp-4;$i++){
    echo '<div class="test">'.$attributes[$i].'</div>';
}
//Remplissage de div vide pour la structure de la grid
for($i=$nbChamp-4;$i<$nbChamp;$i++){
    echo '<div class="test"></div>';
}

//Une ligne du formulaire
echo '<div class="test"> Libelle</div>';
echo '<div class="test"> <button>Afficher</button></div>';
echo '<div class="test"> <button>Modifier</button></div>';
echo '<div class="test"> <button>Supprimer</button></div>';

//Une ligne du formulaire
echo '<div class="test titreGrid"> 
    <div></div>
    <a href="index.php?page=Accueil"><button>Retour</button> </a>
    <div class="flex-0-1"></div>
    <button type="submit" >Valider</button> 
    <div></div>
</div>';

echo'</div>'; //GridForm
echo'</div>'; //Div
echo '<div class="flex-0-1"></div>';
echo '</main>';