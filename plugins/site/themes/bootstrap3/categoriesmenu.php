<?php

use PHPArcade\Core;

if (!isset($_SESSION)) {
    session_start();
}
$categories = PHPArcade\Games::getCategories('ASC');

$i = 0;
foreach ($categories as $category) {
    ++$i; ?>
    <li>
        <a href="<?php echo Core::getLinkCategory($category['name'], 1); ?>">
            <?php echo $category['name']; ?>
        </a>
    </li>
    <?php
}
