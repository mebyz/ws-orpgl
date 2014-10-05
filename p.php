<?php  

 function moveArrayPos(&$a,$p1,$p2) {  // permute deux éléments d’un array
     list($a[$p1],$a[$p2]) = array($a[$p2],$a[$p1]);
 }
 
 function testMinimalUpperSolution($orig=0,$out=null) {
     $cv=str_split($orig); 			// explode l’input vers un array
     $c = count($cv); 				// nombre de positions du tableau
     for($i=0;$i<=$c;$i++) {			//boucle inverse pour définir la position 1 (pour permutation)
         $shift = $c-$i-1;
         for($j=$shift-1;$j>=0;$j--) {		//boucle inverse pour définir la position 2 (pour permutation)
             $cvt = $cv; 			// on conserve $cv, le tableau d’origine (défini ligne 9)
             moveArrayPos($cvt,$j,$shift); 	// cvt contient maintenant le tableau ou les positions ont été permutées
	     $candidate = (int)implode('',$cvt);
             if ($candidate>$orig) { 
                 // on a un gagnant !
                 if ($out!=null) {
		     fwrite($out,"minimal upper solution using the same digits : ".$candidate."\n");
                 }
		 exit;
             }
         }
     }
     // on a rien trouvé, la solution est donc le nombre entré au départ.
     if ($out!=null) {
         fwrite($out,"minimal upper solution using the same digits : ".$orig." : same as input\n");
     }
 }
 
 function main()
 {
     $stdin = fopen('php://stdin', 'r');
     $stdout = fopen('php://stdout', 'w');

     //Write your code here ...
     $input=(int)trim(fgets($stdin));
     testMinimalUpperSolution($input,$stdout);
 
     fclose($stdout);
     fclose($stdin);
 }
 
 main();
