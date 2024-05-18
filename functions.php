<?php

// Load Hey theme Admin CSS
global $Wcms;

if (defined('VERSION')) {
    $Wcms->addListener('css', 'heyAdminCss');
}

function heyAdminCss($args) {
    global $Wcms;
    if ($Wcms->loggedIn) {
        $script = <<<EOT
        <link rel="stylesheet" href="{$Wcms->url('themes/hey/css/admin.css')}" type="text/css" media="screen">
        EOT;
        $args[0] .= $script;
    }
    return $args;
}

?>