=== a3 Portfolio ===

Contributors: a3rev, A3 Revolution Software Development team
Tags: a3 Portfolio, Portfolio, Post Portfolio, Showcase, Image Showcase, Image Portfolio, Gallery, Photo Gallery, Image Gallery
Requires at least: 4.0
Tested up to: 4.2.2
Stable tag: 1.3.1
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

a3 Portfolio is an extendable post based plugin that makes creating beautiful content a breeze.

== Description ==

Inspired by Google Images UI a3 Portfolio is an image based creation and management extension for every blogger, artist, photographer, and web developer to showcase their own and clients work.

= Simple to use =
* If you know how to use WordPress posts, categories and tags then you know how to use a3 Portfolios.
* Portfolio Items are custom post types.
* Portfolio Categories (custom WordPress taxonomy)
* Portfolio Tags (custom WordPress taxonomy)
* Portfolio Custom feature data
* Each Portfolio item has its own image gallery (add multiple images to each item).

= Item Features Cards with Expander =
* Portfolio page, category Pages and Tag pages show Portfolio items as Cards.
* Item details show on click in Google Images inspired Expander item.
* Each Item has its own image Gallery
* Option to set the number of item cards to show per row.
* Option to show Item title on mouse over item card or under the card
* Option to show first part of description on Item cards
* Option to set the number of lines of description text to show on the cards

= Item Posts =
* Each Item is created as a post
* Set default posts to show as 1 column or 2 columns (Gallery to left and content to the right)
* On each post edit page use the Item Meta to customize the layout of that post (over rides global settings)
* Portfolio Item gallery manager in post meta
* Option to set width of the Gallery main image on item post.
* Option to show thumbnails beside main image or under it on item post

= Demo Site =
Visiting the [demo site](http://woo.a3de.info/portfolios/) is the quickest way to see the frontend features of the a3 Portfolio. Note Demo site has the Free a3 Portfolio Isotope Add-On plugin installed plus Add-on plugins for showing available add-on features.

= Widgets =
* a3 Portfolio Category widget for easy navigation
* a3 Portfolio Tag Cloud widget
* a3 Portfolio Recently viewed items widget.

= FREE a3 Portfolio Isotope Add-On plugin =
After installing a3 Portfolio please install and activate the a3 Portfolio Isotope Add-On. It is a FREE Add-On plugin that greatly enhances the Portfolio, Category and Tags page Items main images sort and filtering. It creates a real wow factor with the Portfolios for your site visitors.

* Isotope is a js. that is subject to a Commercial License which we have purchased.
* WordPress could not allow us to include the script into the a3 Portfolio core because of the Isotope commercial license.
* From the a3 Portfolio plugin admin dashboard go the Add-Ons Menu
* Click on the Get This Extension button on the Isotope plugin card.
* The link will take you to the Free Downloads section of the a3rev site.
* Register an account or if you have an existing a3rev account - use it to log in.
* Once logged in you will see the License Key and a Download Plugin button.
* Click the button and you will be asked to acknowledge that we supply the Plugin to you at no charge and that you are aware of and agree to be bound by the Isotope developers Commercial License terms and conditions.
* Copy the License Key and download the plugins zip file to your computer.
* Use the WordPress plugins installer to upload the zip from your computer.
* WordPress will unpack the zip and install the plugin.
* Click the activate link and on the page that opens and enter the Key you had copied and validate the License.
* If you have any existing Portfolio items clear any caching on your site and in your browser so you can see the beautiful Isotope sort and filter of the portfolio, category and tags pages.
* Notice that when you click on an item the expander now opens over the rows below and does not push them down below the expander window.
* Note the Isotope Add-On Key is a lifetime key for an unlimited number of site activations.

= Extendable =
* Once installed visit the a3 Portfolio Add-on menu to find a catalogue of plugins that will extend the functionality of your portfolio.

= More Features =
* HTML5 card Architecture - responsive mobile and tablet display.
* Fast loading with built in Lazy Load for all images.
* Lightweight - Portfolio resources only load on Portfolio Post items, Portfolio page, Category and Tags pages.
* WordPress Multi site ready.
* Full WMPL compatibility
* Backend and frontend support for RTL display.
* Translation ready

= Strength & flexibility =
a3 Portfolio is built using WordPress best practices both on the front and the back end. Clean code, all classes commented. An efficient, robust and intuitive plugin.

= Customizable =
a3 Portfolio works with any theme, including the default WordPress themes. Built in hooks and filters allow developers to create extensions with a robust template structure for easy customization.


== Installation ==

= Minimum Requirements =

* WordPress 4.0
* PHP version 5.2.4 or greater
* MySQL version 5.1.73 or greater

= Automatic installation =

Automatic installation is the easiest option as WordPress handles the file transfers itself and you don't even need to leave your web browser. To do an automatic install of a3 Portfolio, log in to your WordPress admin panel, navigate to the Plugins menu and click Add New. Search a3 Portfolio, select and install.

== Screenshots ==

1. Screenshot Portfolio-items-front-end
2. Screenshot Portfolio-items-front-end-open
3. Screenshot Portfolio-items-post
4. Portfolio-item

== Usage ==

1. Install and activate the plugin

2. On wp-admin click on a3 Portfolio

3. Click Add New and create items.

4. Go to WordPress menu Appearance > Menus

5. From Pages select the Portfolio page and add to main menu. Save menu

6. Enjoy


== Changelog ==

= 1.3.1 - 2015/06/03 =
* Tweak - Security Hardening. Removed all php file_put_contents functions in the plugin framework and replace with the WP_Filesystem API
* Tweak - Security Hardening. Removed all php file_get_contents functions in the plugin framework and replace with the WP_Filesystem API
* Fix - Update dynamic stylesheet url in uploads folder to the format //domain.com/ so it's always is correct when loaded as http or https

= 1.3.0 - 2015/05/11 =
* Feature - Added support for setting a custom permalink structure for Portfolio page
* Feature - Added support change the permalink structure for Portfolio Category page
* Feature - Added support change the permalink structure for Portfolio Tag page
* Tweak - Added new options into Settings -> Permalinks page on Dashboard
* Tweak - Tested and Tweaked for full compatibility with WordPress Version 4.2.2
* Tweak - Put <code>%[portfoliopage]%</code> as arguments for $wpdb-prepare than parse it direct to mysql query
* Tweak - Don't auto added #hash on url bar of browser when first reload the page has portfolios

= 1.2.1 - 2015/04/21 =
* Tweak - Tested and Tweaked for full compatibility with WordPress Version 4.2.0
* Tweak - Changed <code>dbDelta()</code> function to <code>$wpdb->query()</code> for creating plugin table database.
* Tweak - Added style for social icon to a3.portfolio
* Tweak - Update style of plugin framework. Removed the [data-icon] selector to prevent conflict with other plugins that have font awesome icons
* Fix - Thumb images are not showing on single portfolio page. Added <code>a3-portfolio-lazy-hidden</code> into <code>a3.portfolio.single.js</code> file

= 1.2.0 - 2015/04/17 =
* Feature - Added option to show the first part of the Item description text on item cards. Description shows on footer of the card.
* Feature - Added 'Description Height' feature to set number lines of description text that shows on item cards. Option is 1 - 6 lines
* Tweak - Numerous a3.portfolio.js script file tweaks to add support for newly released a3 Portfolio shortcode add-on.
* Dev - Defined <code>@desc_background_color</code> variable inside a3.portfolio.base.less so dev can change the background color for new Description feature. Default color is <code>#555555</code>
* Dev - Added .a3-portfolio-card-description class into a3.portfolio.less so dev can change the default style for the new Item Description feature and compile own style for theme
* Dev - Defined 'a3_portfolio_card_item_description' function to get the description container of portfolio
* Dev - Defined 'a3_portfolio_main_page_scripts' function that enqueues all portfolio scripts and supports load portfolio container. This adds support for 3rd party plugins including the new a3 Portfolio Shortcodes add-on to call portfolio script from another page

= 1.1.1 - 2015/04/01 =
* Tweak - Added New Release a3 Portfolio Item Switcher Add-On plugin Card to the Add-Ons menu
* Tweak - Mobile UX improvement - increased the size of the item expander close X icon in mobile browsers so that it is easier to tap
* Tweak - Mobile UI improvement - added border to the bottom the Item expander gallery main image container to better define the image
* Tweak - Updated the plugins wordpress.org description.
* Dev - Convert function inside a3.portfolio.js file to global function so that the function can be called from another plugin
* Dev - Defined the trigger 'a3_portfolio_open_expander' when the expander is opened
* Dev - Changed WP_CONTENT_DIR to WP_PLUGIN_DIR. Is set a custom WordPress file structure then it can get the correct path of plugin

= 1.1.0 - 2015/03/27 =
* Feature - Added new global option - Post Display tab - Single Portfolio Template option of 1 or 2 column layout
* Feature - Added new post meta for Portfolio Item - Post Display - admin can override the global 1 or 2 Column layout option for post item.
* Dev - Defined new function 'a3_portfolio_single_get_layout_column' to get layout column for each single post item
* Dev - Updated header comment in portfolio template files from '/portfolio/' to '/portfolios/' for template over-rides from theme.
* Dev - Note! Updated single-portfolio.php template file for new Single Layout Column. Custom template over-rides will need updating
* Dev - Note! Updated content-single-portfolio.php template file for new feature Single Layout Column. Custom template over rides will need updating.
* Tweak - Tweak the Meta Box UI with checkbox switcher to toggle 1 Column | 2 Column layout

= 1.0.5 - 2015/03/18 =
* Tweak - Tested and tweaked for 100% compatibility with WordPress Version 4.1.1
* Tweak - Added jQuery.lazyLoadXT.onshow.addClass='lazy-hidden a3-portfolio-lazy-hidden'; into Portfolio script so that it still show the image for portfolio when site is using a3 lazy load
* Fix - Called wp_enqueue_script( 'jquery-masonry' ); when Portfolio page is showing to fix the javascript error that masonry script is not function

= 1.0.4 - 2015/01/28 =
* Tweak - Add New Release a3 Portfolio Dynamic Stylesheet Add-On plugin Card to the Add-Ons menu
* Tweak - Added an image to the a3 Portfolio Isotope Add-On Card on the Add-Ons menu

= 1.0.3 - 2015/01/26 =
* Tweak - Update background of portfolio mobile control to be the same background color of item expander.
* Dev - Defined 'a3_portfolio_cards_title_class' filter tag. Developers can filter to add new class name for Card Title on Card Layout
* Dev - Defined 'a3_portfolio_backend_launch_button_text' filter tag. Developers can filter to change Launch button text that shows inside the item Expander
* Fix - Change <code>parameter == undefined</code> to <code>typeof parameter === 'undefined'</code> inside portfolio script to fix JavaScript undefined parameter error

= 1.0.2 - 2015/01/12 =
* Fix - Fatal Error on first install on some installs. Hook the 'set_default_settings' function into 'init' action instead hook into 'register_activation_hook'
* Fix - Item main image caption not showing. Updated if <code>( ! is_array( $gallery ) )</code> to <code>if ( is_array( $gallery ) )</code>
* Credit - Thanks to wordpress.org memeber [jmdev](https://wordpress.org/support/profile/jmdev) for reporting the issue.

= 1.0.1 - 2015/01/05 =
* Feature - Add a3 Portfolio Isotope Add-On Free plugin download from the Add-On's menu
* Tweak - Updated the plugins description with details about the Isotope Add-On plugin
* Tweak - Link from the Isotope Add-On plugin to http://a3rev.com/my-account/free-downloads/
* Tweak - Add Registration and Login features to the /free-downloads/ page
* Tweak - Add License agreement for first download of a3 Portfolio Isotope plugin
* Tweak - Added effect mouse over on the card for Add-On page
* Tweak - Remove custom colour for Add-On submenu title
* Dev - Hooked framework code into 'plugins_loaded' action. Allows developers to add their child plugin admin menu as a a3 Portfolio sub menu
* Dev - Defined 'a3_portfolio_before_portfolio_enqueue_styles' action tag
* Dev - Defined 'a3_portfolio_after_portfolio_enqueue_styles' action tag
* Dev - Defined 'a3_portfolio_before_portfolio_enqueue_styles_rtl' action tag
* Dev - Defined 'a3_portfolio_after_portfolio_enqueue_styles_rtl' action tag
* Dev - Defined 'a3_portfolio_before_single_enqueue_styles' action tag
* Dev - Defined 'a3_portfolio_after_single_enqueue_styles' action tag
* Dev - Defined 'a3_portfolio_before_single_enqueue_styles_rtl' action tag
* Dev - Defined 'a3_portfolio_after_single_enqueue_styles_rtl' action tag

= 1.0.0 - 2014/12/16 =
* First working release


== Upgrade Notice ==

= 1.3.1 =
Important Maintenance Upgrade. 2 x major a3rev Plugin Framework Security Hardening Tweaks plus 1 https bug fix

= 1.3.0 =
Feature Upgrade. Added support for set custom portfolio permalinks on WordPress admin panel Settings > Permalinks menu, plus 2 Code Tweaks for full compatibility with WP v 4.2.2

= 1.2.1 =
Maintenance upgrade. Code tweaks for full compatibility with WordPress 4.2.0 plus 1 bug fix.

= 1.2.0 =
Major Feature upgrade - 2 new Show description font on Item Card features plus many code Tweaks and dev functions added for support new a3 Portfolios Shortcode plugin

= 1.1.1 =
Mobile user experience and interface Tweaks plus additional Dev functionality - Important! Be sure to Clear your site cache after updating and check the new Item Switcher Add-On.

= 1.1.0 =
Major feature ugrade - update now for 2 new features, 1 Tweak and 4 Developer related changes code changes.

= 1.0.5 =
Upgrade now for full compatibility with WordPress v 4.1.1 plus an a3 Lazy Load compatibility tweak and 1 important bug fix.

= 1.0.4 =
Upgrade now and check the plugins Add-on menu for new release a3 Portfolio Dynamic Stylesheets Add-on plugin listing.

= 1.0.3 =
Upgrade now for 1 Mobile display code tweak, 2 new dev filters and 1 bug fix

= 1.0.2 =
Upgrade now for 2 bug fixes. Fatal Error on fist activation on some installs and item main image caption not showing.

= 1.0.1 =
Upgrade now to gain access to the FREE Isotope Add-On plugin from the Add-On menu to greatly improve a3 Portfolio sort and filter.
