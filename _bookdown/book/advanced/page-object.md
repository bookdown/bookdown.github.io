# The `Page` Entity

The `Page` entity is the central object around which pages are generated. There are three kinds of `Page` entity:

- `Page` represents every kind of page

- `IndexPage` is a special kind of `Page` that represents a table-of-contents index page

- `RootPage` is a special kind of `IndexPage` that represents the very first table-of-contents index page in the book

A `Page` object is passed to every template script. You can use it to find out everything about where the page is in the system, and what the related configuration values are.

A fuller description of the various `Page` entities is forthcoming. In the mean time, please examine the codebase itself for insight into the object properties and methods: [Page](https://github.com/bookdown/Bookdown.Bookdown/blob/develop/src/Content/Page.php), [IndexPage](https://github.com/bookdown/Bookdown.Bookdown/blob/develop/src/Content/IndexPage.php), [RootPage](https://github.com/bookdown/Bookdown.Bookdown/blob/develop/src/Content/RootPage.php).
