<!--Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
-->

<?php

$paragrafo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam beatae in quis. Quo incidunt a doloremque itaque voluptates, possimus reprehenderit quasi sequi, voluptatibus autem rerum quidem eum, facere optio odit!";

$arrayParagrafi = explode( '.', $paragrafo, -1 );

for( $i=0; $i< count($arrayParagrafi); $i++ ){

    if( $arrayParagrafi[$i] != '' ){
        echo "<p>";
        echo $arrayParagrafi[$i];
        echo "</p>";
    }
}

?>

