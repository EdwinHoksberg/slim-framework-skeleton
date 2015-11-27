# Slim Framework skeleton

This app includes:
* A full MVC model 
    * Model: [j4mie/paris](https://github.com/j4mie/paris)
    * View: [slimphp/Slim-Views](https://github.com/slimphp/Slim-Views)
    * Controller: [https://github.com/fortrabbit/slimcontroller](fortrabbit/slimcontroller)
* [vlucas/phpdotenv](https://github.com/vlucas/phpdotenv) for environment settings and variables
* Logging with [codeguy/Slim-Logger](https://github.com/codeguy/Slim-Logger)
* Error reporting with [zeuxisoo/php-slim-whoops](https://github.com/zeuxisoo/php-slim-whoops)
* Bootstrap SASS
* jQuery

# Installation
1. Download the [master branch](https://github.com/EdwinHoksberg/slim-framework-skeleton/archive/master.zip) of this project and unzip it in your project root.
2. Run `composer install` to download all project dependencies.
3. Navigate to your project url and you should see a 'Hello World' message.

To use CSS and JavaScript, run `npm install` for the build dependencies. 
You can then use `gulp` to compile CSS and JavaScript at the same time, or `gulp css` and `gulp js` to run them separately.

With the command `gulp watch`, you can watch any changes on the css and js folders for changes, and it will automatically compile them.


# License
MIT
