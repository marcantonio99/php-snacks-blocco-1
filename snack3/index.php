<!-- Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
 -->

 <?php

$posts = [

    '01/01/2010' => [
        [
            'title' => 'Post 1',
            'author' => 'Fabio Fabi',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Patrizio Patrizi',
            'text' => 'Testo post 2'
        ]
    ],
    '01/02/2010' => [
        [
            'title' => 'Post 3',
            'author' => 'Teresa Terese',
            'text' => 'Testo post 3'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Geltrude Geltrudis',
            'text' => 'Testo post 4'
        ]
    ],
    '01/03/2010' => [
        [
            'title' => 'Post 4',
            'author' => 'Roberto Roberti',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Simone Franco',
            'text' => 'Testo post 6'
        ]
    ],
];

//var_dump( $posts['01/01/2010'] );

$arraDate = array_keys( $posts );
//var_dump( $posts[ $arraDate[0] ] );

for( $i = 0; $i < count($posts); $i++ ){
    echo $arraDate[$i];
    echo "<br>";

    for( $k = 0; $k < count( $posts[ $arraDate[$i] ] ); $k++ ){
       echo $posts[ $arraDate[$i] ][$k]['title'];
       echo "<br>";
       echo $posts[ $arraDate[$i] ][$k]['author'];
       echo "<br>";
       echo $posts[ $arraDate[$i] ][$k]['text'];
       echo "<br>";
       echo "<br>"; 
    }
}

?>
