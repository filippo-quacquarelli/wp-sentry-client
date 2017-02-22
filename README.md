# wp-sentry-client
Un plugin WordPress per interfacciarsi con le api di Sentry (sentry.io).

Il plugin sfrutta l'sdk php e javascript di sentry, basta attivarlo e nel menu impostazioni comparirà la voce "Wp Sentry Client" dove si dovrà impostare il dsn privato e/o pubblico di sentry, rispettivamente per attivare la notifica degli errori php e javascript.

## Cos'è Sentry?
Sentry è un servizio di notifica degli errori real-time, lo utilizzano aziende del calibro di Dropbox, Airbnb, Stripe, Uber ecc ecc, una volta creato l'account sul servizio sentry.io ed impostate le chiavi dsn riceverai una notifica tutte le volte che un'utente del tuo sito riscontrerà un errore, se vuoi saperne di più: https://www.linkedin.com/pulse/notifica-degli-errori-real-time-con-sentry-filippo-quacquarelli

La vera utilità sta nelle informazioni presenti in questa notifica, potrai conoscere il browser utilizzato dall'utente e tante altre informazioni utili ad eseguire il debug, il motto di sentry è: Seriously though, stop hoping your users will report bugs.

Sentry è gratuito fino a 10.000 notifiche al mese, ma esiste anche la versione self hosted, open source.

sentry.io
