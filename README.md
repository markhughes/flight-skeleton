# Flight Skeleton
This skeleton provides a quick start for the development of an application with the [Flight](http://flightphp.com) PHP microframework. The 
goal here is to get going as fast as possible.

It also adds support for Sass, Twig, and even TypeScript!

## Downloading the skeleton
First, check that you have installed and configured a web server (such as Nginx) with PHP 8 or higher. 

You can either use this [template on github](https://github.com/markhughes/flight-skeleton/generate), or use git to clone this repo:

`$ git clone https://github.com/markhughes/flight-skeleton.git my-app-name`

## Creating the application
If you want to define global constants or other settings, you can use the `config.php` in `app/config/`.

### Routing
To define your routes, use the file `app/config/routes.php`:

```php
<?php

Flight::route("/", ["\Acme\Demo\Controller\Demo", "index"]);
```

### Controllers
Place your code in the `src` folder. All classes from here are autoloaded by their namespace. For an example, have a look in the demo code in `src/Acme/demo/Controller/Demo.php`. As you can see, the controller uses the namespace `Acme\Demo\Controller`.

### Templates
Twig templates are loaded by default from `app/resouces/views/`. You can change this by editing the path in `app/config/config.php`.

### Logging
Your application logs into `var/logs`. Should you want to, you can add more loggers in `app/config/logger_handlers.php`, or completely reconfigure it in
`app/logger.php`.

### Webpack
Compile your scripts using `npm run webpack` which will throw it all together in `public/dist/main.js` - check the webpack docs on how to use it more effectively. Your entrypoint is located in `app/resources/scripts/index.ts` if you don't want to use TypeScript just rename index.ts to index.js.

# License
The skeleton is licensed under the [MIT](https://opensource.org/licenses/MIT) license.
