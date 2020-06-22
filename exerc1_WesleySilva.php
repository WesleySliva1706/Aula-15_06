<?php
    $dat1 = $_GET['dat1'];
    $dat2 = $_GET['dat2'];

    echo 'A diiferença de dias entre as datas '.date('d/m/Y',  strtotime($dat1)).' e '.date('d/m/Y',  strtotime($dat2)).', é de '.(strtotime($dat2)-strtotime($dat1))/(60*60*24).' dias.';