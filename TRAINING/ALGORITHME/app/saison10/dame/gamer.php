<?php

// Gamer class creation
class Gamer 
{
    // Properties
    private $tab_player_1;
    private $tab_player_2;
    private $name_player_1;
    private $name_player_2;
    private $win_player_1;
    private $win_player_2;
    private $loose_player_1;
    private $loose_player_2;
    
    // Constructor
    public function __construct($name_player_1,$name_player_2)
    {
        $this->name_player_1 = $name_player_1;
        $this->name_player_2 = $name_player_2;
    }

    // Function which allow to show the name of player_1
    public function getNamePlayer1()
    {
        return $this->name_player_1;
    }

    // Function which allow to show the name of player_1
    public function getNamePlayer2()
    {
        return $this->name_player_2;
    }

    // Function which initialize score of player_1
    public function initializeScorePlayer1()
    {
        $this->win_player_1 = 0;
        $this->loose_player_1 = 0;
    }

    // Function which initialize tab of player_1
    public function initializeTabPlayer1()
    {
        $this->tab_player_1 = [
            "name" => $this->name_player_1,
            "pion" => "⚫",
            "score" => [
                "win" => $this->win_player_1,
                "loose" => $this->loose_player_1
            ]
        ];

        return $this->tab_player_1;
    }

    // Function which initialize score of player_2
    public function initializeScorePlayer2()
    {
        $this->win_player_2 = 0;
        $this->loose_player_2 = 0;
    }

    // Function which initialize tab of player_2
    public function initializeTabPlayer2()
    {
        $this->tab_player_2 = [
            "name" => $this->name_player_2,
            "pion" => "⚪",
            "score" => [
                "win" => $this->win_player_2,
                "loose" => $this->loose_player_2
            ]
        ];

        return $this->tab_player_2;
    }

}

// Instaciation of Gamer Class
$gamer = new Gamer($_POST['name_player_1'],$_POST['name_player_2']);

// Call of method which initialize tab of players
$player_1 = $gamer->initializeTabPlayer1();
$player_2 = $gamer->initializeTabPlayer2();
