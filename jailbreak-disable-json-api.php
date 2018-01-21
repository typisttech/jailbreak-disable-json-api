<?php
/**
 * Jailbreak Disable REST API
 *
 * Allow whitelisted REST routes to pass through Disable REST API filters.
 *
 * @package   TypistTech\JailbreakDRA
 *
 * @author    Typist Tech <jailbreak-disable-json-api@typist.tech>
 * @copyright 2017-2018 Typist Tech
 * @license   GPL-2.0-or-later
 *
 * @see       https://www.typist.tech/projects/jailbreak-disable-json-api
 * @see       https://wordpress.org/plugins/jailbreak-disable-json-api
 */

/**
 * Plugin Name:     Jailbreak Disable REST API
 * Plugin URI:      https://www.typist.tech/projects/jailbreak-disable-json-api
 * Description:     Allow whitelisted REST routes to pass through Disable REST API filters
 * Version:         0.1.1
 * Author:          Typist Tech
 * Author URI:      https://www.typist.tech/
 * License:         GPL-2.0-or-later
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.txt
 */

declare(strict_types=1);

namespace TypistTech\JailbreakDRA;

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
        'jailbreak_dra_is_whitelisted',
        is_pattern_matched(get_whitelist(), get_current_rest_route()),
        get_current_rest_route(),
        get_whitelist()
    );
}

/**
 * Perform regular expression matches.
 *
 * @param string[] $patterns The patterns to search for.
 * @param string   $subject  The input string.
 *
 * @return bool TRUE if any of the patterns matched.
 */
function is_pattern_matched(array $patterns, string $subject): bool
{
    return array_reduce($patterns, function (bool $isMatched, string $pattern) use ($subject) {
        return $isMatched || preg_match('@^' . $pattern . '$@i', $subject);
    }, false);
}

/**
 * Whitelist getter.
 *
 * @return string[]
 */
function get_whitelist(): array
{
    return (array) apply_filters(
        'jailbreak_dra_whitelist',
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
    return defined('JAILBREAK_DRA_WHITELIST') ?
        (array) JAILBREAK_DRA_WHITELIST :
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
