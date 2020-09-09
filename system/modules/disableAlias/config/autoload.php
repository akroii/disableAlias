<?php
/**
 * Variables
 */
$strFolder      = 'disableAlias';
$strNamespace   = 'disableAlias\\' . $strFolder;
/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
    $strNamespace
));
/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Classes
    $strNamespace . '\akroii\disableAlias\config\tl_page_disable_alias' => "system/modules/$strFolder/config/config.php"
));