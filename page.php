<?php
/**
* Page template
*
* @package spawordpress
*/

if (!isset($_SERVER['HTTP_HX_REQUEST'])) {
    get_header();
}
?>

<div>Page test</div>

<?php
    if (!isset($_SERVER['HTTP_HX_REQUEST'])) {
        get_footer();
    }
