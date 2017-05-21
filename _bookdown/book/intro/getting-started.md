# Getting Started

## Prerequisites

Bookdown uses [PHP](http://php.net). It runs on PHP 5.6 and later, but we recommend using the latest available version of PHP.

## Installation

First, choose an existing project directory, likely a Git repository. We will call this the `{$REPO}` directory.

Next, use [Composer](http://getcomposer.org) to install a Bookdown skeleton as a subdirectory inside `{$REPO}`. We suggest `_bookdown/` since Github Pages will not publish underscore-prefixed paths.

    cd {$REPO}
    composer create-project bookdown/project _bookdown/

You may wish to add the following lines to `{$REPO}/.gitignore` so that the underlying libraries are not committed to your main repository.

    /_bookdown/vendor

## Confirming Installation

The Bookdown skeleton includes an example to confirm that installation succeeded.  Change into the skeleton directory, then issue the `bookdown` command to generate the example files:

    cd _bookdown/
    ./vendor/bin/bookdown book/bookdown.json

You should see some output logs indicating file reading and creation. The HTML will be generated at the root of `{$REPO}`, not in the `_bookdown` subdirectory.  You should see two files, `index.html` and `example.html`.

To browse these files, start the built-in PHP server on `localhost:8080` (or some other port) and then use a web client to review them.

    php -S localhost:8080 -t {$REPO}

Be sure to terminate the server when done.
