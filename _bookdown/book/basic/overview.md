# Overview

Now that we have a working Bookdown installation, let's create some content and generate HTML from it. We need to deal with two things: the `bookdown.json` config file, and our actual Markdown content files.

## The `bookdown.json` Config File

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

- the name of a page to generate (`.html` will be appended automatically) and the Markdown file to use as its source; or,

- the name of a subdirectory to generate using the content listed in another `bookdown.json` file.  (As long as the path ends in `bookdown.json` it will be treated as Bookdown config file.)

> N.b.: The top-level `bookdown.json` has other elements that control book generation; we can ignore these for now.

The `"content"` values may point to:

- an absolute file path (with a leading directory separator)

- a file path relative to the `bookdown.json` file (no leading directory separator)

- a remote path, such as `http://example.com/path/to/page.md` or `http://example.com/path/to/bookdown.json`

> N.b.: The use of remote paths makes it possible to collect content from many different sources into a single book.


## Markdown Content Files

Bookdown uses [CommonMark](http://commonmark.org) Markdown as its default markup. (Advanced users may write other conversion processes to use other markups.)  This means that standard Markdown content is already suitable for use with Bookdown.
