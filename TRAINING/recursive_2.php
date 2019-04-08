<?php

class Recursive 
{

    private $tab_infos;

    public function __constructor()
    {
        $classe = readline('Entrez le nom de votre classe : \n');
        $name = readline('Entrez votre nom : \n');
        $this->tab_infos = [
            "Classe" => $classe,
            "Eleve" => [
                "Nom" => $name,
                "Notes" => [
                    "math" => 0,
                    "programmation" => 0
                ]
            ]
        ];
    }

    public function addNotes()
    {
        $math = readline('Entrez votre note en math : \n');
        $prog = readline('Entrez votre note en programmation : \n');

        $this->tab_infos['Eleve']['Notes']['math'] = $math;
        $this->tab_infos['Eleve']['Notes']['programmation'] = $math;
    }

    public function getTabInfos()
    {
        return $this->tab_infos;
    }

    public infos($tab)
    {
        foreach($tab as $key => $value){
            if(gettype($tab[$key] == "array")){
                self::showInfos($tab[$key]);
            } else {
                echo $key." : \n";
                echo $value;
            }
        }
    }

}

$student = new Recursive();
$student->addNotes();
$tab = $student->getTabInfos();
$student->showInfos($tab);