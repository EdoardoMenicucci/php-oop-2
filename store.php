<?php

$crocchetteRoyalCanin = new Cibo(
    'Royal Canin Dog Maxi',
    'Alimento secco completo per cani adulti di grande taglia.',
    'Cani',
    'Secco',
    'Grande',
    '€ 63,74'
);

$Whiskas = new Cibo(
    'Whiskas Duo in buste',
    'Alimento umido per gatti adulti.',
    'Gatti',
    'Umido',
    'Piccolo',
    '€ 40,49'
);

$kongExtreme = new Gioco(
    'Kong Extreme',
    'Il gioco per cani KONG Extreme è realizzato con la gomma KONG più durevole e resistente.',
    'Cani',
    'Gioco da lancio',
    '€ 10,38'
);

$petup = new Cuccia(
    'Petup Cuccia Eco',
    'Petup Cuccia Eco L è una cuccia in polipropilene lavabile con acqua e idropulitrice.',
    'Cani',
    'Coperta',
    '€ 141,90'
);

$cozy = new Cuccia(
    'Letto Cozy Kingdom',
    'Comodo Letto Cozy Kingdom, con bordo alto.',
    'Cani e Gatti',
    'Non Coperta',
    '€ 19,99'
);

$spazzolaCandure = new Product(
    'Candure',
    'Spazzola per Cani, Pettine Gatti per Pelo Acciaio Inossidabile',
    'Cani e Gatti',
    '€ 15,99'
);



$prodotti = [$crocchetteRoyalCanin, $Whiskas, $kongExtreme, $petup, $cozy, $spazzolaCandure];
