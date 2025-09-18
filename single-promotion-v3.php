<?php
/**
 * Template Name: Promotion V3
 * Template Post Type: promotion
 * @package SeedSpring
 */

$id = get_the_ID();
$v = get_fields($id);
?>

<p>Test <?= $id ?></p>
<?php pre($v); ?>