<?php
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

    function elegirPreguntaAleatoria($nivell){
        global $adivinanzas;
        $length = count($adivinanzas[$nivell]);
        $posRandom = rand(0, $length -1);

        return $adivinanzas[$nivell][$posRandom];
    }
?>