<?php

session_start();

require "gamer.php";

// Game class creation
class Game
{
    // Properties
    private $tab_board;
    private $flag;
    private $x;
    private $y;
    private $msg;

    // Constructor
    public function __construct()
    {
        $this->tab_board = [
            "1" => ["1" => " ","2" => "⚪","3" => " ","4" => "⚪","5" => " ","6" => " ","7" => " ","8" => "⚫","9" => " ","10" => "⚫"],
            "2" => ["1" => "⚪","2" => " ","3" => "⚪","4" => " ","5" => " ","6" => " ","7" => "⚫","8" => " ","9" => "⚫","10" => " "],
            "3" => ["1" => " ","2" => "⚪","3" => " ","4" => "⚪","5" => " ","6" => " ","7" => " ","8" => "⚫","9" => " ","10" => "⚫"],
            "4" => ["1" => "⚪","2" => " ","3" => "⚪","4" => " ","5" => " ","6" => " ","7" => "⚫","8" => " ","9" => "⚫","10" => " "],
            "5" => ["1" => " ","2" => "⚪","3" => " ","4" => "⚪","5" => " ","6" => " ","7" => " ","8" => "⚫","9" => " ","10" => "⚫"],
            "6" => ["1" => "⚪","2" => " ","3" => "⚪","4" => " ","5" => " ","6" => " ","7" => "⚫","8" => " ","9" => "⚫","10" => " "],
            "7" => ["1" => " ","2" => "⚪","3" => " ","4" => "⚪","5" => " ","6" => " ","7" => " ","8" => "⚫","9" => " ","10" => "⚫"],
            "8" => ["1" => "⚪","2" => " ","3" => "⚪","4" => " ","5" => " ","6" => " ","7" => "⚫","8" => " ","9" => "⚫","10" => " "],
            "9" => ["1" => " ","2" => "⚪","3" => " ","4" => "⚪","5" => " ","6" => " ","7" => " ","8" => "⚫","9" => " ","10" => "⚫"],
            "10" => ["1" => "⚪","2" => " ","3" => "⚪","4" => " ","5" => " ","6" => " ","7" => "⚫","8" => " ","9" => "⚫","10" => " "]
        ];

        $this->flag = false;
        $this->msg = "";
    }

    // Function which recovers the choice of player_1
    public function choicePlayer1($northing, $easting)
    {

        // Declaration and initialisation of variable which recovers northing
        $this->x = $northing;
        
        // Declaration and initialisation of variable which recovers easting
        $this->y = $easting;
    }

    // Function which recovers the choice of player_2
    public function choicePlayer2($northing, $easting)
    {

        // Declaration and initialisation of variable which recovers northing
        $this->x = $northing;

        // Declaration and initialisation of variable which recovers easting
        $this->y = $easting;

    }

    // Function which manage movements
    public function movements(&$tab_board,$left_top = null,$right_top = null,$left_bottom = null,$right_bottom = null)
    {

        // Declaration and intialisation of flag which will manage the errors
        $flag = false;

        /***  Board control ***/

        // ETAPE 0 : Test if left-top button is active
        if(isset($_POST['left-top'])){
            // TEST SI LA CASE EST VALIDE
            if(isset($tab_board[$this->x-1][$this->y-1])){
                // ETAPE 1 : RESET DE LA CASE PRECEDENTE
                $pion = $tab_board[$this->x][$this->y];
                
                if($tab_board[$this->x-1][$this->y-1] == $pion){
                    echo "ERROR <br>";
                } elseif($tab_board[$this->x-1][$this->y-1] != $pion && $tab_board[$this->x-1][$this->y-1] == ("⚪" || "⚫") ){
                    if($tab_board[$this->x-2][$this->y-2] == " "){
                        $tab_board[$this->x][$this->y] = " " ;
                        $tab_board[$this->x-1][$this->y-1] = " ";
                        $tab_board[$this->x-2][$this->y-2] = $pion;
                    }
                } else {
                    $tab_board[$this->x][$this->y] = " " ;
                    echo "Pion : ".$pion."<br>";
                    // ETAPE 2 : MODIFICATIONS DES ABSCISSES ET DES ORDONNES
                    $this->x -= 1;
                    $this->y -= 1;

                    // ETAPE 3 : DEPLACEMENT SUR LA CASE VOULUE
                    $tab_board[$this->x][$this->y] = $pion ;
                    echo "Case désirée : ".$tab_board[$this->x][$this->y]."<br>";
                    // ETAPE 4 : PASSAGE DE L'ERREUR A FAUX
                    $flag = false;
                }
            } else {
                // AFFICHAGE DE L'ERREUR
                $flag = true;
            }
        }elseif(isset($_POST['right-top'])){ // ETAPE 0 : TEST SI LE BOUTON LEFT-TOP A ETE ACTIVE
            // TEST SI LA CASE EST VALIDE
            if(isset($tab_board[$this->x+1][$this->y-1])){
                // ETAPE 1 : RESET DE LA CASE PRECEDENTE
                $pion = $tab_board[$this->x][$this->y];
                
                if($tab_board[$this->x+1][$this->y-1] == $pion){
                    echo "ERROR <br>";
                } elseif($tab_board[$this->x+1][$this->y-1] != $pion && $tab_board[$this->x+1][$this->y-1] == ("⚪" || "⚫") ){
                    if($tab_board[$this->x+2][$this->y-2] == " "){
                        $tab_board[$this->x][$this->y] = " " ;
                        $tab_board[$this->x+1][$this->y-1] = " ";
                        $tab_board[$this->x+2][$this->y-2] = $pion;
                    }
                } else {
                    $tab_board[$this->x][$this->y] = " " ;
                    echo "Pion : ".$pion."<br>";
                    // ETAPE 2 : MODIFICATIONS DES ABSCISSES ET DES ORDONNES
                    $this->x += 1;
                    $this->y -= 1;

                    // ETAPE 3 : DEPLACEMENT SUR LA CASE VOULUE
                    $tab_board[$this->x][$this->y] = $pion ;
                    echo "Case désirée : ".$tab_board[$this->x][$this->y]."<br>";
                    // ETAPE 4 : PASSAGE DE L'ERREUR A FAUX
                    $flag = false;
                }
            } else {
                // AFFICHAGE DE L'ERREUR
                $flag = true;
            }
        }elseif(isset($_POST['left-bottom'])){ // ETAPE 0 : TEST SI LE BOUTON LEFT-TOP A ETE ACTIVE
            // TEST SI LA CASE EST VALIDE
            echo "LEFT-BOTTOM <br>";
            if(isset($tab_board[$this->x-1][$this->y+1])){
                // ETAPE 1 : RESET DE LA CASE PRECEDENTE
                $pion = $tab_board[$this->x][$this->y];
                echo "test etape1 <br>";
                if($tab_board[$this->x-1][$this->y+1] == $pion){
                    echo "ERROR <br>";
                    $flag = true;
                } elseif($tab_board[$this->x-1][$this->y+1] == "⚪" || $tab_board[$this->x-1][$this->y+1] == "⚫" ){
                    if($tab_board[$this->x-1][$this->y+1] != $pion && $tab_board[$this->x-2][$this->y+2] == " "){
                        echo "eating : ".$tab_board[$this->x-1][$this->y+1] ."<br>";
                        $tab_board[$this->x][$this->y] = " " ;
                        $tab_board[$this->x-1][$this->y+1] = " ";
                        $tab_board[$this->x-2][$this->y+2] = $pion;
                    } elseif(!isset($tab_board[$this->x-2][$this->y+2])){
                        // AFFICHAGE DE L'ERREUR
                        $flag = true;
                    }
                } else {
                    $tab_board[$this->x][$this->y] = " " ;
                    echo "Pion : ".$pion."<br>";
                    // ETAPE 2 : MODIFICATIONS DES ABSCISSES ET DES ORDONNES
                    $this->x -= 1;
                    $this->y += 1;

                    // ETAPE 3 : DEPLACEMENT SUR LA CASE VOULUE
                    $tab_board[$this->x][$this->y] = $pion ;
                    echo "Case désirée : ".$tab_board[$this->x][$this->y]."<br>";
                    // ETAPE 4 : PASSAGE DE L'ERREUR A FAUX
                    $flag = false;
                }
            } else {
                // AFFICHAGE DE L'ERREUR
                $flag = true;
            }
        }elseif(isset($_POST['right-bottom'])){ // ETAPE 0 : TEST SI LE BOUTON LEFT-TOP A ETE ACTIVE
            // TEST SI LA CASE EST VALIDE
            echo "RIGHT-BOTTOM <br>";
            if(isset($tab_board[$this->x+1][$this->y+1])){
                // ETAPE 1 : RESET DE LA CASE PRECEDENTE
                $pion = $tab_board[$this->x][$this->y];
                
                if($tab_board[$this->x+1][$this->y+1] == $pion){
                    echo "ERROR <br>";
                    echo $pion;
                    echo "test ok";
                    $flag = true;
                } elseif( $tab_board[$this->x+1][$this->y+1] ==  "⚪" || $tab_board[$this->x+1][$this->y+1] == "⚫" ){
                    if($tab_board[$this->x+1][$this->y+1] != $pion && $tab_board[$this->x+2][$this->y+2] == " " ){
                        $tab_board[$this->x][$this->y] = " " ;
                        $tab_board[$this->x+1][$this->y+1] = " ";
                        $tab_board[$this->x+2][$this->y+2] = $pion;
                        echo "okkkkkk";
                    } elseif(!isset($tab_board[$this->x+2][$this->y+2])){
                        // AFFICHAGE DE L'ERREUR
                        $flag = true;
                    }
                } else {
                    $tab_board[$this->x][$this->y] = " " ;
                    echo "Pion : ".$pion."<br>";
                    // ETAPE 2 : MODIFICATIONS DES ABSCISSES ET DES ORDONNES
                    $this->x += 1;
                    $this->y += 1;

                    // ETAPE 3 : DEPLACEMENT SUR LA CASE VOULUE
                    $tab_board[$this->x][$this->y] = $pion ;
                    echo "Case désirée : ".$tab_board[$this->x][$this->y]."<br>";
                    // ETAPE 4 : PASSAGE DE L'ERREUR A FAUX
                    $flag = false;
                }
            } else {
                // AFFICHAGE DE L'ERREUR
                $flag = true;
            }
        }

        /***  GESTION DES ERREURS  ***/

        // TEST SI LE DRAPEAU DE L'ERREUR ACTIF
        if($flag){
            // AFFICHAGE ET AFFECTATION DE LA VARIABLE POUR LE MESSAGE D'ERREUR
            $this->msg = "Vous ne pouvez pas sortir du damier ! 🤣🤣🤣";
        }

    }

    // 
    public function getErrorMsg()
    {
        return $this->msg;
    }

    // Function which allow to show tab_board
    public function getTabBoard()
    {
        return $this->tab_board;
    }

    // 
    public function getXposition()
    {
        return $this->x;
    }

    public function getYposition()
    {
        return $this->y;
    }

    // Function which analysis the tab_board in order to check if the quantity of pions
    public function boardAnalysis ($tab_board)
    {   
        // Declaration and initialization of flags which will control who have win the game
        $flag_player_1 = false;
        $flag_player_2 = false;

        // Declaration and initialization of variables which will count the pions
        $count_white = 0;
        $count_black = 0;

        foreach($tab_board as $x){
            foreach($x as $y => $value){
                if($value == "⚪"){
                    $count_white++;
                } elseif($value == "⚫"){
                    $count_black++;
                }
            }
        }

        echo $count_black."<br>";
        echo $count_white."<br>";

        if($count_white == 0){
            $flag_player_1 = true;
        }elseif($count_black == 0){
            $flag_player_2 = true;
        }

        if($flag_player_1){
            return $flag_player_1;
        } elseif($flag_player_2){
            return $flag_player_2;
        }

    }
}

// Instanciation of Game class
$game = new Game();

// Call to method which return tab_board;
if(isset($_SESSION['tab_board'])){
    $_SESSION['tab_board'] = $_SESSION['tab_board'];
    echo "Tableau en session récupéré <br>";
    //var_dump($_SESSION['tab_board']);
} else{
    $_SESSION['tab_board'] = $game->getTabBoard();
    echo "Tableau session initialisé <br>";
}

/********* PLAYER 1 **********/
 
$player_go = $player_1['name'];

if(isset($_POST['x']) && isset($_POST['y'])){
    $game->choicePlayer1($_POST['x'],$_POST['y']);
}

if(isset($_POST['left-top']) || isset($_POST['right-top']) || isset($_POST['letf-bottom']) || isset($_POST['right-bottom'])){

    if(isset($_POST['left-top'])){
        $game->movements($_SESSION['tab_board'],$left_top = true,$right_top = null,$left_bottom = null,$right_bottom = null);
    } elseif(isset($_POST['right-top'])){
        $game->movements($_SESSION['tab_board'],$left_top = null,$right_top = true,$left_bottom = null,$right_bottom = null);
    } elseif(isset($_POST['letf-bottom'])){
        $game->movements($_SESSION['tab_board'],$left_top = null,$right_top = null,$left_bottom = true,$right_bottom = null);
    } elseif(isset($_POST['right-bottom'])){
        $game->movements($_SESSION['tab_board'],$left_top = null,$right_top = null,$left_bottom = null,$right_bottom = true);
    }
    echo "C'est bien le joueur 1 qui a joué <br>";

    // Error msg
    $msg = $game->getErrorMsg();

    // Board analysis
    $analysis = $game->boardAnalysis($_SESSION['tab_board']);
}

$x = $game->getXposition();
$y = $game->getYposition();

/********* PLAYER 2 **********/
/*
$player_go = $player_2['name'];

if(isset($_POST['x']) && isset($_POST['y'])){
    $game->choicePlayer2($_POST['x'],$_POST['y']);
}

if(isset($_POST['left-top']) || isset($_POST['right-top']) || isset($_POST['letf-bottom']) || isset($_POST['right-bottom'])){

    if(isset($_POST['left-top'])){
        $game->movements($_SESSION['tab_board'],$left_top = true,$right_top = null,$left_bottom = null,$right_bottom = null);
    } elseif(isset($_POST['right-top'])){
        $game->movements($_SESSION['tab_board'],$left_top = null,$right_top = true,$left_bottom = null,$right_bottom = null);
    } elseif(isset($_POST['letf-bottom'])){
        $game->movements($_SESSION['tab_board'],$left_top = null,$right_top = null,$left_bottom = true,$right_bottom = null);
    } elseif(isset($_POST['right-bottom'])){
        $game->movements($_SESSION['tab_board'],$left_top = null,$right_top = null,$left_bottom = null,$right_bottom = true);
    }
    echo "C'est bien le joueur 2 qui a joué <br>";

    // Error msg
    $msg = $game->getErrorMsg();

    // Board analysis
    $analysis = $game->boardAnalysis();

    $x = $game->getXposition();
    $y = $game->getYposition();
}
*/

//session_destroy();