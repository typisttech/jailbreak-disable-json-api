=== Disable REST API Jailbreak ===
Contributors: typisttech, tangrufus
Donate link: https://www.typist.tech/donate/disable-rest-api-jailbreak/
Tags: disable-json-api, admin, JSON, api, rest, rest-api
Requires at least: 4.7
Tested up to: 4.8
Stable tag: 0.1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Allow whitelisted REST routes to pass through [Disable REST API](https://wordpress.org/plugins/disable-json-api/) filters

== Description ==

Allow whitelisted REST routes to pass through [Disable REST API](https://wordpress.org/plugins/disable-json-api/) filters

= Define REST route whitelist =

Define 'DISABLE_REST_API_JAILBREAK_WHITELIST' constant in `wp-config.php`

```
define('DISABLE_REST_API_JAILBREAK_WHITELIST', [
    '/wp/v2/posts',
    '/wp/v2/tags',
    '/wp/v2/tags/1234',
]);

/* That's all, stop editing! Happy blogging. */
```

Note: `/wp/v2/tags/` and `/wp/v2/tags/1234` are different. You have to define both or use filters.

= Filters =

* `dra_jailbreak_is_whitelisted`

Example:
```
add_filter( 'dra_jailbreak_is_whitelisted', 'example_callback', 10, 3);

function example_callback(bool $isWhitelisted, string $currentRESTRoute, array $whitelist): bool {
    // Perform your checks and return a boolean
    return $isWhitelisted;
}
```

* `dra_jailbreak_whitelist`

Example:
```
add_filter( 'dra_jailbreak_whitelist', 'example_callback');

function example_callback(array $whitelist): array {
     // Modify $whitelist and return string[]
    return $whitelist;
}
```

= Things You Need to Know =

* You need PHP `7.0` or later
* You need WordPress `4.7` or later
* You need [Disable REST API](https://wordpress.org/plugins/disable-json-api/) `1.3` or later
* This plugin was not built by '[Dave McHale](http://www.binarytemplar.com/), Disable REST API's author
* If you have a legitimate need of the REST API, don't use  not need `Disable REST API` at all. See [Dave McHale's comment](https://wordpress.org/support/topic/restrict-plug-in-use-of-rest-api/#post-9367800)

> If you like the plugin, feel free to [rate it](https://wordpress.org/support/plugin/disable-rest-api-jailbreak/reviews/#new-post) or [donate via PayPal](https://www.typist.tech/donate/disable-rest-api-jailbreak/). Thanks a lot! :)

= For Bloggers =

If you have written an article about `Disable REST API Jailbreak`, do [let me know](https://www.typist.tech/contact/). For any questions, shoot me an email at [info@typist.tech](mailto:info@typist.tech)

= For Developers =

Disable REST API Jailbreak is open source and hosted on [GitHub](https://github.com/TypistTech/disable-rest-api-jailbreak). Feel free to make [pull requests](https://github.com/TypistTech/disable-rest-api-jailbreak/pulls).

= Who make this plugin? =

[Tang Rufus](mailto:info@typist.tech), a freelance developer for hire.
I make [Typist Tech](https://www.typist.tech/) also.

= Support =

To save time so that we can spend it on development, please read the plugin's [FAQs](https://wordpress.org/plugins/disable-rest-api-jailbreak/faq/) first.
Before requesting support, and ensure that you have updated disable-rest-api-jailbreak and WordPress to the latest released version and installed PHP 7 or later.

We hang out in the WordPress [support forum](https://wordpress.org/support/plugin/disable-rest-api-jailbreak) for this plugin.

If you know what `GitHub` is, use [GitHub issues](https://github.com/TypistTech/disable-rest-api-jailbreak/issues) instead.

== Installation ==

= Via WordPress admin dashboard =

1. Log in to your site’s Dashboard (e.g. www.your-domain.com/wp-admin)
1. Click on the `Plugins` tab in the left panel, then click “Add New”
1. Search for `Disable REST API Jailbreak` and the latest version will appear at the top of the list of results
1. Install it by clicking the `Install Now` link
1. When installation finishes, click `Activate Plugin`
1. Define 'DISABLE_REST_API_JAILBREAK_WHITELIST' constant in `wp-config.php`

= Via Manual Upload =

1. Download the plugin from [wordpress.org](https://downloads.wordpress.org/plugin/disable-rest-api-jailbreak.zip)
1. Unzip it
1. Upload it to `wp-content/plugins/`
1. Go to the WordPress plugin menu and activate it
1. Define 'DISABLE_REST_API_JAILBREAK_WHITELIST' constant in `wp-config.php`

= Via WP CLI =

1. `$ wp plugin install disable-rest-api-jailbreak --activate`
1. Define 'DISABLE_REST_API_JAILBREAK_WHITELIST' constant in `wp-config.php`

== Frequently Asked Questions ==

= What version of PHP do I need? =

PHP `7.0` or later.

= What version of WordPress do I need? =

WordPress `4.7` or later.

= What to do when `Parse error: syntax error`? =

If you encountered this error:

`Parse error: syntax error, unexpected ‘:’, expecting ‘;’ or ‘{‘ in wp-content/plugins/disable-rest-api-jailbreak/src/disable-rest-api-jailbreak.php on line XX`

You probably running on a old version of PHP. Upgrade your server to PHP `7.0` or later.

= Don't know how to update PHP? =

* Contact you hosting company
* Switch to a better hosting such as [WP Engine](https://www.typist.tech/go/wp-engine-isnt-business-worth-29-month/) or [Kinsta](https://www.typist.tech/go/kinsta-staging-environment/)
* Hire me [https://www.typist.tech/contact](https://www.typist.tech/contact)

= Will you support older versions of PHP or WordPress? =

Depends. I accept this kind of custom coding jobs. However, I'll reject if the requirement doesn't make sense.
Shoot me an email at [info@typist.tech](mailto:info@typist.tech) or use this [contact form](https://www.typist.tech/contact/).

= Is this plugin written by [Dave McHale](http://www.binarytemplar.com/), Disable REST API's author? =

No.
This plugin is a [Typist Tech](https://www.typist.tech) project.

= How to get support? =

Use the WordPress support forum for this plugin at [https://wordpress.org/support/plugin/disable-rest-api-jailbreak](https://wordpress.org/support/plugin/disable-rest-api-jailbreak).

Make sure you have read the plugin's FAQs at [https://wordpress.org/plugins/disable-rest-api-jailbreak/faq/](https://wordpress.org/plugins/disable-rest-api-jailbreak/faq/). And, updated disable-rest-api-jailbreak and WordPress to the latest released version before asking questions.

If you know what `GitHub` is, use [GitHub issues](https://github.com/TypistTech/disable-rest-api-jailbreak/issues) instead.

= How can I support this plugin? =

If you like the plugin, feel free to:

* Give us a 5-star review on [WordPress.org](https://wordpress.org/support/plugin/disable-rest-api-jailbreak/reviews/#new-post)
* Donate via [PayPal](https://www.typist.tech/donate/disable-rest-api-jailbreak/). Thanks a lot! :)

Besides, `disable-rest-api-jailbreak` is open source and hosted on [GitHub](https://github.com/TypistTech/disable-rest-api-jailbreak). Feel free to make pull requests.

Last but not least, you can hire me. Shoot me an email at [info@typist.tech](mailto:info@typist.tech) or use this [contact form](https://www.typist.tech/contact/).

= What if I want more? =

Hire me!

Shoot me an email at [info@typist.tech](mailto:info@typist.tech) or use this [contact form](https://www.typist.tech/contact/).

== Changelog ==

Full change log available at [GitHub](https://github.com/TypistTech/disable-rest-api-jailbreak/blob/master/CHANGELOG.md)

= 0.1.0 =

* Initial release
