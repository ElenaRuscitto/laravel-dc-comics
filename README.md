nome repo: laravel-dc-comics
## DESCRIZIONE
Questo progetto è una libreria online di fumetti creata utilizzando Laravel. Gli utenti possono visualizzare un elenco di fumetti, vedere i dettagli di ciascun fumetto, aggiungere nuovi fumetti, modificarli ed eliminarli. L'interfaccia è semplice e intuitiva, permettendo una facile navigazione tra i fumetti disponibili.

## FUNZIONALITA'
- Elenco Fumetti: Visualizza un elenco di tutti i fumetti disponibili con titolo, descrizione, prezzo e immagine di copertina.
- Dettagli Fumetto: Clicca su "Dettaglio" per vedere le informazioni dettagliate su un fumetto.
- Aggiungi Fumetto: Aggiungi un nuovo fumetto alla libreria tramite il modulo di inserimento.
- Modifica Fumetto: Modifica le informazioni di un fumetto esistente.
- Elimina Fumetto: Rimuovi un fumetto dalla libreria.

## ATTIVITA'
1. creare la migration
2. creare il model
3. popolare la tabella con il seeder (dall’array presente in config)
4. creare il resource controller (php artisan make:controller --resource NomeController)
5. creare le rotte resource (Route::resource('nome_tabella', MioResourceController::class);)
6. relativamente alle rotte GET creare  le view in una cartella con il nome della tabella della CRUD e con il nome del metodo del resource controller relativo

Per la navigazione
- la rotta home è fuori dalla CRUD (se si s vuole si può stampatre il numero di card presenti)
- elenco prodotti   (GET index)
- dettaglio prodotto (GET show)
- form nuovo prodotto (GET create) (ricordarsi il token @csrf)
- rotta per salvare i dati provenienti dal form create (POST store)
- una volta salvati i dati reindirizzare alla show (return redirect()->route('mia_tabella.show', $new_elemento);)
