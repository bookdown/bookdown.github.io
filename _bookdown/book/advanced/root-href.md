# Overriding The Root Href Value

By default, all navgation links between pages will be prefixed with `/`. Sometimes this will not be what you want; for example, if you are publishing your book to a subdirectory.

If you want to use a different root href value, edit the top-level `bookdown.json` file and set the `rootHref` value like so:

    {
        ...
        "rootHref": "/foo/",
        ...
    }

Then all navigation links will be prefixed with `/foo/` instead.
