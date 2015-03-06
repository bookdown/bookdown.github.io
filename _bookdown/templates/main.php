<?php
// default library templates
$library = dirname(__DIR__) . "/vendor/bookdown/bookdown/templates";

// project-specific templates
$project = __DIR__;

// register the templates
$templates = $this->getViewRegistry();
$templates->set("head", "{$project}/head.php");
$templates->set("body", "{$library}/body.php");
$templates->set("core", "{$library}/core.php");
$templates->set("navheader", "{$library}/navheader.php");
$templates->set("navfooter", "{$library}/navfooter.php");
$templates->set("toc", "{$library}/toc.php");
?>
<html lang="en">
<?php echo $this->render("head"); ?>
<body>
  <div class="container">
    <div class="row">
      <div class="twelve columns">
        <?php echo $this->render("core"); ?>
      </div>
    </div>
  </div>
</body>
</html>
