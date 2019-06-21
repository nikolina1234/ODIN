Da bi sve radilo kako treba potrebno je malo izmeniti konfiguraciju wampa. Sledece stvari je potrebno podesiti:
wamp\bin\php\php7.3.5\php.ini U fajlu pise ;extension=mbstring, potrebno je obrisati ;. (ako ovo ne radi korisiti nize verzije phpa)
wamp\bin\apache\apache2.4.39\bin\phpForApache.ini podesiti memory_limit na 2048M.
