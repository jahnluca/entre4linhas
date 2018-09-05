<?php 
    include 'modelPàtrocinios.php';


    $Patrocinios = new Patrocinios();
 
    $patrocinios->setLink1($_POST['link1']);
    $patrocinios->setImage1("nike.png");

    $patrocinios->setLink2($_POST['link2']);
    $patrocinios->setImage2("adidas.png");

    $patrocinios->setLink3($_POST['link3']);
    $patrocinios->setImage3("hunder.png");

    $patrocinios->setLink4($_POST['link4']);
    $patrocinios->setImage4("mizuno.jpeg");

    $Patrocinios = new Patrocinios();
    $modelo->linkar($patrocinios);

?>
