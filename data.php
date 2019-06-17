<!-- Ricreare il nostro database dell’esercizio Basket (utilizzando solo funzioni PHP). Questa volta lo creiamo in un file PHP incluso nel file PHP principale che utilizzerà i dati per stamparli nell’html.

Potete inizialmente stamparli come le card uno sotto (o a fianco) all'altro e poi, se avete tempo e voglia, potete aggiungere il click sul codice del giocatore che mostra i dati solo del giocatore selezionato (con jQuery ovviamente) -->

<!-- dobbiamo creare un array -->
<?php

// funzione codice giocatore
function genera_codice(){
  $codice_giocatore='';

  $caratteri =['A','B','C','D','I','E','F','G','H','I','L','M','N','O','P','Q','R','S','T','U','V','Z'];

    while(strlen($codice_giocatore) < 3) {
      $carattere_gen = rand(0, count($caratteri));
      // ciclo per 3 volte concatenando il carattere estratto casualmente
      $codice_giocatore .= $caratteri[$carattere_gen];
    }

    while(strlen($codice_giocatore) < 6){
      $codice_giocatore .= rand(0 , 9);
    }

    return $codice_giocatore;
  }

// funzione genera il giocatore

function stat_player(){
    // richiamo la funzione per generare il codice giocatore
    $codice_giocatore = genera_codice();
    // genero le statistiche giocatore
    $punti_fatti= rand(0, 100);
    $rimbalzi = rand(30, 200);
    $falli = rand(0, 100);

    // mi genero le percentuali
    $perc2= rand(0,1000)/10;
    $perc3= rand(100 - $perc2);

    $giocatore =[
      [
        'id'=>$codice_giocatore,
        'punti fatti'=> $punti_fatti,
        'rimbalzi'=>$rimbalzi,
        'falli'=>$falli,
        'perc. tiri da 2'=>$perc2,
        'perc. tiri da 3'=>$perc3
      ]
    ];
   return $giocatore ;
}


// genero il mio array di giocatori_basket

function genera_giocatore($max_num){
  $db_basket =[];
  for ($i=0; $i < $max_num; $i++) {
     $db_basket[] = stat_player();
  }
  return $db_basket;
}


 ?>
