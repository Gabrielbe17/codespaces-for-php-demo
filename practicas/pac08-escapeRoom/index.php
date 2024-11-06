<?php
    session_name('Escape-Room');
    session_start();

    $_SESSION['nom'] = $_GET['nom'];
    $_SESSION['nivel'] = $_GET['nivell'];
    
    // $_SESSION
    $adivinanzas = [
        "facil" => [
            [
                "pregunta" => "Blanca por dentro, verde por fuera. Si quieres que te lo diga, espera.",
                "resposta" => "La pera"
            ],
            [
                "pregunta" => "Oro parece, plata no es. ¿Qué es?",
                "resposta" => "El plátano"
            ],
            [
                "pregunta" => "¿Qué tiene el rey en la panza que no tiene el Papa?",
                "resposta" => "La letra Y"
            ],
            [
                "pregunta" => "Tengo agujas y no sé coser, tengo números y no sé leer. ¿Qué soy?",
                "resposta" => "El reloj"
            ],
            [
                "pregunta" => "Soy redonda como un queso y nadie puede darme un beso.",
                "resposta" => "La luna"
            ],
            [
                "pregunta" => "Vuelo entre las flores, vivo en la colmena, fabrico la miel y también la cera.",
                "resposta" => "La abeja"
            ],
            [
                "pregunta" => "Soy verde y amarillo, y marrón si me maduran. Si quieres saber quién soy, espera a que me abran.",
                "resposta" => "El plátano"
            ],
            [
                "pregunta" => "Cuanto más caliente, más fresco y crujiente.",
                "resposta" => "El pan"
            ],
            [
                "pregunta" => "Redondo, redondo, barril sin fondo.",
                "resposta" => "El anillo"
            ],
            [
                "pregunta" => "Chiquito como un ratón, cuida la casa como un león.",
                "resposta" => "La llave"
            ]
        ],
        "mig" => [
            [
                "pregunta" => "Siempre quietas, siempre inquietas, dormidas de día, de noche despiertas.",
                "resposta" => "Las estrellas"
            ],
            [
                "pregunta" => "Soy la redondez del mundo, sin mí no puede haber Dios. Papas y cardenales sí, pero obispos no.",
                "resposta" => "La letra O"
            ],
            [
                "pregunta" => "Entra en el río y no se moja, entra en el mar y no se moja, sube al cielo y no se moja.",
                "resposta" => "El sol"
            ],
            [
                "pregunta" => "Soy un palito muy derechito, y encima de la frente tengo un mosquito.",
                "resposta" => "La letra i"
            ],
            [
                "pregunta" => "Todos pasan por mí, yo no paso por nadie. Todos preguntan por mí, yo no pregunto por nadie.",
                "resposta" => "La calle"
            ],
            [
                "pregunta" => "No soy ave, pero vuelo. No soy pez, pero nado. No soy ángel, pero tengo alas.",
                "resposta" => "El murciélago"
            ],
            [
                "pregunta" => "Tengo cabeza redonda, sin nariz, ojos ni frente, y mi cuerpo se compone tan sólo de blancos dientes.",
                "resposta" => "El ajo"
            ],
            [
                "pregunta" => "Soy un señor encumbrado, ando mejor que un reloj, me levanto muy temprano y me acuesto a la oración.",
                "resposta" => "El sol"
            ],
            [
                "pregunta" => "Vuela sin alas, silba sin boca, azota sin manos y tú ni lo ves ni lo tocas.",
                "resposta" => "El viento"
            ],
            [
                "pregunta" => "Dos hermanas, mentira no es, la una es mi tía, la otra no lo es.",
                "resposta" => "Mi madre"
            ]
        ],
        "dificil" => [
            [
                "pregunta" => "Soy un número que no tiene par, si la vuelta me das, en nada me convertirás.",
                "resposta" => "El número 6"
            ],
            [
                "pregunta" => "Soy más de uno sin llegar a tres, y llego a cuatro cuando dos me des.",
                "resposta" => "El dos"
            ],
            [
                "pregunta" => "Oro no es, plata no es, abre la cortina y verás lo que es.",
                "resposta" => "El plátano"
            ],
            [
                "pregunta" => "Estando roto es más útil que sin romperse.",
                "resposta" => "El huevo"
            ],
            [
                "pregunta" => "Si me nombras desaparezco, ¿quién soy?",
                "resposta" => "El silencio"
            ],
            [
                "pregunta" => "¿Qué cosa es que cuanto más le quitas más grande es?",
                "resposta" => "El agujero"
            ],
            [
                "pregunta" => "Siempre va en coche y siempre está en casa.",
                "resposta" => "El caracol"
            ],
            [
                "pregunta" => "¿Qué es aquello que si nombras, desaparece?",
                "resposta" => "El silencio"
            ],
            [
                "pregunta" => "Cuanto más cerca, más lejos; cuanto más lejos, más cerca.",
                "resposta" => "El horizonte"
            ],
            [
                "pregunta" => "¿Qué es lo que se hace de noche, que no se puede hacer de día?",
                "resposta" => "Ver las estrellas"
            ]
        ]
    ];

    header('Locaion: room1.php');

    echo $_SESSION
?>


<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Inici</title>
</head>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-image: url('https://basementescaperoom.com/los-angeles/template/images/room-header-bg-thebasement.jpg'); background-size:cover; background-repeat: no-repeat;">
    <div class="card p-4 bg-dark text-white" style="width: 22rem;">
        <h2 class="card-title text-center">Benvingut!</h2>
        <form>
            <div class="mb-3">
                <label for="username" class="form-label">Nom:</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dificultat" class="form-label">Nivell de Dificultat:</label>
                <select name="nivell" id="dificultat" class="form-select" required>
                    <option value="">Selecciona un nivell</option>
                    <option value="facil">Fàcil</option>
                    <option value="mig">Mig</option>
                    <option value="dificil">Difícil</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100">Comença el Joc</button>
        </form>
    </div>
</body>
</html>
