<?php
$config['redirectacl']['forum']['front'] = true;
$config['redirectacl']['forum']['preIndex'] = true;
$config['redirectacl']['attachment']['download'] = true;
$config['redirectacl']['elite']['download'] = true;
$config['redirectacl']['reg']['authImg'] = true;
$config['redirectacl']['rss'] = true;
$config['redirectacl']['wsapi'] = true;
$config['redirectacl']['adv'] = true;

$config['redirectacl']['spider'] = array(
    array("|googlebot|i", false)
    ,array("|baiduspider|i", false)
    ,array("|bingbot|i", false)
    ,array("|youdaobot|i", false)
    ,array("|sogou.*spider|i", false)
    ,array("|soso.*spider|i", false)
    ,array("|voluniabot|i", false)
    ,array("|jikespider|i", false)
);
?>
