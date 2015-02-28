# Introduction

## What Is Bookdown?

Bookdown generates [DocBook](http://docbook.org)-like HTML output using [Markdown](http://daringfireball.net/projects/markdown/) and JSON files instead of XML.

Bookdown is especially well-suited for publishing project documentation to GitHub Pages.

Features include:

- Automatic table-of-contents generation as index pages at each hierarchy level

- Custom index-page titles via JSON configuration

- Automatic numbering of page headings

- Automatic previous/next/up navigation headers and footers

- Multi-page hierarchical output

- Loading of remote content files via HTTP

- Templated output for theming

- Overridable page processing, especially for rendering

Bookdown can be used as a static site generator, or as a way to publish static pages as a subdirectory in an existing site.

## Getting Started

### Prerequisites

Bookdown uses [PHP](http://php.net); it runs on PHP 5.3, but we recommend using the latest available version.

### Installation

First, choose an existing project directory, likely a Git repository. We will call this the `{$REPO}` directory.

Next, use [Composer](http://getcomposer.org) to install a Bookdown skeleton as a subdirectory inside `{$REPO}`. We suggest `_bookdown/` since Github Pages will not publish underscore-prefixed paths.

    cd {$REPO}
    composer create-project -s dev bookdown/project _bookdown/

You may wish to add the following lines to `{$REPO}/.gitignore` so that the underlying libraries are not committed to your main repository.

    /_bookdown/vendor

### Confirming Installation

The Bookdown skeleton includes an example to confirm that installation succeeded.  Change into the skeleton directory, then issue the `bookdown` command to generate the example files:

    cd _bookdown/
    ./vendor/bin/bookdown book/bookdown.json

You should see some output logs indicating file reading and creation. The HTML will be generated at the root of `{$REPO}`, not in the `_bookdown` subdirectory.  You should see two files, `index.html` and `example.html`.

To browse these files, start the built-in PHP server on `localhost:8080` (or some other port) and then use a web client to review them.

    php -S localhost:8080 -t {$REPO}

Be sure to terminate the server when done.
