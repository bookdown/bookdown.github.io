# Basic Usage

## Writing

Two parts: the `bookdown.json` file, and the Markdown files.

### The `bookdown.json` file

Basic outline of "title" and "content". Subordinate bookdown.json files. Remote content.

### Markdown files

All-purpose markdown. Transformed using CommonMark.

### Theming

Just the `head.php` template to start with, add your links there, and put the actual files in the project root.

## Publishing

    ./vendor/bin/bookdown book/bookdown.json

    php -S localhost:8080 -t {$REPO}


## What Next?

Advanced stuff!
