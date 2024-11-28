<?php
    session_start();
            
    $pos = $_SESSION['pos0'];
    
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_REQUEST['accion'])) {
        
        if (!($_REQUEST['accion'] == 'vaciarCamion')) {
            $basuraActual = $_SESSION['basura'][$pos]['name'];
            $basuraSeleccionada = $_REQUEST['accion'];    
            $alertContainer = '';    
    
            // var_dump($basuraActual);
            // var_dump($basuraSeleccionada);
            
            if ($basuraSeleccionada == $basuraActual) {
                // llamar a funcion, para comprobar que la basura actual no esta llena
                if (!estaLleno($basuraActual)) {
                    array_shift($_SESSION['basuraPosiciones']);
                    $_SESSION['count'] += 1;
        
                    // Actualizar las posiciones de la cola
                    $_SESSION['pos0'] = $_SESSION['basuraPosiciones'][0];
                    $_SESSION['pos1'] = $_SESSION['basuraPosiciones'][1];
                    $_SESSION['pos2'] = $_SESSION['basuraPosiciones'][2];
                    $_SESSION['pos3'] = $_SESSION['basuraPosiciones'][3];

                    switch ($basuraSeleccionada) {
                        case 'Glass':
                            $_SESSION['contadorGlass']+=1;
                            break;
                        case 'Organic':
                            $_SESSION['contadorOrganic']+=1;
                            break;
                        case 'Paper':
                            $_SESSION['contadorPaper']+=1;
                            break;
                        case 'Plastic':
                            $_SESSION['contadorPlastic']+=1;
                            break;
                        default:
                            break;
                    }
                }else{
                    $alertContainer = "<div class='alert alert-warning mt-4' role='alert'>El contenedor de " . $basuraActual ." está lleno</div>";
                }
            }
        
        }else{
            $_SESSION['contadorGlass'] = 0;
            $_SESSION['contadorOrganic'] = 0;
            $_SESSION['contadorPaper'] = 0;
            $_SESSION['contadorPlastic'] = 0;
        }

    }

    // funcion para detectar si algun contenedor esta lleno
    function estaLleno($basuraActual){
        switch ($basuraActual) {
            case 'Glass':
                return $_SESSION['contadorGlass'] == 7;
            case 'Organic':
                return $_SESSION['contadorOrganic'] == 7;
            case 'Paper':
                return $_SESSION['contadorPaper'] == 7;
            case 'Plastic':
                return $_SESSION['contadorPlastic'] == 7;
            default:
                break;
        }
    }
    
?>