<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package RB Free Theme
 * @subpackage RB Portfolio Two
 * @version RB Portfolio Two 1.0.2
 * @since RB Portfolio Two 1.0.0
 */

if (!is_active_sidebar('rbp-two-sidebar-right')) {
	return;
}
dynamic_sidebar('rbp-two-sidebar-right');