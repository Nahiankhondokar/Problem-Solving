<?php 


/**
 * Problem - 02
 * Find the world Coutn from a paragraph
 */
$paragraph = 'Nunc ex lorem, ullamcorper ut eleifend ac, pellentesque non dolor';
$modified = explode(" ", $paragraph);
print_r(count($modified));