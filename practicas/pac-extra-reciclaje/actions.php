<?php
    session_start();

    // $basuraProcesada = $_SESSION['count'];
        

    $pos = $_SESSION['basuraPosiciones'][$_SESSION['count']];
    $pos1 = $_SESSION['basuraPosiciones'][$_SESSION['count']+1];
    $pos2 = $_SESSION['basuraPosiciones'][$_SESSION['count']+2];
    $pos3 = $_SESSION['basuraPosiciones'][$_SESSION['count']+3];


    $basuraActual = $_SESSION['basura'][$pos]['name'];
    
    print("<pre>".print_r($_SESSION['basuraPosiciones'],true)."</pre>");

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        
        if (isset($_REQUEST['accion'])) {
            $basuraSeleccionada = $_REQUEST['accion'];
            
            // echo $basuraSeleccionada;
            
    
            if ($basuraSeleccionada == $basuraActual) {
                array_shift($_SESSION['basuraPosiciones']);
                $_SESSION['count'] += 1;
    
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
                
            }
    
        }
    }

    //plastic, paper, organic, glass, 

?>