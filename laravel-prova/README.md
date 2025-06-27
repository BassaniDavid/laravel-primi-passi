# laravel-primi-passi

## obiettivo: Iniziare a muovere i primi passi con Laravel

### milestone 1

-   creare un nuovo progetto Laravel 12, utilizzando questo comando:

```
composer create-project --prefer-dist laravel/laravel:^12.0 nome-cartella
```

Al termine dell'installazione, entrare nella cartella del progetto:

```
cd nome cartella
```

Avviare il server con uno di questi due comandi:

```
php artisan serve
```

oppure

```
 php -S localhost:8000 -t public
```

### milestone 2

iniziare a prendere confidenza con le rotte e le views: cancellare la `view welcome.blade.php` e creare una `homepage`.  
Fare quindi sì che la rotta / visualizzi `homepage.blade.php`.

Inizialmente stampare un `"Hello World"`, poi passare dei dati alla view in modo da visualizzarli dinamicamente con Blade.

### Bonus

Creare più di una pagina e visualizzare un header menu con i link di tutte le pagine, utilizzando la funzione route().
