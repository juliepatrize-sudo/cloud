<?php
/**
 * Front page template.
 *
 * Shows the club sections and then respects Settings > Reading:
 * a static page shows its content and the latest news, "Your latest posts"
 * shows the regular blog loop.
 *
 * @package Seos_Football_Club
 */

get_header();
seos_football_club_front_page();
get_footer();
