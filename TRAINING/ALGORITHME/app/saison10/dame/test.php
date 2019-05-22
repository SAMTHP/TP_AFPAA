<?php
// ETAPE 1 : RESET DE LA CASE PRECEDENTE
                $pion = $tab_board[$this->x][$this->y];

                if($tab_board[$this->x-1][$this->y+1] == $pion){
                    echo "ERROR <br>";
                } elseif($tab_board[$this->x-1][$this->y+1] != $pion && $tab_board[$this->x-1][$this->y+1] == ("⚪" || "⚫") ){
                    if($tab_board[$this->x-2][$this->y+2] == " "){
                        $tab_board[$this->x][$this->y] = " " ;
                        $tab_board[$this->x-1][$this->y+1] = " ";
                        $tab_board[$this->x-2][$this->y+2] = $pion;
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