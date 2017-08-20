# Disable REST API Jailbreak

[![WordPress plugin](https://img.shields.io/wordpress/plugin/v/disable-rest-api-jailbreak.svg)](https://wordpress.org/plugins/disable-rest-api-jailbreak/)
[![WordPress](https://img.shields.io/wordpress/plugin/dt/disable-rest-api-jailbreak.svg)](https://wordpress.org/plugins/disable-rest-api-jailbreak/)
[![WordPress rating](https://img.shields.io/wordpress/plugin/r/disable-rest-api-jailbreak.svg)](https://wordpress.org/plugins/disable-rest-api-jailbreak/)
[![WordPress](https://img.shields.io/wordpress/v/disable-rest-api-jailbreak.svg)](https://wordpress.org/plugins/disable-rest-api-jailbreak/)
[![Build Status](https://travis-ci.org/TypistTech/disable-rest-api-jailbreak.svg?branch=master)](https://travis-ci.org/TypistTech/disable-rest-api-jailbreak)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/TypistTech/disable-rest-api-jailbreak/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/TypistTech/disable-rest-api-jailbreak/?branch=master)
[![PHP Versions Tested](http://php-eye.com/badge/typisttech/disable-rest-api-jailbreak/tested.svg)](https://travis-ci.org/TypistTech/disable-rest-api-jailbreak)
[![StyleCI](https://styleci.io/repos/21576423/shield?branch=master)](https://styleci.io/repos/21576423)
[![Dependency Status](https://gemnasium.com/badges/github.com/TypistTech/disable-rest-api-jailbreak.svg)](https://gemnasium.com/github.com/TypistTech/disable-rest-api-jailbreak)
[![License](https://poser.pugx.org/typisttech/disable-rest-api-jailbreak/license)](https://packagist.org/packages/typisttech/disable-rest-api-jailbreak)
[![Donate via PayPal](https://img.shields.io/badge/Donate-PayPal-blue.svg)](https://www.typist.tech/donate/disable-rest-api-jailbreak/)
[![Hire Typist Tech](https://img.shields.io/badge/Hire-Typist%20Tech-ff69b4.svg)](https://www.typist.tech/contact/)

Allow whitelisted REST routes to pass through [Disable REST API](https://wordpress.org/plugins/disable-json-api/) filters

<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->


- [Installation Instructions](#installation-instructions)
  - [Install the Nightly Version](#install-the-nightly-version)
    - [Via WP CLI](#via-wp-cli)
  - [Install the Developer Version](#install-the-developer-version)
- [Build from Source](#build-from-source)
- [Support!](#support)
  - [Donate via PayPal *](#donate-via-paypal-)
  - [Why don't you hire me?](#why-dont-you-hire-me)
  - [Want to help in other way? Want to be a sponsor?](#want-to-help-in-other-way-want-to-be-a-sponsor)
- [Code Style](#code-style)
- [Feedback](#feedback)
- [Change log](#change-log)
- [Security](#security)
- [Contributing](#contributing)
- [Credits](#credits)
- [License](#license)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

This repository is a development version of [Disable Rest API Jailbreak](https://wordpress.org/plugins/disable-rest-api-jailbreak/) intended to facilitate communication with developers. It is not stable and not intended for installation on production sites.

Bug reports and pull requests are welcome.

If you are not a developer or you'd like to receive the stable release version and automatic updates, install it via [WordPress.org](https://wordpress.org/plugins/disable-rest-api-jailbreak/) instead.

## Installation Instructions

If you are not a developer or you'd like to receive the stable release version and automatic updates, install it via [WordPress.org](https://wordpress.org/plugins/disable-rest-api-jailbreak/) instead.

### Install the Nightly Version

The `nightly` branch is built by TravisCI whenever the `master` branch is updated. Anything in the `nightly` branch is installable.

#### Via WP CLI

```bash
$ wp plugin install https://github.com/TypistTech/disable-rest-api-jailbreak/archive/nightly.zip --activate
```

### Install the Developer Version

To setup a developer workable version you should run these commands:

```bash
$ composer create-project --keep-vcs --no-install typisttech/disable-rest-api-jailbreak:dev-master
$ cd disable-rest-api-jailbreak
$ composer install
```

## Build from Source

This command build the plugin into `release/disable-rest-api-jailbreak.zip`.

```bash
$ composer build
```

## Support!

### Donate via PayPal [![Donate via PayPal](https://img.shields.io/badge/Donate-PayPal-blue.svg)](https://www.typist.tech/donate/disable-rest-api-jailbreak/)

Love disable-rest-api-jailbreak? Help me maintain Disable REST API Jailbreak, a [donation here](https://www.typist.tech/donate/disable-rest-api-jailbreak/) can help with it.

### Why don't you hire me?

Ready to take freelance WordPress jobs. Contact me via the contact form [here](https://www.typist.tech/contact/) or, via email [info@typist.tech](mailto:info@typist.tech)

### Want to help in other way? Want to be a sponsor?

Contact: [Tang Rufus](mailto:tangrufus@gmail.com)

## Code Style

We test all PHP files against [PSR-2: Coding Style Guide](http://www.php-fig.org/psr/psr-2/) and part of the [WordPress coding standard](https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards).

Check the code style with ``$ composer check-style`` and fix it with ``$ composer fix-style``.

## Feedback

**Please provide feedback!** We want to make this library useful in as many projects as possible.
Please submit an [issue](https://github.com/TypistTech/disable-rest-api-jailbreak/issues/new) and point out what you do and don't like, or fork the project and make suggestions.
**No issue is too small.**

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security

If you discover any security related issues, please email disable-rest-api-jailbreak@typist.tech instead of using the issue tracker.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) and [CONDUCT](.github/CONDUCT.md) for details.

## Credits

[Disable Rest API Jailbreak](https://github.com/TypistTech/disable-rest-api-jailbreak) is a [Typist Tech](https://www.typist.tech) project and maintained by [Tang Rufus](https://twitter.com/Tangrufus), freelance developer for [hire](https://www.typist.tech/contact/).

Special thanks to [Dave McHale](http://www.binarytemplar.com/) whose [Disable REST API](https://wordpress.org/plugins/disable-json-api/) plugin make this project possible.

Full list of contributors can be found [here](https://github.com/TypistTech/disable-rest-api-jailbreak/graphs/contributors).

## License

[Disable REST API Jailbreak](https://github.com/TypistTech/disable-rest-api-jailbreak) is licensed under the GPLv2 (or later) from the [Free Software Foundation](http://www.fsf.org/).
Please see [License File](LICENSE) for more information.
