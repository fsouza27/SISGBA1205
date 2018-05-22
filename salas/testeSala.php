<?php

// check Computador
/*if (isset($_POST['computador'])) {
    var_dump("escolheu 'computador'");
} else {
    var_dump("não escolheu 'computador'");
}

// check Projetor
if (isset($_POST['projetor'])) {
    var_dump("escolheu 'projetor'");
} else {
    var_dump("não escolheu 'projetor'");
}

// check Som
if (isset($_POST['som'])) {
    var_dump("escolheu 'som'");
} else {
    var_dump("não escolheu 'som'");
}

*/
echo "OU";

$_POST['computador'] = ( isset($_POST['computador']) ) ? true : null;
$_POST['projetor']  = ( isset($_POST['projetor']) )  ? true : null;
$_POST['som']  = ( isset($_POST['som']) )  ? true : null;

# Visualizando os dados
var_dump($_POST);



?>
