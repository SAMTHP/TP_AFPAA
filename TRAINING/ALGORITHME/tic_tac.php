<?php
/**
 * Created by PhpStorm.
 * User: Créa
 * Date: 08/03/2019
 * Time: 18:35
 */

define ('BR',"<br>");
class Board
{
    private $tab;

    public function __construct()
    {
        $this->tab = [];
    }
    public function setNumber($int)
    {
        $number = $int;
        return $number;
    }
    public function createTab($number)
    {
        for($i=0;$i < $number; $i++){
            $this->tab[$i] = array ();
            for ($j=0; $j <$number; $j++){
                array_push ($this->tab[$i], ["value" => " "]);
            }
        } return $this->tab;
    }
    public function boardStart($tab)
    {
        $a1 = $tab[0][0]["value"];
        $a2 = $tab[1][0]["value"];
        $a3 = $tab[2][0]["value"];
        $b1 = $tab[0][1]["value"];
        $b2 = $tab[1][1]["value"];
        $b3 = $tab[2][1]["value"];
        $c1 = $tab[0][2]["value"];
        $c2 = $tab[1][2]["value"];
        $c3 = $tab[2][2]["value"];
        echo "     1   2   3"."\n";
        echo "   -------------"."\n";
        echo " A | $a1 | $a2 | $a3 |"."\n";
        echo "   -------------"."\n";
        echo " B | $b1 | $b2 | $b3 |"."\n";
        echo "   -------------"."\n";
        echo " C | $c1 | $c2 | $c3 |"."\n";
        echo "   -------------"."\n";
    }
    public function choice($choice, $p)
    {
        if($choice == 'a1' ){
            $this->tab[0][0]["value"] = $p;
        } elseif($choice == 'a2'){
            $this->tab[1][0]["value"] = $p;
        } elseif($choice == 'a3'){
            $this->tab[2][0]["value"] = $p;
        } elseif($choice == 'b1'){
            $this->tab[0][1]["value"] = $p;
        } elseif($choice == 'b2'){
            $this->tab[1][1]["value"] = $p;
        } elseif($choice == 'b3'){
            $this->tab[2][1]["value"] = $p;
        } elseif($choice == 'c1'){
            $this->tab[0][2]["value"] = $p;
        } elseif($choice == 'c2'){
            $this->tab[1][2]["value"] = $p;
        } elseif($choice == 'c3'){
            $this->tab[2][2]["value"] = $p;
        }
        /*switch($choice){
        case 'A1' or 'a1' :
            $this->tab[0][0]["value"] = $p;
        case 'A2' or 'a2' :
            $this->tab[1][0]["value"] = $p;
            break;
        case 'A3' or 'a3' :
            $this->tab[2][0]["value"] = $p;
            break;
        case 'B1' or 'b1' :
            $this->tab[0][1]["value"] = $p;
            break;
        case 'B2' or 'b2' :
            $this->tab[1][1]["value"] = $p;
            break;
        case 'B3' or 'b3' :
            $this->tab[2][1]["value"] = $p;
            break;
        case 'C1' or 'c1' :
        $this->tab[0][2]["value"] = $p;
            break;
        case 'C2' or 'c2' :
            $this->tab[1][2]["value"] = $p;
            break;
        case 'C3' or 'c3' :
            $this->tab[2][2]["value"] = $p;
            break;
        }*/
    }
    public function getBoard()
    {
        $tab = $this->tab;
        $a1 = $tab[0][0]["value"];
        $a2 = $tab[1][0]["value"];
        $a3 = $tab[2][0]["value"];
        $b1 = $tab[0][1]["value"];
        $b2 = $tab[1][1]["value"];
        $b3 = $tab[2][1]["value"];
        $c1 = $tab[0][2]["value"];
        $c2 = $tab[1][2]["value"];
        $c3 = $tab[2][2]["value"];
        echo "     1   2   3"."\n";
        echo "   -------------"."\n";
        echo " A | $a1 | $a2 | $a3 |"."\n";
        echo "   -------------"."\n";
        echo " B | $b1 | $b2 | $b3 |"."\n";
        echo "   -------------"."\n";
        echo " C | $c1 | $c2 | $c3 |"."\n";
        echo "   -------------"."\n";
    }
}
$board = new Board();
$number = $board->setNumber(6);
$tab = $board->createTab($number);
$board->boardStart($tab);
$i = 0;
while ($i < $number * $number){
    $choice1 = strtolower((string)readline("Joueur 1 : Veuillez choisir votre case : "));
    $board->choice($choice1,"X");
    $board->getBoard();
    $choice2 = strtolower((string)readline("Joueur 2 : Veuillez choisir votre case : "));
    $board->choice($choice2,"0");
    $board->getBoard();
    $i++;
}
