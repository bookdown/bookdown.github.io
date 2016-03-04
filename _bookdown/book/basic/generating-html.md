# Generating HTML

Now that we have added some content, let's re-generate the HTML files.

## Setting The Target

The top-level `bookdown.json` file has a `"target"` element that specified where the generated HTML should be saved.  By default, this is the relative path `../../`, meaning the root of our `{$REPO}` directory. If you like, you can change this to some other target directory.

## The `bookdown` Command

Now we can actually generate the HTML output from our Markdown content. We do so by calling the `bookdown` command and passing it the path to our top-level `bookdown.json` config file. (Remember that `{$REPO}` is our root repository directory.)

    cd {$REPO}/_bookdown
    ./vendor/bin/bookdown book/bookdown.json

This will generate the HTML files to the `"target"` directory. To review them, start up the built-in PHP server using the `"target"` directory as the document root ...

    php -S localhost:8080 -t {$TARGET}

... and browse with the client of your choice.

Note how Bookdown has done the following for us:

- Numbered the headings on each page

- Created a table-of-contents with the numbered headings

- Linked to each heading from the table-of-contents

- Added previous/next/up navigation on each page

## Overriding The Target Value

In some cases, you may find it necessary to temporarily override the `target` value from the top-level `bookdown.json` file. To do so, you can specify `--target=` when invoking the `bookdown` command:

    ./vendor/bin/bookdown book/bookdown.json --target=../../other-dir/

## Overriding The RootHref Value

In some cases you may find it useful to override the `root-href` value from the top-level `bookdown.json` file.
To do so, you can specify `--root-href=` when invoking the `bookdown` command:

    ./vendor/bin/bookdown book/bookdown.json --root-href=http://example.com
