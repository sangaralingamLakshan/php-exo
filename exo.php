<?php
function plusPetit($tab){
    $tab=array(55,122,62,656,454);
if (empty($tab)){
    return null;
}else {
    return min($tab);
}
}
echo plusPetit($tab);
?>
