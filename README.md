Berny\ConsoleBundle
====================

Simple integration for Symfony/Console into Symfony/HttpKernel based applications

Installation
------------

With [composer/packagist](https://getcomposer.org)
- Add `"berny/console-bundle": "*"` to your `composer.json` file
- Run `composer update berny/console-bundle`
- Add the following bundles to your Kernel:

        new \Berny\Bundle\TagBundle\TagBundle(),
        new \Berny\Bundle\Console\ConsoleBundle(),

- Now you can get the console with `$kernel->getContainer()->get('console')`

Commands
--------

You can add Commands automatically to the Console by tagging them in your bundle with the `console.command` tag.
