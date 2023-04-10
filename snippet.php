<?php

/* Redirect old URL from old sub-domain to primary coresponding guid only if it 404s */
function new_link_locaiton() {
    if (is_404()) {
            header("HTTP/1.1 301 Moved Permanently");
            header("Location:https://sub.domain.com{$_SERVER['REQUEST_URI']}");
    exit;
    }
}

add_action('template_redirect', 'new_link_location', 1);

?>
