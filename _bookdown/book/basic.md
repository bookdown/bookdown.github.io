# Basic Usage

Now that we have a working Bookdown installation, let's create some content and generate HTML from it. We need to deal with two things: the `bookdown.json` config file, and our actual Markdown content files.

## Configuration and Content

### The `bookdown.json` Config File

The `bookdown.json` config file controls the title of our table-of-contents index pages, and the content to be used for HTML generation. A `bookdown.json` config file looks like this:

    {
        "title": "My Title",
        "content": {
            "pagename": "some-markdown-page.md",
            "dirname": "subdir/bookdown.json"
        }
    }

The `"title"` string determines the heading that will be used for the table-of-contents entry for the listed content.

The `"content"` object is composed of key-value pairs, each indicating either:

- the name of a page to be generate (`.html` will be appended automatically) and the Markdown file to use as its source; or,

- the name of a subdirectory to generate using the content listed in another `bookdown.json` file.  (As long as the path ends in `bookdown.json` it will be treated as Bookdown config file.)

> N.b.: The top-level `bookdown.json` has other elements that control book generation; we can ignore these for now.

The `"content"` values may point to:

- an absolute file path (with a leading directory separator)

- a file path relative to the `bookdown.json` file (no leading directory separator)

- a remote path, such as `http://example.com/path/to/page.md` or `http://example.com/path/to/bookdown.json`

> N.b.: The use of remote paths makes it possible to collect content from many different sources into a single book.


### Markdown Content Files

Bookdown uses [CommonMark](http://commonmark.org) Markdown as its default markup. (Advanced users may write other conversion processes to use other markups.)  This means that standard Markdown content is already suitable for use with Bookdown.

## Adding Content

Let's add a content page to the existing example book. Use your favorite editor to create and save a page called "new-page.md". Add the following text to that page:

    # My New Page

    Now is the time for all good men to come to the aid of their country.

    ## Dogs and Foxes

    The quick brown fox jumps over the lazy dog.

It's not enough to add the page, though. We need to tell Bookdown that it exists, and what order it takes in our book.  To do so, edit the `bookdown.json` file and add a new `"content"` element:

        "content": {
            "example": "example.md",
            "another": "new-page.md"
        },

Note that the Markdown file name does not have to match the HTML file name that will be generated.  The `new-page.md` file will be transformed into `another.html` at generation time.

## Generating HTML

Now that we have added some content, let's regenerate the HTML files. We do so by calling the `bookdown` command and passing it the path to our top-level `bookdown.json` config file. (Remember that `{$REPO}` is our root repository directory.)

    cd {$REPO}/_bookdown
    ./vendor/bin/bookdown book/bookdown.json

This will generate the HTML files at the top level of the `{$REPO}` directory. To review them, start up the built-in PHP server ...

    php -S localhost:8080 -t {$REPO}

... and browse with the client of your choice.

Note how Bookdown has done the following for us:

- Numbered the headings on each page

- Created a table-of-contents with the numbered headings

- Linked to each heading from the table-of-contents

- Added previous/next/up navigation on each page

## Hierarchy

TBD.

## Publishing

To publish the generated content, use `git add` and `git commit` on the various Markdown, JSON, and HTML files we have created, then push them to their origin. If the origin is Github Pages, then Github will automatically serve them for you.
