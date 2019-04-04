<?php 

class Student 
{

    private $name;
    private $age;
    private $city;
    private $classe;
    private $tab_student;
    private $notes = [];

    public function __construct()
    {
        
        // readline
        echo "Informations vous concernant : \n";
        $this->name = readline("Entrez votre nom : " );
        $this->age = readline("Renseignez votre age : ");
        $this->city = readline("Entrez le nom de votre ville : ");
        $this->classe = readline("Entrez le nom de votre classe : ");
        $this->tab_student = [
            "name" => $this->name,
            "age" => $this->age,
            "city" => $this->city,
            "class" => $this->classe,
            "notes" => [
                "math" => "",
                "programmation" => [
                    "php" => "",
                    "js" => "",
                    "react" => "",
                    "ruby" => [
                        "rails" => "",
                        "thp" => ""
                    ]
                ],
                "project management" => ""
            ]
        ];
    } 

    public function setNotes()
    {
        echo "\n";
        echo "Saisi de vos notes : \n";
        $this->tab_student['notes']['math'] = readline("Note en math : ");
        $this->tab_student['notes']['programmation']['php'] = readline("Note en php : ");
        $this->tab_student['notes']['programmation']['js'] = readline("Note en js : ");
        $this->tab_student['notes']['programmation']['react'] = readline("Note en react : ");
        $this->tab_student['notes']['programmation']['ruby']['rails'] = readline("Note en rails : ");
        $this->tab_student['notes']['programmation']['ruby']['thp'] = readline("Note en thp : ");
        $this->tab_student['notes']['project management'] = readline("Note en project management : ");
    }

    public function getTabStudent()
    {
        return $this->tab_student;
    }

    public function recursive($tab)
    {
        foreach($tab as $key => $value){
            if(gettype($tab[$key]) == "array"){
                self::recursive($tab[$key]);
            } else {
                echo strtoupper($key)." : ";
                echo $value."\n";
            }
        }
    }

    public function setTabMoyenne($tab_student)
    {
        foreach($tab_student['notes'] as $key => $value){
            if(gettype($tab_student['notes'][$key]) == "array"){
                foreach($tab_student['notes'][$key] as $key => $value){
                    if(gettype($value) != "array" ){
                        array_push($this->notes, $value);
                    }
                    if(gettype($value) =="array"){
                        foreach($value as $k => $v){
                            array_push($this->notes, $v);
                        }
                    }
                }
            } else {
                array_push($this->notes, $value);
            }
        }
    }

    public function getNotes()
    {
        return $this->notes;
    }

    public function calculateMoyenne()
    {
        $moyenne = array_sum($this->notes)/count($this->notes);
        $moyenne = round( $moyenne, 2, PHP_ROUND_HALF_UP);
        return $moyenne;
    }

    public function getMoyenne($moyenne)
    {
        echo "Votre moyenne générale est de ".$moyenne."/20";
    }

}

$student = new Student();
$student->setNotes();
$tab_student = $student->getTabStudent();
echo "\n";
echo "Données du tableau : \n";
$student->recursive($tab_student);
echo "\n";
$student->setTabMoyenne($tab_student);
$moyenne = $student->calculateMoyenne();
$student->getMoyenne($moyenne);

