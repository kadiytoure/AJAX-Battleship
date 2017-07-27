<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
<?php 
    $compteur = 0;
    // première boucle pour les tr (lignes)


    for($x = 0; $x <= 10; $x++) {
        echo '<tr>';
        //et une seconde boucle pour les td (colonnes)
        for ($y= 0; $y <= 10; $y++) {
            $compteur++;
            echo '<td>(' . $x . ', ' . $y . ')</td>';
        }
        //en oubliant pas de fermer les tr
        echo '</tr>';
    }?>
</table>
<script>
let boat = [];
let ligne = document.querySelectorAll("tr");
for(let y = 0; y < ligne.length; y = y + 1){
    let column = ligne[y].children;
    for(let x = 0; x < column.length; x = x + 1) {
        column[x].addEventListener("click", function(e) {
            let b = {
                "x": x,
                "y": y,
            };
            console.log(b);
            boat.push(b);
            column[x].style.background = 'green';
            e.preventDefault();
        });
    }
}
doAjax({
    url: 'create-boat.php',
    callback: function (reponse) {
        let parser = new DOMParser();
        let createboat = parser
    }
    ajax.open();
    ajax.send();
});
</script>
</body>
</html>
<!-- Afficher les bateaux avec leurs noms et leurs nbres de cases; -->