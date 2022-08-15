<?php

function writeMission($myText){

    for ($i=0; $i < strlen($myText); $i++) {

        usleep(30000);
        Printf($myText[$i]);
    
    }
   
}


function MonTrie($random_words){
    for ($i=0; $i < Count($random_words); $i++) {
    
        $o = strlen($random_words[$i]);
        ${'var' . $o}[] = $random_words[$i]; // ici, je crée une array nommée var avec le nombre de caractère du mot situé en i. 
        asort(${'var' . $o});
    }
    $random_words =array();
    for($c=1; $c < 30 ; $c++){ // ici, 30 est une limite au mot le plus long que l'on puisse trié. Peut-être réhaussé.
    
        if (${'var' . $c} ?? null){
          
            $random_words = array_merge($random_words, ${'var' . $c});
        }
    }
    
    print_r($random_words); // Mon array trié par nb de lettre et par ordre alphabétique. 
    }

$messyArray = [
    "Marguerite" => "Orange",
    "Kiwi",
    7 => "Pomme",
    [
        "Prune",
        "Cerise" => "Cerise"
    ]
];

//À partir de messyArray afficher "Kiwi"
writeMission("Question: À partir de messyArray afficher 'Kiwi'");
echo("\nResult   -> ");
printf($messyArray[0]);
echo("\n\n");


//À partir de messyArray afficher "Cerise"
writeMission("Question: À partir de messyArray afficher 'Cerise'");
echo("\nResult   -> ");
printf($messyArray[8]["Cerise"]);
echo("\n\n");

//À partir de messyArray supprimer "Prune"
writeMission("Question: À partir de messyArray supprimer 'Prune'");
echo("\nResult   -> ");
unset($messyArray[8][0]);
print_r($messyArray);
echo("\n\n");

$random_words = ["ape", "apple", "zoo", "pie", "elephant", "banana", "picnic", "eye"];
//Créer un script qui ordonne ce tableau du mot le plus court au mot le plus long.
//Bonus: Si plusieurs mots ont la même longueur trier les par ordre alphabétique


writeMission("Question: Créer un script qui ordonne ce tableau du mot le plus court au mot le plus long.");
echo("\n");
writeMission("Bonus: Si plusieurs mots ont la même longueur trier les par ordre alphabétique");
echo("\nResult   -> ");
MonTrie($random_words);

?>