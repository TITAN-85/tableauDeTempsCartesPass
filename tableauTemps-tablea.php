<?php


date_default_timezone_set('America/Toronto');
$client_heures = date("g", strtotime($_GET["time"]));
$client_minutes = date("i", strtotime($_GET["time"]));
$client_temps =  $client_heures.":".$client_minutes;
$actual_temps = date("g:i");
$actual_heures = date("g", strtotime($actual_temps));
$actual_minutes = date("i", strtotime($actual_temps));
$devine = false;
$color = "";


// echo $_GET["time"];
// echo ("<br>");
// echo ( strtotime($client_temps));
// echo ("<br>");
// var_dump ( date("g", strtotime($client_temps)));
// echo ("<br>");
// var_dump ( date("i", strtotime($client_temps)));
// echo ("<br>");
// echo ("<br>");
// echo ("<br>");

// echo ($client_heures);
// echo ("<br>");
// echo ($client_minutes);
// echo ("<br>");
// echo ($client_temps);
// echo ("<br>");
// echo ($actual_temps);
// echo ("<br>");
// echo ($actual_heures);
// echo ("<br>");
// echo ($actual_minutes);
// echo ("<br>");


$timeBoard = [];
$minutesLigne = 60;
$heuresColones = 13;

for ($i = 0; $i < $minutesLigne; $i++) {
    for ($j = 0; $j < $heuresColones; $j++) {
        $timeBoard[$i][$j] = $j.":".$i;
    }
}

// echo "<pre>".print_r($timeBoard, true)."<pre>";

if ($client_temps === $actual_temps) {
    // Montre le temps de client
    $timeBoard[(int)$actual_minutes][$actual_heures ] = $actual_heures.":".$actual_minutes;
    $devine = true;
} else {
    // Montre le temps reel
    $timeBoard[(int)$actual_minutes][$actual_heures ] = $actual_heures.":".$actual_minutes;
    $timeBoard[(int)$client_minutes][$client_heures] = $client_heures.":".$client_minutes;
    $devine = false;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Alexandru Candu 2295298">
    <link rel="stylesheet" href="style.css">
    <title>Tableau de Temps</title>
    <style>
        body {
            width: 60%;
            margin: auto;
        }

        table,
        th,
        td {
            border: 3px solid grey;
            border-collapse: collapse;
        }

        th {
            background-color: darkseagreen;
            color: red;
        }

        th,
        td {
            width: 55px;
            line-height: 40px;
            text-align: center;
        }

        td {
            color: green;
        }
        .box{
            background-color: brown;
            color: white;
            margin: 20px;
            padding: 15px;
        }
    </style>
</head>
<body>
<nav>
        <a href="projet-final.php" role="menuitem" aria-roledescription="menuitem">Projet final</a>
        <a href="tableauTemps.php" role="menuitem" aria-roledescription="menuitem">Tableau de Temps</a>
        <a href="pass.php" role="menuitem" aria-roledescription="menuitem">Mot de passe</a>
        <a href="cartes.php" role="menuitem" aria-roledescription="menuitem">Paquet de cartes</a>
    </nav>
    <main>
        <section>
            <h1>Tableau de Temp<?php echo date(" h:i"); ?> </h1>
        </section>
        <section>
            <table>
                <tr>
                    <th>Heures/Minutes</th>
                    <?php for( $i =0; $i < $heuresColones; $i++) : ?>
                    <th> <?= $i ?> </th>
                    <?php endfor ?>
                </tr>
                <?php for($i = 0; $i < $minutesLigne; $i++) : ?>
                    <tr>
                        <th> <?= $i ?> </th>
                        <?php for( $j =0; $j < $heuresColones; $j++) : ?>
                            
                            <?php 

                                if ($devine) {
                                    $color = "green";
                                } else {
                                    
                                    if ($j == $actual_heures && $i == $actual_minutes) {
                                        $color = "blue";
                                    } else {
                                        $color = "";
                                    }

                                    if ($j == $client_heures && $i == $client_minutes) {
                                        $color = "red";
                                    } else {
                                        $color = "";
                                    }
                                }
                                
                                if ($j == $actual_heures && $i == $actual_minutes || $j == $client_heures && $i == $client_minutes){
                                    if($j == $actual_heures && $i == $actual_minutes){
                                        if ($devine) {
                                            $color = "green";
                                        } else{
                                            $color = "blue";
                                        }
                                        if($j == $client_heures && $i == $client_minutes)
                                        if ($devine) {
                                            $color = "green";
                                        } else{
                                            $color = "blue";
                                        }
                                    }
                                }else{
                                    $color = "";
                                }
                            ?>
                            <td class="<?= $color ?>"><?= $timeBoard[$i][$j] ?></td>
                        <?php endfor ?>
                    </tr>
                <?php endfor ?>
            </table>
        </section>
    </main>
</body>
</html>