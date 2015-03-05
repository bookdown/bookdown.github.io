# Overview

Now that we have a working Bookdown installation, let's create some content and generate HTML from it. We need to deal with two things: our actual Markdown content files, and a `bookdown.json` config file to organize them.

## Markdown Content Files

Bookdown uses [CommonMark](http://commonmark.org) Markdown as its default markup. (Advanced users may write other conversion processes to use other markups.)  This means that standard Markdown content is already suitable for use with Bookdown.

## The `bookdown.json` Config File

The `bookdown.json` config file controls the title of our table-of-contents index page, and the content to be used for HTML generation. A `bookdown.json` config file looks like this:

    {
        "title": "My Title",
        "content": [
            "page.md",
            "section/bookdown.json"
        ]
    }

> N.b.: The top-level `bookdown.json` has other elements that control book generation; we can ignore these for now.

### Title String

The `"title"` string determines the heading that will be used for the table-of-contents entry for the listed content.

### Content Array

The `"content"` array specifies the order of pages, and the origins of those pages.

#### Content String Elements

Each content array element is an origin string. It determines both where the content is located, and the target name when rendering it into HTML.

- If the origin string ends in `bookdown.json`, the target name will the directory in which the `bookdown.json` file is stored, and the `"content"` in that `bookdown.json` file will be rendered into that directory.

- Otherwise, the target name is the same as the origin file name, minus any `.ext` file extension.

The origin strings may point to:

- an absolute file path (with a leading directory separator)

- a file path relative to the `bookdown.json` file (no leading directory separator)

- a remote path, such as `http://example.com/path/to/page.md` or `http://example.com/section/bookdown.json`

> N.b.: The use of remote paths makes it possible to collect content from many different sources into a single book.

#### Content Object Elements

Sometimes you will want the target name to be different from the origin name. In these cases, the `"content"` element can be an object of a single key-value pair, where the key is the target name and the value is the origin.

The following is equivalent to the above:

    {
        "title": "My Book",
        "content": [
            {"page": "page.md"},
            {"section": "section/bookdown.json"}
        ]
    }


The key (target name) can be any name you like, so the following uses the same origin files but sets different targets:

    {
        "title": "My Book",
        "content": [
            {"alternative-page-name": "page.md"},
            {"alternative-section-name": "section/bookdown.json",
        ]
    }

#### No `"index"` Content Names

The target name `index` is reserved by Bookdown for table-of-contents pages. If you have an origin that will end up with an `index` target name, use a `"content"` object to rename it to something else.
