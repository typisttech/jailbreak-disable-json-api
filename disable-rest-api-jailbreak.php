<?php
/**
 * Disable REST API Jailbreak
 *
 * Allow whitelisted REST routes to pass through Disable REST API filters
 *
 * @package   TypistTech\DRAJailbreak
 *
 * @author    Typist Tech <disable-rest-api-jailbreak@typist.tech@typist.tech>
 * @copyright 2017 Typist Tech
 * @license   GPL-2.0+
 *
 * @see       https://www.typist.tech/projects/disable-rest-api-jailbreak
 * @see       https://wordpress.org/plugins/disable-rest-api-jailbreak
 */

/**
 * Plugin Name:     Disable REST API Jailbreak
 * Plugin URI:      https://www.typist.tech/projects/disable-rest-api-jailbreak
 * Description:     Allow whitelisted REST routes to pass through Disable REST API filters
 * Version:         0.1.0
 * Author:          Typist Tech
 * Author URI:      https://www.typist.tech/
 * License:         GPL-2.0+
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.txt
 */

declare(strict_types=1);

namespace TypistTech\DRAJailbreak;

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

add_filter('rest_authentication_errors', __NAMESPACE__ . '\bypass_dra_if_whitelisted', 5);

/**
 * Remove 'DRA_only_allow_logged_in_rest_access' if current REST route is whitelisted.
 *
 * @param \WP_Error|null|bool $access WP_Error if authentication error, null if authentication method wasn't used, true
 *                                    if authentication succeeded.
 *
 * @return \WP_Error|null|bool
 */
function bypass_dra_if_whitelisted($access)
{
    if (is_current_rest_route_found() && is_whitelisted()) {
        remove_filter('rest_authentication_errors', 'DRA_only_allow_logged_in_rest_access');
    }

    return $access;
}

/**
 * Whether current REST route is whitelisted.
 *
 * @return bool
 */
function is_whitelisted(): bool
{
    return (bool) apply_filters(
        'dra_jailbreak_is_whitelisted',
        in_array(get_current_rest_route(), get_whitelist(), true),
        get_current_rest_route(),
        get_whitelist()
    );
}

/**
 * Whitelist getter.
 *
 * @return string[]
 */
function get_whitelist(): array
{
    return (array) apply_filters(
        'dra_jailbreak_whitelist',
        get_whitelist_constant()
    );
}

/**
 * Whitelist constant getter.
 *
 * @return string[]
 */
function get_whitelist_constant(): array
{
    return defined('DISABLE_REST_API_JAILBREAK_WHITELIST') ?
        (array) DISABLE_REST_API_JAILBREAK_WHITELIST :
        [];
}

/**
 * Whether current REST route can be determined.
 *
 * @return bool
 */
function is_current_rest_route_found(): bool
{
    return ! empty(get_current_rest_route());
}

/**
 * Current REST route getter.
 *
 * @return string
 */
function get_current_rest_route(): string
{
    return empty($GLOBALS['wp']->query_vars['rest_route']) ?
        '' :
        untrailingslashit($GLOBALS['wp']->query_vars['rest_route']);
}
