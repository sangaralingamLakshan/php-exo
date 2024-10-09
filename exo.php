<?php
function capital($pays) {
    switch ($pays) {
        case 'France':
            return 'Paris';
        case 'Allemagne':
            return 'Berlin';
        case 'Italie':
            return 'Rome';
        case 'Maroc':
            return 'Rabat';
        case 'Espagne':
            return 'Madrid';
        case 'Portugal':
            return 'Lisbonne';
        case 'Angleterre':
            return 'Londres';
        default:
            return 'Inconnu';
    }
}

echo capital('France');   
echo capital('Allemagne');  
echo capital('Italie');     
echo capital('Canada');     
?>