<?php
//Importação
require_once("automoveis.class.php");

//Nome da classe
class Execucao{
    //Objeto carrop com visibilidade privada
    private $carrop;
    //Objeto carrof com visibilidade privada
    private $carrof;

    public function __construct(){
        //Objeto chamado Carrop que recebe a classe Automoveis()
        $carrop = new automoveis();
        //Passar um valor para o método setTipo
        $carrop->setTipo("<b>Tipo:</b> Porshe <br>");
        //Imprimir o valor do método getTipo
        echo $carrop->getTipo();

        $carrop->setCor("<b>Cor:</b> Cinza <br>");
        echo $carrop->getCor();

        $carrop->setPlaca("<b>Placa:</b> MHZ-4345 <br>");
        echo $carrop->getPlaca();

        $carrop->setNumportas("<b>Número de portas:</b> 2 <br><br>");
        echo $carrop->getNumportas();

        //Objeto chamado Carrof que recebe a classe Automoveis()
        $carrof = new automoveis();

        $carrof->setTipo("<b>Tipo:</b> Ferrari <br>");
        echo $carrof->getTipo();

        $carrof->setCor("<b>Cor:</b> Vermelho <br>");
        echo $carrof->getCor();

        $carrof->setPlaca("<b>Placa:</b> JKL-0001 <br>");
        echo $carrof->getPlaca();

        $carrof->setNumportas("<b>Número de portas:</b> 4");
        echo $carrof->getNumportas();

    }
}new Execucao();

?>