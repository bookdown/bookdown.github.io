# Settings

## rootHref

By default, all navgation links between pages will be prefixed with `/`. Sometimes this will not be what you want; for example, if you are publishing your book to a subdirectory.

If you want to use a different root href value, edit the top-level `bookdown.json` file and set the `rootHref` value:

    {
        ...
        "rootHref": "/foo/",
        ...
    }

Then all navigation links will be prefixed with `/foo/` instead.

This value is honored only at the root-level `bookdown.json` file.

## tocDepth

By default, the table of contents will show all content levels below it. You can limit the depth of the table of contents by setting the `tocDepth` value:

    {
        ...
        "tocDepth": 2,
        ...
    }

This value is honored at all levels of `bookdown.json` files.
