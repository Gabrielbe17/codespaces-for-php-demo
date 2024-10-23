<?php
// Array multidimensional amb la informació de cada casa
    $casas_info = [
        "Gryffindor" => [
        "background_color" => "#740001",
        "text_color" => "#FFD700",
        "welcome_message" => "Coratge, valor i determinació. Benvingut a Gryffindor!",
        "message_background" => "#D3A625",
        "image" => "assets/gryffindor.png"
        ],
        "Hufflepuff" => [
        "background_color" => "#FFDB00",
        "text_color" => "#60605B",
        "welcome_message" => "Lleialtat, paciència i treball dur. Benvingut a Hufflepuff!",
        "message_background" => "#EEE117",
        "image" => "assets/hufflepuff.png"
        ],
        "Ravenclaw" => [
        "background_color" => "#0E1A40",
        "text_color" => "#946B2D",
        "welcome_message" => "Intel·ligència, creativitat i saviesa. Benvingut a Ravenclaw!",
        "message_background" => "#5D5D5D",
        "image" => "assets/ravenclaw.png"
        ],
        "Slytherin" => [
        "background_color" => "#1A472A",
        "text_color" => "#AAAAAA",
        "welcome_message" => "Ambició, astúcia i lideratge. Benvingut a Slytherin!",
        "message_background" => "#5D5D5D",
        "image" => "assets/slytherin.png"
        ]
    ];

    $nom = $_POST['nom'];
    $cognom = $_POST['cognom'];

    function getCasa(){
        global $casas_info;

        //$casas = array_keys($casas_info);
        $posCasa = array_rand($casas_info);
        return $posCasa;
    }

    
    $casaSeleccionada = getCasa();
    // var_dump(getCasa());
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benvingut a la teva casa de Hogwarts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: <?php echo $casas_info[$casaSeleccionada]["background_color"]?>;
            color: <?php echo $casas_info[$casaSeleccionada]["text_color"]?>;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container{
            max-width: 90rem;
            margin: 0 auto;
        }
        .welcome-message{
            background-color: <?php echo $casas_info[$casaSeleccionada]["message_background"]?>;
            padding: 1rem;
            border-radius: 1rem;
        }
        img{
            width: 15rem;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h1>¡Benvingut a la teva nova casa en Hogwarts!</h1>
        <div class="welcome-message mt-4">
            <h3><?php echo $nom ." ". $cognom; ?>, has sigut seleccionat per <?php echo $casaSeleccionada; ?>!</h3>
            <p class=""><?php echo $casas_info[$casaSeleccionada]["welcome_message"]?></p>
            <img src=<?php echo $casas_info[$casaSeleccionada]["image"]?> alt="">
        </div>
    </div>
</body>
</html>