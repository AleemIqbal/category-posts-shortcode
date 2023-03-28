=== Category Posts Shortcode ===
Contributors: aleemiqbalbhatti
Tags: shortcode, category, posts
Requires at least: 4.0
Tested up to: 5.9
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A simple plugin that adds a shortcode to display posts from a specified category.

== Description ==

The Category Posts Shortcode plugin allows you to easily display a list of posts within a specified category on your WordPress website. The plugin adds a new shortcode that can be used within your posts, pages, or widgets. The list of posts is styled to be visually appealing and responsive for various screen sizes.

To use the shortcode, simply add the following to your WordPress page or post editor, replacing "your-category-slug" with the desired category slug:

[category_posts category="your-category-slug"]

For Multiple Categories:
<div id="categoriesList">
[category_posts category="uncategorized"]
[category_posts category="blog"]
</div>

== Installation ==

1. Download the plugin files and upload the entire `category-posts-shortcode` folder to the `/wp-content/plugins/` directory of your WordPress installation.
2. Activate the plugin through the 'Plugins' menu in the WordPress admin dashboard.
3. Use the `[category_posts category="your-category-slug"]` shortcode in your WordPress pages, posts, or widgets, replacing "your-category-slug" with the desired category slug.

== Frequently Asked Questions ==

= How can I change the styling of the posts list? =

You can edit the `category-posts-shortcode.css` file located in the `css` folder of the plugin directory. Make sure to clear your cache after making any changes to see the updated styles.

= Can I display multiple categories at once? =

Currently, the plugin only supports displaying posts from a single category per shortcode. To display posts from multiple categories, you can add multiple shortcodes with different category slugs.

== Changelog ==

= 1.0.0 =
* Initial release

== Upgrade Notice ==

= 1.0.0 =
This is the initial release of the plugin.
