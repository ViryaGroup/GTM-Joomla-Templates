<?php
// Strip http and then fullstop in domain to get the environment.
$strip_http = explode('//',JURI::base());
$strip_bul = explode('.',$strip_http[1]);
$env = $strip_bul[0];

if ($env == 'dev') {
    include dirname(__FILE__) . '/../gtm/dev.php';
} elseif ($env == 'demo') {
    include dirname(__FILE__) . '/../gtm/demo.php';
} else {
    include dirname(__FILE__) . '/../gtm/live.php';
}
?>