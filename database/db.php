<?php
require_once __DIR__ . '/../models/movie.php';
require_once __DIR__ . '/../models/mainInfo.php';

$arrayFilm = [


    new Movie([new MainInfo('Matrix','The Matrix','Thomas Anderson / Neo (Keanu Reeves) è un programmatore della Metacortex, virtuoso cittadino di giorno, mentre di notte è un pericoloso hacker. A causa dei suoi illeciti, è tenuto sotto osservazione dagli agenti Smith (Hugo Weaving), Brown e Jones, che gli inseriscono una cimice nel corpo per controllarlo.')],'1999','136',['Sci-fi','Azione']),
    new Movie([new MainInfo('Matrix Reloaded','The Matrix Reloaded','Neo, Trinity e Morpheus continuano la loro lotta contro le macchine che controllano l\'umanità in Matrix. Neo scopre di essere il Prescelto e affronta gli Agenti. Nel frattempo, il comandante Lock si prepara per la guerra contro le macchine. Vengono introdotti nuovi personaggi come il Keymaker e il Merovingio. Il film è ricco di azione e effetti speciali, culminando in una battaglia epica tra le macchine e gli umani.')],'2003','138',['Sci-fi','Azione']),
    new Movie([new MainInfo('Matrix Revolutions','The Matrix Revolutions',' la guerra tra gli umani e le macchine raggiunge il culmine. Neo, Trinity e Morpheus guidano l\'ultima resistenza umana contro l\'avanzata delle macchine. Nel frattempo, Neo si avventura nella Matrix per incontrare il Macchinario, l\'entità responsabile del controllo delle macchine. Attraverso una serie di battaglie e rivelazioni, Neo scopre la sua vera missione e il suo destino. Il film culmina in una battaglia epica tra umani e macchine, in cui il destino dell\'umanità e della Matrix stessa è in bilico.')],'2003','129',['Azione']),
    

]

?>