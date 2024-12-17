<?php
// Check if we should disable XML-RPC
$disable_xmlrpc = get_option('marcs_cwf_disable_xmlrpc', 0);

if ($disable_xmlrpc) {
    // Disable XML-RPC
    add_filter('xmlrpc_enabled', '__return_false');
}
