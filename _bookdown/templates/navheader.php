<?php
$prev = $this->page->getPrev();
$parent = $this->page->getParent();
$next = $this->page->getNext();
?>

<nav class="navheader">
    <table width="100%">
        <tr>
            <th colspan="3" class="curr"><?php
                echo $this->page->getNumberAndTitle();
            ?></th>
        </tr>
        <tr>
            <td width="20%" class="prev"><?php if ($prev) {
                echo $this->anchorRaw($prev->getHref(), $prev->getTitle());
            } ?></td>
            <td width="60%" class="parent" align="center"><?php if ($parent) {
                echo $parent->getNumberAndTitle();
            } ?></th>
            <td width="20%" class="next" align="right"><?php if ($next) {
                echo $this->anchorRaw($next->getHref(), $next->getTitle());
            } ?></td>
        </tr>
    </table>
</nav>
