<?php 
/*
Creare una variabile con un paragrafo di testo.
Recuperare dalla query string un parametro badword che contiene una parola definita dall'utente
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *.
*/

$badword = $_GET['badword'];

$msg = 'Sei davvero una persona maleducata, hai sempre il solito comportamento del cavolo!';

?>

<p><?php echo str_replace($badword, '***', $msg) ?></p>
<p>Il paragrafo è lungo <?php echo strlen($msg)?> caratteri</p>