# Remote Content

> This requires the `allow_url_fopen` setting in `php.ini` to be enabled.

You can specify remote Markdown and `bookdown.json` config files as `"content"` elements. This means you can collect pages and sections from various sources, where those pages and sections are maintained by their respective authors, and combine them into a single book.

For an example of adding remote content, try setting the following `"content"` value:

    "content": [
        "https://raw.githubusercontent.com/pmjones/bookdown-demo/master/libraries/_bookdown.json"
    ]

Then [generate the book](../basic/generating-html.html). You will see that Bookdown retrieves the remote content and generates it into local HTML files.
