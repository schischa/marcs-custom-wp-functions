<?php
// Disable the URL field in the comment form
add_filter('comment_form_default_fields', 'cfp_remove_url_field');
function cfp_remove_url_field($fields) {
    if (isset($fields['url'])) {
        unset($fields['url']);
    }
    return $fields;
}
