=== Seos Football Club ===
Contributors: seosbg
Tags: one-column, two-columns, left-sidebar, right-sidebar, custom-colors, custom-header, custom-logo, custom-menu, featured-images, footer-widgets, full-width-template, theme-options, threaded-comments, translation-ready, sticky-post, blog, news, entertainment
Requires at least: 5.6
Tested up to: 6.9
Requires PHP: 7.0
Stable tag: 1.1.1
License: GNU General Public License v3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

An animated football club child theme for Seos Football.

== Description ==

Seos Football Club is a child theme of Seos Football, made for football clubs, academies and supporter sites.

Front page sections (all managed from Appearance > Customize > Football Club Options):

* Results ticker
* Animated "Club in Numbers" counters
* League table with highlighted club row and upcoming fixtures
* Latest club news (when a static front page is used)
* Membership call to action
* Sponsors marquee
* Demo club content in the original footer widget areas, shown only while all of them are empty

All club features live in the "club" folder and are loaded with a single include (see club/README.txt).

Every section is visible with demo values right after activation, so a fresh installation looks complete.
All animations respect the visitor's "reduce motion" system setting and can be switched off in the Customizer.

== Installation ==

1. Install and activate the parent theme, Seos Football.
2. In your admin panel go to Appearance > Themes > Add New > Upload Theme and choose seos-football-club.zip.
3. Activate Seos Football Club.
4. Go to Appearance > Customize > Football Club Options.

On a fresh site, the Customizer also offers starter content: pages (Home, The Club, News, Tickets & Contact), three news posts with images, a menu and footer widgets. Nothing is saved until you click Publish.

== Frequently Asked Questions ==

= How do I remove the demo content in the footer? =

Add any widget to Footer 1, 2, 3 or 4 in Appearance > Widgets, or switch off
"Show demo club content" in Customize > Football Club Options > Club Footer.

= Where do the front page sections appear? =

On the front page (front-page.php). With Settings > Reading set to "Your latest posts", the sections are followed by your blog posts. With a static page, the page content and the latest news are shown.

== Changelog ==

= 1.1.1 - November 11 2026 =
* Initial release.

== Copyright ==

Seos Football Club WordPress Theme, Copyright 2026 seosbg
Seos Football Club is distributed under the terms of the GNU GPL v3 or later.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

Seos Football Club is a child theme of Seos Football, Copyright Tsvetomir Tsvetanov, GPL v3.
Icons in the front end are provided by the parent theme (Font Awesome 4.5, SIL OFL 1.1 / MIT).

== Resources ==

All images bundled with this theme were created for this theme and are licensed under GPL v3 or later:

* club/assets/images/ball.svg – football illustration
* club/assets/images/news-match.jpg, news-training.jpg, news-academy.jpg – starter content illustrations
* screenshot.png – composed from the theme's own front page and the images above
* The club crest graphic is inline SVG drawn in club/inc/template-functions.php

Jockey One font
* License: SIL Open Font License 1.1, https://openfontlicense.org (see club/assets/fonts/OFL.txt)
* Source: https://fonts.google.com/specimen/Jockey+One (bundled locally, no external requests)

All team, player and sponsor names in the demo content are fictional.
