# TODO
Partendo dalla pagina iniziale fornita, implementare quanto segue:

<h3>MILESTONE 1</h3>
Aggiungere alla pagina 3 attività (come badge bootstrap) chiamando l'API seguente: <i>http://www.boredapi.com/api/activity</i>ok

<h3>MILESTONE 2</h3>
All'interno della pagina troverete una form di login, renderla funzionante e inviare il submit a login.php - dove trovate una lista di account fake.
Qui va implementato un controllo per cui: 
<ul>
  <li>Se l'utente esiste viene inizializzata una sessione e l'utente reindirizzato a ulteriore pagina Home</li>
  <li>Se l'utente non esiste verrà stampato un messaggio di errore</li>
</ul>

<h3>MILESTONE 3</h3>
Nella pagina home dovrà essere presente un controllo per capire se l'utente è già loggato, altrimenti verrà reindirizzato alla index.php
Se invece è autenticato allora viene stampato un messaggio di benvenuto con la username dell'utente (es. Benvenuto, Mario!)
