# Adding Content

## Local Page Files

Let's add a page to the existing example book. Use your favorite editor to create and craeate a file called `new-page.md` at `{$REPO}/_bookdown/book`. Add the following text to that file, and save when done:

    # My New Page

    Now is the time for all good men to come to the aid of their country.

    ## Dogs and Foxes

    The quick brown fox jumps over the lazy dog.

It's not enough to create the file, though. We need to tell Bookdown that it exists, and what order it takes in our book.  To do so, edit the `bookdown.json` file and add a new `"content"` element:

        "content": {
            "example": "example.md",
            "another": "new-page.md"
        },

Note that the Markdown file name does not have to match the HTML file name that will be generated.  The `new-page.md` file will be transformed into `another.html` at generation time.

## Hierarchical Content

In addition, you can specify another `bookdown.json` config file as a `"content"` element. When you do so, Bookdown will read that config file and treat its content as pages in a subsection. This allows you to structure books of any depth you like. For an example, review [the files that produce this very site][1].

[1]: https://github.com/bookdown/bookdown.github.io/tree/master/_bookdown/book
