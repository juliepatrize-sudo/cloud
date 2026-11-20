Seos Football Club module
=========================

Everything (Customizer options, front page sections, footer demo content, assets, starter content)
lives in this folder and is loaded with ONE line.

1. Copy the "club" folder into the theme root.
2. functions.php:
       require get_template_directory() . '/club/club.php';
   (get_stylesheet_directory() if it is inside a child theme)
3. Front page – choose ONE:
   a) inside header.php (sections only, no loop; CTA and sponsors are added
      automatically before the footer; does nothing on other pages):
       seos_football_club_header_sections();
   b) or in front-page.php (sections + page/blog content):
       get_header();
       seos_football_club_front_page();
       get_footer();

Every text on the sections and in the footer demo columns can be changed in
Customize > Football Club Options.
footer.php is NOT changed. While the widget areas footer-1 ... footer-4 are all
empty, the module adds demo club content inside them through WordPress widget hooks
(is_active_sidebar / dynamic_sidebar_before), using the theme's own footer markup.
Other area IDs: filter seos_football_club_footer_demo_areas.
Override any template part by copying it to <theme>/seos-club/<name>.php
(e.g. seos-club/section-stats.php).
Filters: seos_football_club_defaults, seos_football_club_sections,
seos_football_club_starter_content.

Customize > Football Club Options > Theme Enhancements switches off every change the
module makes outside its own sections (menu, sidebar, pagination, mobile text).
