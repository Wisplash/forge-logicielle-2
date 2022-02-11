<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <table class="table-style">
</head>
</html>

<thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>age</th>
                <th>ville</th>
            </tr>
        </thead>
        

        <tbody>
            <?php ?>
            <tr>                
                <td>prenom</td>
                <td>nom</td>
                <td>age</td>
                <td>ville</td>
                
            </tr>
            <?php  ?>

            <tr>
                <td>Content</td>
                <td>Content</td>
                <td>Content</td>
                <td>Content</td>
            </tr>
            <tr>
                <td>Content</td>
                <td>Content</td>
                <td>Content</td>
                <td>Content</td>
            </tr>
            <tr>
                <td>Content</td>
                <td>Content</td>
                <td>Content</td>
                <td>Content</td>
            </tr>
            <tr>
                <td>Content</td>
                <td>Content</td>
                <td>Content</td>
                <td>Content</td>
            </tr>
            <tr>
                <td>Content</td>
                <td>Content</td>
                <td>Content</td>
                <td>Content</td>
            </tr>
        </tbody>
        </tbody>

    </table>
</thead>    
<?php

function show_tableau($personnes){
    foreach ($personnes as $val) {
        if (is_array($val)) {
           show_tableau($val);
         } else {
           echo $val . '<br />';
         } 
       } 
      }     

   

$personnes = array(

    "mdupond" => array("prenom" => "Martin", 
                       "nom" => "Dupond",
                       "age" => 25, 
                       "ville" => "Paris"),

    "jm" => array("prenom" => "jean", 
                  "nom" => "Martin", 
                  "age" => 20, 
                  "ville" => "Villtaneuse"),

    "toto"=> array("prenom" => "Tom", 
                   "nom" => "Tonge", 
                   "age" => 18, 
                   "ville" => "Epinay"), 

    "arn"=> array("prenom" => "Arnaud", 
                  "nom" => "Dupond", 
                  "age" => 33, 
                  "ville" => "Paris"), 

    "email"=> array("prenom"=>"Emilie", 
                    "nom"=>"Ailta", 
                    "age"=>46, 
                    "ville"=>"Villetaneuse"), 

    "dask" => array("prenom"=>"Damien", 
                    "nom"=>"Askier",
                    "age"=>7,
                    "ville"=>"Villetaneuse") 
);

{


    echo "<table border=1><tr><th>Prénom</th><th>Nom</th><th>Age</th><th>Ville</th></tr>";
    foreach ($personnes as $id => $valeur) {
        echo "<tr><td>".$personnes[$id]["prenom"]."</td><td>".$personnes[$id]["nom"]."</td><td>".$personnes[$id]["age"]."</td><td>".$personnes[$id]["ville"]."</td></tr>";
    };
    echo "</table>";


}


?>