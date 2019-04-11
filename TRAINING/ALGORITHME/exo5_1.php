<?php
$choice = 0;
while($choice < 1 || $choice > 3){
    $choice = readline("Choisissez un nombre : \n");
}
echo "Bravo, vous avez trouvé un nombre valide !";