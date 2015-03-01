# Rendering

Bookdown runs plain-PHP templates through [Aura.View](https://github.com/auraphp/Aura.View), using [Aura.Html](https://github.com/auraphp/Aura.Html) helpers, to render HTML pages.

The default templates are located in the core Bookdown library; you can see them at `{$REPO}/_bookdown/vendor/bookdown/bookdown/templates/`. The project-specific override templates are located in the `{$REPO}/_bookdown/templates` directory.

## Overriding The Default Templates

You can override the default templates individiually or entirely to control Bookdown output. To do so:

1. Copy the template you want to override from `{$REPO}/_bookdown/vendor/bookdown/bookdown/templates/` to `{$REPO}/_bookdown/templates`.

2. Modify the project-specific `main.php` template to point to the override version.

3. Edit the override template as you see fit.

4. Regenerate the HTML.

For example, let's modify the `navheader.php` template.

First, we copy the default template to the project-specific template location:

    cd {$REPO}/_bookdown
    cp vendor/bookdown/templates/navheader.php templates/navheader.php

Next, we open the project-specific copy of `main.php` and point to the new `navheader.php` location. Change the line that reads ...

    $templates->set("navheader", "{$library}/navheader.php");

... to:

    $templates->set("navheader", "{$project}/navheader.php");

(Note that `$library` and `$project` are defined at the top of `main.php`.)

Then we edit the `navheader.php` template and change it to whatever we like. Try something obvious, like replacing all the HTML and PHP code with `<p>HI THERE</p>`.

Finally, regenerate the HTML. You should see `HI THERE` at the top of every page, but no navigation elements at all.

## Choosing A Different Master Template

If you like, you can point Bookdown to a completely different master template. In the root `bookdown.json` config file, specify a `"template"` value as the path to your new master PHP template:

    {
        ...
        "template": "../my-master.php"
    }

That template will be passed through an Aura.View instance.

You can also completely rewrite the existing `templates/main.php` template to whatever you like.
