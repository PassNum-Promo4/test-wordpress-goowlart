=== Hummingbird Page Speed Optimization ===
Plugin Name: Hummingbird Page Speed Optimization
Version:
Author: WPMU DEV
Author URI: http://premium.wpmudev.org/
Contributors: WPMUDEV
Tags: Optimization, Caching, Speed, Performance, Faster, PageSpeed, Gzip, Compression, Minify, Minification, Cloudflare, Gravatar
Requires at least: 4.6
Tested up to: 4.9.4
Requires PHP: 5.2
Stable tag: 1.7.2
License: GPLv2
License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html

Make your site load faster with file compression, minification and a complete set of cache tools – because when it comes to pagespeed, every millisecond counts!


== Description ==

<strong>Hummingbird</strong> zips through your site and finds new ways to boost page speed with fine-tuned controls over <strong>file compression</strong>, <strong>minification</strong> and <strong>full-page, browser and Gravatar caching</strong>. Load your pages quicker and score higher on <a href="https://developers.google.com/speed/pagespeed/insights/">Google PageSpeed Insights</a> with Hummingbird site optimization.

= Features Available in Hummingbird Include: =

* Performance Reports - Pro tips for running your site at super speed
* Minification - Position, minify and combine files for top performance
* Caching Suite - Load pages faster with full-page, Gravatar and browser cache tools
* GZIP Compression - Blazing fast HTML, JavaScript, and stylesheet transfer


= Scans and Recommendations =

Hummingbird will scan your site, find files that are slowing it down and provide tips and fixes for making your site run at top speed.

Hummingbird even has one-click improvements for quickly optimizing performance.

★★★★★ <br>
“Hummingbird is so easy to use. I thought it wouldn't change my speed much because I already made improvements. I ran the scan, it gave me recommendations, I pushed a button to apply them and it made my site even faster!” - <a href="https://premium.wpmudev.org/profile/juancamilobuitrago">Camilo</a>

★★★★★ <br>
“Hummingbird took me from 32 to 84 on Google page speed plus made my site 50% faster on GTmetrix!” - <a href="https://premium.wpmudev.org/profile/nicolastergiopoulos">Nicolas</a>

★★★★★ <br>
“I just built a real bloated sack of crap of a WP site, and after configuring Hummingbird and letting it do its thing, the site is actually *fast* — much faster than it has any right to be...I’m impressed.” - <a href="https://wordpress.org/support/topic/better-than-i-deserve-2/">Cacarr</a>

= Minification =

Did you know that the more files you add to your site’s the header, the slower it will load? With Hummingbird, you can easily customize the load position of your files to increase your page speed.

Quickly reorder, compress and reposition files with Hummingbird’s minification feature. But play carefully – minification is a powerful tool (though if you need it, you can reset any changes you make in one click).

= Transfer Data at Top Speed with GZIP =

Hummingbird has GZIP powers to make sharing your site more efficient.
Sending zipped files is faster and can save you money on hosting. And don’t worry about setup, send Hummingbird instructions with the click of a button and she’ll handle the rest.

= Full-Page, Browser and Gravatar Cache =

Make your site load even faster for with Hummingbirds complete set of cache tools that give your visitor’s a fastor browsing experience. Including full-page, broswer and Gravatar caching.

= Built-in Cloudflare Integration =

Hummingbird can be used to control your <a href="https://www.cloudflare.com/">Cloudflare</a> browser cache settings as well! Simply add your Cloudflare API details and configure away.

Hummingbird is a one of a kind WordPress performance optimization plugin that can make your site run at superspeed, for free!

However, if you'd like automated scanning, uptime monitoring, enhanced minify compression with up to 2x the regular optimization, CDN hosted minification and Smush Pro image optimization you can always take the next step with a <a href="https://premium.wpmudev.org/">WPMU DEV Membership.</a>



== Frequently Asked Questions ==

= Do I need Hummingbird if I already have WP Rocket or W3 Total Cache? =

Yes! Of course our cache suite is more than enough but if you already use WP Rocket or W3 Total Cache the special monitoring tools Hummingbird offers still make it worth it. To ensure compatibility only activate overlapping features in one of the plugins.

= Does Hummingbird work with Cloudflare? =

Yes! Hummingbird is built to take full advantage of Cloudflare features. Just plug in your API to get started.

= Does Hummingbird work with WooCommerce? =
Yes! Hummingbird works great with ecommerce plugins like WooCommerce and MarketPress. For best results, when configuring full-page cache, follow the WooCommerce recommended cache settings. Hummingbird will exclude the cart, my account and checkout pages to keep content dynamic.

= Somebody help! I turned on Minification and it broke my site!? =

Minification is a great way to speed up your site but moving, combining and rearranging files can also mess with styling and break functionality. We recommend making incremental changes and testing your site as you go so you can undo the changes if something breaks. And remember, don’t panic. If something goes wrong you can start over with the click of a button :)



== Screenshots ==

1. Scan your site for optimization tips and tricks.
2. Use the complete suite of cache tools to speed up load times.
3. Minification lets you combine and reposition files.
4. Use suggestions to make improvments and speed up your site.



== Installation ==

1. Upload the `wp-hummingbird` plugin to your `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Configure and manage using the `hummingbird` menu item in the WordPress dashboard.
1. Done!



== Changelog ==

= 1.7.2 ( 2018-02-06 ) =
- New: Minification logging
- New: Performance reports for subsites
- Enhance: PHP 7.2 compatibility
- Enhance: Better support for installs where SSH of FTP filesystem methods are used
- Enhance: Texts in tooltips and notices in minification module
- Enhance: Improve dashboard performance module UI
- Enhance: Page caching will now add die() to the header of cached files and logs to improve security
- Enhance: Better integration with Divi theme
- Enhance: Minification UI
- Enhance: Uptime UI
- Fix: Page caching will not be halted forever if minification scan fails to finish
- Fix: Minification not enqueuing some scripts correctly (better support for Google maps, Google reCAPTCHA)
- Fix: Page cache not updated when comments added on multisite subdirectory installs
- Fix: Layout issues on IE11
- Fix: Hummingbird causing Internal server 500 error on some hosts
- Fix: Typos on browser caching page and membership modal

= 1.7.1 ( 2018-01-15 ) =
- New: Download log button in page caching module
- New: Minification screen has been split into beginner and advanced views
- New: Minification advanced view allows manipulations with jquery, jquery-core and jquery-migrate files
- Enhance: Page caching module checking for wp-content directory and wp-config.php file
- Enhance: Hummingbird will convert any path to regex expression in exclusion rules in page caching module
- Enhance: Compatibility with Bedrock
- Enhance: Detection and handling of WP_CACHE constant in wp-config.php file
- Enhance: More informative tooltips for caching modules
- Fix: Minification not always correctly detecting when HTTP/2 is used
- Fix: Cloudflare integration shows empty zone when website domain includes www
- Fix: Notices during page/post edit when page caching is active

= 1.7.0.3 ( 2017-11-14 ) =
- New: Debugging option for page caching
- New: Support for DONOTCACHEPAGE
- Fix: Ability to disable minification on multisite
- Fix: Rating message shown on Pro version and without a 7 day delay
- Enhance: Description on clear cache notice
- Enhance: Better support for clearing cache for post/page taxonomies
- Enhance: Do not try to cache pages if advanced-cache.php can't load page caching class

= 1.7.0.2 ( 2017-11-07 ) =
- Fix: Clear cache notices will not auto activate minification
- Fix: Inability to update performance reports settings
- Enhance: Improve page caching descriptions

= 1.7.0.1 ( 2017-11-02 ) =
-Fix: White screen when trying to clear cache after plugin/theme update on multisite install

= 1.7.0 ( 2017-11-02 ) =
- New: Page caching
- New: Inline styles in minification
- New: Documentation link for all modules
- New: Gravatar widget on dashboard page
- Enhance: Code optimization and improvements aimed at improving performance in wp-admin
- Enhance: Add type icons to browser caching and gzip compression pages
- Enhance: Improved UX in the dashboard, browser caching and gzip modules
- Enhance: Better notice handling
- Enhance: Browser caching will auto check status on expiry settings update
- Fix: Cache expiry time not shown correctly for month and year
- Fix: Performance tests not running from quick setup modal
- Fix: Minified files not hosted on CDN
- Fix: Expiry times not displayed correctly for month and year periods

= 1.6.2 ( 2017-10-02 ) =
- Fix: API spamming issue

= 1.6.1 ( 2017-09-13 ) =
- New: Add font types to browser and cache rules
- New: Automatic detection of HTTP/2 and disable of combine function in minification
- Enhance: Add a button to the cache page for saving settings (instead of ajax)
- Enhance: Add a scrollbar to expiry settings dropdown
- Enhance: Better sync between Hummingbird and the Hub
- Enhance: Improve error and zone handling for Cloudflare
- Enhance: Links to support articles will now open in a new window
- Enhance: Gravatar caching will respect the classes of original HTML elements
- Enhance: Accessibility on hidden form elements
- Enhance: Gzip module page layout
- Enhance: Add Gravatar support when using get_avatar_url()
- Fix: Uninstall will clean out all the database rows, created by the plugin
- Fix: Layout issues on caching page
- Fix: Notice styles
- Fix: Do not cache Gravatars in admin
- Fix: Update translation strings
- Fix: Minification link visible in admin bar for non-admins in multisite
- Fix: Incorrect date on dashboard and Uptime module when site is down

= 1.6.0 ( 2017-08-07 ) =
- New: Gravatar caching
- New: Caching module layout
- New: Ability to defer scripts in minification
- Enhance: Better detect GZIP and browser cache
- Enhance: Do not minify files that are already minified by a theme or a plugin
- Enhance: Better support for older PHP versions (5.2 and 5.3)
- Enhance: Improve admin notice styles, make notices dismissable
- Enhance: Improve dashboard layout
- Enhance: Better connectivity with the Hub
- Enhance: Better support for support for screen readers
- Fix: Overlapping issues in dashboard
- Fix: PHP notices on dashboard page and during activation/deactivation
- Fix: Minification not working on some subsites in a network
- Fix: Minification stuck at 10% on some installs

= 1.5.5 ( 2017-07-17 ) =
- Fix: Bug in Performance Report
- Fix: Fatal error on activation on the free versioon
- Fix: HTML tags in Cloudflare module

= 1.5.4 ( 2017-07-13 ) =
- Fix: Cron reports were stuck on a loop on some WordPress installations
- Fix: Issue with reports and calculating UTC time
- Fix: Minification was duplicating inline styles
- Fix: IE incompatibility in minification screen
- Fix: Compatibility with Contact Form 7
- Fix: Mobile menus not working on Performance and Minification pages
- Enhance: Remove jQuery and jQuery migrate from minification process
- Enhance: Minor style changes and updates
- Enhance: Cron reports functionality
- Enhance: Code optimization
- Enhance: Admin area performance improvements

= 1.5.3 ( 2017-06-21 ) =
- Fix: Avada & Google Maps scripts incompatibility
- Fix: Bulk update not working when selecting all items in minification screen
- Fix: Minification engine sometimes forget about files and did not clean them
- Fix: Minification was always showing 0% saved in some cases
- Fix: Enjoy pro features notice does not go away
- Fix: Performance scans were not active for some users of the free version of the plugin
- Enhance: Some code optimizations in few areas
- Enhance: Minified files are now processed in a background task and in a bigger batch
- Enhance: Some minor styles changes
- Enhance: Use CDN option is not available in sites of a multisite anymore and is controlled from network admin
- Enhance: Improved activation logic for free/pro versions
- Some other minor fixes and refactoring

= 1.5.2 ( 2017-06-05 ) =
- First WordPress.org version
- Fix: Minification actions in bulk update modal were not functioning properly

= 1.5.1 ( 2017-06-05 ) =
- New: Allow to customise reports with WordPress hooks
- Enhance: Reports notifications now allow user name to be customised
- Enhance: When free and pro versions are activated, free version is auto deactivated
- Fix: Do not assign any user for reports notifications by default
- Fix: Performance settings were not properly saved if there were no user emails in the list
- Fix: Reports notifications could not be switched off
- Performance notifications is now pro feature only
- Moved dashboard class to pro folder
- Introduced ES6 in some scripts
- Some minor styles fixes
- Some other minor fixes

= 1.5 ( 2017-05-25 ) =
- New: User Interface has been completely redesigned
- New: Quick setup welcome modal
- New: Performance Reports. This new feature allow users to schedule performance reports and get them right into their email boxes
- New: Performance tests are now available for free users by triggering them manually
- New: Clear Cache button
- Enhance: Caching and Gzip are now auto checked when the plugin is activated
- Enhance: Do not combine assets by default
- Enhance: Uptime data is synced with WPMU DEV servers every 3 minutes
- Enhance: Minification stats calculations improvements
- Enhance: Cloudflare admin menu has been removed and integrated into Browser Cache screen
- Fix: When performance test is run for the first time, previous score improvement was "Pending"
- Fix: stylesheets with @import directives were always displayed as "Pending"
- Fix: Various minor improvements and bug fixes

= 1.4.3 ( 2017-04-25 ) =
- Fix: Sometimes minification stats appeared as a negative number
- Enhance: Minification: Make all post metadata private
- New: Added new actions to modify where HB saves the files

= 1.4.2 ( 2017-03-02 ) =
- Fix: MarketPress incompatibility
- Fix: In some cases, assets were not moved to footer
- Fix: Assets were always combined if some of them were marked as "not combined" in the same group
- Fix: Keep handle name when only one handle is enqueued in a group for better compatibility with wp_script_is function
- Fix: add_inline_scripts/styles did not work for plugins that inject inlines too late
- Fix: Sometimes assets are not enqueued under https if the site is SSL
- Enhance: Cloudflare box - Show a message if there are no zones available
- Some other minor fixes/improvements

= 1.4.1 ( 2017-01-12 ) =
- Fix: Upgrade process was triggered too early provoking a fatal error when Smart Crawler was active
- Fix: Minify Group warning
- Fix: Error when WPMUDEV Dashboard was not activated

= 1.4 ( 2017-01-10 ) =
- New: Brand new minification engine
- New: Minified files are now processed in WPMUDEV's servers
- New: Users can use WPMUDEV's CDN to store minified files
- New: Clear Cloudflare cache feature
- Fix: PHP code in stylesheets could potentially be exposed
- Enhancement: stylesheets with @import directives are not minified anymore due to multiple issues that were causing
- Some admin styles improvements

= 1.3.5 ( 2016-10-24 ) =
- New: Divi 3.0 integration

= 1.3.4.1 ( 2016-10-07 ) =
- Fixed: Minification was always enabled in some sites.

= 1.3.4 ( 2016-10-03 ) =
- PHP 5.3 required for minification
- Fix: Javascript improvements in Cloudflare box
- Fix: Missing Hummingbird icon in admin bar
- Enhancement: Cloudflare now auto selects domain
- Enhancement: Improved caching detection
- Other minor improvements

= 1.3.3 ( 2016-09-02 ) =
- Fix: Parse error in Cloudflare module when ASP tags detection was active in PHP

= 1.3.2 ( 2016-08-22 ) =
- Fix: Error when detecting Cloudflare on activation

= 1.3.1 ( 2016-08-17 ) =
- Fix: Cloudflare was only showing 20 sites max
- Fix: Parse error in PHP < 5.3 installations

= 1.3 ( 2016-08-15 ) =
- New: Cloudflare integration
- New: LiteSpeed server detection
- Enhance: Clear minification cache when a plugin/theme is activated/deactivated
- Enhance: New better Javascript compressor
- Enhance: Plugin performance improvements
- Enhance: Better Uptime error display
- Fixed: Notice in minification screen when a plugin was deleted manually
- Fixed: replaced buttons by inputs as sometimes settings cannot be submitted in minification screen
- Fixed: Some minified URLs where prepended 'http' even if they had already http prepended
- Fixed: Some admin styles

= 1.2.4 ( 2016-08-10 ) =
- Fixed fatal error on activation when PHP version is < 5.3

= 1.2.3 ( 2016-07-22 ) =
- Enhance: Updated WPMU DEV styles library

= 1.2.2 ( 2016-06-16 ) =
- Fixed: Hummingbird Exception throwing fatal error in old versions of PHP (<5.3)
- Fixed: Notice in minification screen when a plugin was deleted manually
- Fixed: replaced buttons by inputs as sometimes settings cannot be submitted in minification screen
- Fixed: Some minified URLs where prepended 'http' even if they had already http prepended
- Enhance: Better Uptime error handling
- Replaced the javascript compressor for a better one
- Some styles improvements in admin


= 1.2.1 ( 2016-05-17 ) =
Fix: Sometimes excluded files did not appear on list after re checking files
Fix: Server type not updated when user switches it
Fixes to Google Chart API
Enhance: Faster minification scan
Enhance: Better GZIP htaccess code
Enhance: Search by extension in minification page

= 1.2 ( 2016-04-18 ) =
- New: Filter by plugin, theme or filename in minification screen
- New: Bulk actions in minification screen
- New: Divi integration
- New: Splitted minification chart into header and footer charts
- Fix: Unconsistent count of enqueued files in Dashboard
- Fix: BuddyPress warning
- Fix: PHP 5.2.4 error
- Fix: GZIP and caching results were cleared after 1 hour
- Fix: Login screen errors due to minification process
- Fix: Sometimes minificated sources were enqueued twice.
- Admin styles improvements
- Other minor fixes and improvements

= 1.1.2 ( 2016-03-18 ) =
- Fixed: Performance test waiting time set back to 5 minutes

= 1.1.1 ( 2016-03-17 ) =
- Fixed: Uptime not displaying chart
- Fixed: Warning in Uptime page

= 1.1 ( 2016-03-16 ) =
- New: New filetype in Caching results
- New: wphb_add_meta_box filter
- New: wphb_code_snippet filter
- Enhance: Get Uptime results when the plugin is activated
- Enhance: Start a performance test when the plugin is activated
- Enhance: Better errors handling in Plugin API Classes
- Enhance: Better cache clean on deactivation
- Fixed: Minification cached resources not being loaded via https
- Fixed: Permissions errors in multisites
- UX Improvements

= 1.0.1 ( 2016-03-03 ) =
- Enhance: Added plugins list action link
- Enhance: If Browser Caching is already recommended or better, Enable button is now hidden
- Enhance: Activate API log by using WP_DEBUG_LOG constant
- Fixed: Warning when deleting cached files
- Fixed: Empty file was appearing when all assets were sent to footer
- Fixed: settings were reset to default when plugin was deactivated.
- Some other minor enhancements/fixes

= 1.0 ( 2016-02-23 ) =
- First release

== About Us ==
WPMU DEV is a premium supplier of quality WordPress plugins and themes. For premium support with any WordPress related issues you can join us here:
<a href="https://premium.wpmudev.org/?utm_source=wordpress.org&utm_medium=readme">https://premium.wpmudev.org/</a>

Don't forget to stay up to date on everything WordPress from the Internet's number one resource:
<a href="https://premium.wpmudev.org/blog/?utm_source=wordpress.org&utm_medium=readme">WPMU DEV Blog</a>

Hey, one more thing... we hope you <a href="http://profiles.wordpress.org/WPMUDEV/">enjoy our free offerings</a> as much as we've loved making them for you!