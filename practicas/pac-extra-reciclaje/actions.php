<?php
    session_start();

    $basuraProcesada = $_SESSION['count'];
        

    $pos = $_SESSION['basuraPosiciones'][$_SESSION['count']];
    $pos1 = $_SESSION['basuraPosiciones'][$_SESSION['count']+1];
    $pos2 = $_SESSION['basuraPosiciones'][$_SESSION['count']+2];
    $pos3 = $_SESSION['basuraPosiciones'][$_SESSION['count']+3];


    $basuraActual = $_SESSION['basura'][$pos]['name'];
    

    if (isset($_REQUEST['accion'])) {
        $basuraSeleccionada = $_REQUEST['accion'];
        
        if ($basuraSeleccionada == array_shift($_SESSION['basuraPosiciones'])) {
            switch ($basuraSeleccionada) {
                case 'Glass':
                    $contadorGlass+=1;
                    break;
                case 'Organic':
                    $contadorOrganic+=1;
                    break;
                case 'Paper':
                    $contadorPaper++;
                    break;
                case 'Plastic':
                    $contadorPlastic++;
                    break;
                default:
                    break;
            }

            $_SESSION['count'] += 1;

        }else{
        }

    }

    //plastic, paper, organic, glass, 

?>