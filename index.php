<?php
    
    // if (isset)($_REQUEST['opciones'])) {
    //     $opcion=(int) $_REQUEST['opciones'];
    // }else {
    //     $opcion=(int) 0;
    // }
    $opcion = (int) $_REQUEST['opciones'];
    switch ($opcion) {
        case 1: 
            echo "El plan $opcion que es Plan Básico, cuesta $30.000 <br>";
            goto pasar;
        case 2: 
            echo "El plan $opcion que es Plan Premium, cuesta $60.000 <br>";
            goto pasar;
        case 3: 
            echo "El plan $opcion que es Plan Platino, cuesta $80.000 <br>"; 
            goto pasar;
        pasar:
        echo "<br> Los planes incluyen redes sociales y navegación ilimitada";
        break;
        
        default:
            echo "La opción $opcion no pertenece a ningún plan, inténtelo de nuevo";
            break;
    }
    echo '<hr> <a href= "index.html">Volver</a>';
    