<?php
    include_once('Aluno.php');

    $a1 = new Aluno($_GET['na1'], $_GET['a1b1'], $_GET['a1b2'], $_GET['a1b3'], $_GET['a1b4']);
    $a2 = new Aluno($_GET['na2'], $_GET['a2b1'], $_GET['a2b2'], $_GET['a2b3'], $_GET['a2b4']);

    echo $a1->getNome() . " tem a media de " . $a1->getMedia() . ", e tem a menção de , " . $a1->mencao();
    echo '<br />';
    echo $a2->getNome() . " tem a media de " . $a2->getMedia() . ", e tem a menção de , " . $a2->mencao();

?>
