<!--Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
-->

<?php

$arrayAlunni = [
    [
        'nome' => 'Alex',
        'cognome' => 'Red',
        'voti' => [2,4,8,5,10]
    ],
    [
        'nome' => 'Davide',
        'cognome' => 'Conte',
        'voti' => [5,10,3,7,10]
    ]
];

for( $i=0; $i<count($arrayAlunni); $i++ ){
    $mediaVoti = / count( $arrayAlunni[$i]['voti'] );

    echo $arrayAlunni[$i]['nome'] . '-' . $arrayAlunni[$i]['cognome']. ' la media dei voti è: ' . $mediaVoti;
}


?>