<html>
    <head>
        <title>Tpphp</title>
    </head>
    <body>
        <?php
       $name = 'Dieynaba Ly';
       $sexe = "femme";
       echo '<p> Hello ' . $name .'</p>';
       if($sexe == "femme"){
            echo '<p>tu es une femme </p>';
       }

       else{
        echo'<p> tu es un homme  </p>' ;
       } 

       for ($nombre_de_lignes = 1; $nombre_de_lignes <= 1; $nombre_de_lignes++) {
           echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />' ;
           echo " <br>" ;
       }
       
       

       $foo = array('bar' => 'baz');
       echo "Hello{$foo['bar']} !"; // Hello baz!

       
       
       ?>

    </body>
</html> 