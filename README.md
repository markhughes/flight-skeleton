# Flight Skeleton

This skeleton provides a quick start for the development of an application with the [Flight](http://flightphp.com) PHP microframework. The
goal here is to get going as fast as possible.

It also adds support for Runway (CLI), Sass, Twig or Latte, and even TypeScript (it also includes Volta for npm version managing)!

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

Flight::route("/", ["\Acme\Demo\Controllers\Demo", "index"]);
```

An example API router has been created in `src/Acme/Demo/Controllers/API.php` where `Flight::json` is used to send the response back.

### Controllers

Place your code in the `src` folder. All classes from here are autoloaded by their namespace. For an example, have a look in the demo code in `src/Acme/demo/Controllers/Demo.php`. As you can see, the controller uses the namespace `Acme\Demo\Controllers`.

### Templates

Twig and Latte templates are loaded by default from `app/resouces/views/`. You can change this by editing the path set in `FLIGHT_SET_VARS` from the `app/config/config.php` file.

You should call `Flight::render("template name", [ ... optional contenxt ... ])` directly, and .twig or .latte is added for you.

You can easily change the template engine in `app/config/config.php` and change `TEMPLATE_ENGINE` to either `twig` or `latte`

### Logging

Your application logs into `var/logs`. Should you want to, you can add more loggers in `app/config/logger_handlers.php`, or completely reconfigure it in
`app/logger.php`.

You can then at any time log messages, for example:

```php
$logger->info('hello world!');
```

### Webpack

Compile your scripts using `npm run build` which will throw it all together in `public/dist/main.js` - check the webpack docs on how to use it more effectively. Your entrypoint is located in `app/resources/scripts/index.ts` if you don't want to use TypeScript just rename index.ts to index.js.

You can also run `npm run dev` to start webpack in watch mode, great for development.

### Commands

Using Runway you can add commands into the application.

```
./runway example:example-command
```

Will execute the command in src/Acme/Demo/Comands/ExampleCommand.php

Runway has a few strict restrictions for commands:

1. They must be in a directory called "commands"
2. The file name must end in Command.php

## Volta

This project uses [Volta](https://volta.sh/) to manage the node and npm version, it is optional to setup but it is a great tool to manage your JavaScript toolchain.

# License

The skeleton is licensed under the [MIT](https://opensource.org/licenses/MIT) license.
