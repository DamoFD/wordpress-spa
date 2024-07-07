<?php
/**
* Front page template
*
* @package spawordpress
*/

if (!isset($_SERVER['HTTP_HX_REQUEST'])) {
    get_header();
}
?>

<div>Front Page</div>

<?php
if (!isset($_SERVER['HTTP_HX_REQUEST'])) {
    get_footer();
}
