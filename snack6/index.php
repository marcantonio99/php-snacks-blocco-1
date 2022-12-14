<!--Snack 6
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
-->

<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

$arrayChiavi = array_keys( $db );

//$db['teachers'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--include Bootstrap's CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    

    <?php for( $i=0; $i<count($arrayChiavi); $i++ ){ ?>

    <?php if( $arrayChiavi[$i] == 'teachers' ) { ?>
        <div class="bg-secondary">
            <?php for( $k=0; $k < count( $db['teachers'] ); $k++ ){?>
                <ul>
                    <li>
                        <?php echo $db['teachers'][$k]['name'] . '-' . $db['teachers'][$k]['lastname'] ?>
                    </li>
                </ul>
            <?php } ?>
        </div>
    <?php } else { ?>
        <div class="bg-success">
            <?php for( $k=0; $k < count( $db['pm'] ); $k++ ){?>
                <ul>
                    <li>
                        <?php echo $db['pm'][$k]['name'] . '-' . $db['pm'][$k]['lastname'] ?>
                    </li>
                </ul>
            <?php } ?>
        </div>
    <?php } ?> 
    <?php }?>

    <!--include Bootstrap's JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
