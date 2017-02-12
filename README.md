# wp-sentry-client
Un plugin WordPress per interfacciarsi con le api di Sentry (sentry.io).

Il plugin sfrutta l'sdk php e javascript di sentry, basta attivarlo e nel menu impostazioni comparirà la voce "Wp Sentry Client" dove si dovrà impostare il dsn privato e/o pubblico di sentry, rispettivamente per attivare la notifica degli errori php e javascript.

## Cos'è Sentry?
Sentry è probabilmente il miglior servizio di notifica degli errori attualmente presente sul mercato, lo utilizzano aziende del calibro di Dropbox, Airbnb, Stripe, Uber ecc ecc, una volta impostate le chiavi dsn riceverai una notifica tutte le volte che un'utente del tuo sito riscontrerà un errore, ma la vera utilità sta nelle informazioni presenti in questa notifica potrai conoscere il browser utilizzato dall'utente e tante altre informazioni utili ad eseguire il debug, il motto di sentry è: Seriously though, stop hoping your users will report bugs.

Sentry è gratuito fino a 10.000 notifiche al mese, ma esiste anche la versione self hosted, open source.

sentry.io
