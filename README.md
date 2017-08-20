# Jailbreak Disable REST API

[![WordPress plugin](https://img.shields.io/wordpress/plugin/v/jailbreak-disable-json-api.svg)](https://wordpress.org/plugins/jailbreak-disable-json-api/)
[![WordPress](https://img.shields.io/wordpress/plugin/dt/jailbreak-disable-json-api.svg)](https://wordpress.org/plugins/jailbreak-disable-json-api/)
[![WordPress rating](https://img.shields.io/wordpress/plugin/r/jailbreak-disable-json-api.svg)](https://wordpress.org/plugins/jailbreak-disable-json-api/)
[![WordPress](https://img.shields.io/wordpress/v/jailbreak-disable-json-api.svg)](https://wordpress.org/plugins/jailbreak-disable-json-api/)
[![Build Status](https://travis-ci.org/TypistTech/jailbreak-disable-json-api.svg?branch=master)](https://travis-ci.org/TypistTech/jailbreak-disable-json-api)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/TypistTech/jailbreak-disable-json-api/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/TypistTech/jailbreak-disable-json-api/?branch=master)
[![PHP Versions Tested](http://php-eye.com/badge/typisttech/jailbreak-disable-json-api/tested.svg)](https://travis-ci.org/TypistTech/jailbreak-disable-json-api)
[![StyleCI](https://styleci.io/repos/21576423/shield?branch=master)](https://styleci.io/repos/21576423)
[![Dependency Status](https://gemnasium.com/badges/github.com/TypistTech/jailbreak-disable-json-api.svg)](https://gemnasium.com/github.com/TypistTech/jailbreak-disable-json-api)
[![License](https://poser.pugx.org/typisttech/jailbreak-disable-json-api/license)](https://packagist.org/packages/typisttech/jailbreak-disable-json-api)
[![Donate via PayPal](https://img.shields.io/badge/Donate-PayPal-blue.svg)](https://www.typist.tech/donate/jailbreak-disable-json-api/)
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

This repository is a development version of [Jailbreak Disable REST API](https://wordpress.org/plugins/jailbreak-disable-json-api/) intended to facilitate communication with developers. It is not stable and not intended for installation on production sites.

Bug reports and pull requests are welcome.

If you are not a developer or you'd like to receive the stable release version and automatic updates, install it via [WordPress.org](https://wordpress.org/plugins/jailbreak-disable-json-api/) instead.

## Installation Instructions

If you are not a developer or you'd like to receive the stable release version and automatic updates, install it via [WordPress.org](https://wordpress.org/plugins/jailbreak-disable-json-api/) instead.

### Install the Nightly Version

The `nightly` branch is built by TravisCI whenever the `master` branch is updated. Anything in the `nightly` branch is installable.

#### Via WP CLI

```bash
$ wp plugin install https://github.com/TypistTech/jailbreak-disable-json-api/archive/nightly.zip --activate
```

### Install the Developer Version

To setup a developer workable version you should run these commands:

```bash
$ composer create-project --keep-vcs --no-install typisttech/jailbreak-disable-json-api:dev-master
$ cd jailbreak-disable-json-api
$ composer install
```

## Build from Source

This command build the plugin into `release/jailbreak-disable-json-api.zip`.

```bash
$ composer build
```

## Support!

### Donate via PayPal [![Donate via PayPal](https://img.shields.io/badge/Donate-PayPal-blue.svg)](https://www.typist.tech/donate/jailbreak-disable-json-api/)

Love jailbreak-disable-json-api? Help me maintain Jailbreak Disable REST API, a [donation here](https://www.typist.tech/donate/jailbreak-disable-json-api/) can help with it.

### Why don't you hire me?

Ready to take freelance WordPress jobs. Contact me via the contact form [here](https://www.typist.tech/contact/) or, via email [info@typist.tech](mailto:info@typist.tech)

### Want to help in other way? Want to be a sponsor?

Contact: [Tang Rufus](mailto:tangrufus@gmail.com)

## Code Style

We test all PHP files against [PSR-2: Coding Style Guide](http://www.php-fig.org/psr/psr-2/) and part of the [WordPress coding standard](https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards).

Check the code style with ``$ composer check-style`` and fix it with ``$ composer fix-style``.

## Feedback

**Please provide feedback!** We want to make this library useful in as many projects as possible.
Please submit an [issue](https://github.com/TypistTech/jailbreak-disable-json-api/issues/new) and point out what you do and don't like, or fork the project and make suggestions.
**No issue is too small.**

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security

If you discover any security related issues, please email jailbreak-disable-json-api@typist.tech instead of using the issue tracker.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) and [CONDUCT](.github/CONDUCT.md) for details.

## Credits

[Jailbreak Disable REST API](https://github.com/TypistTech/jailbreak-disable-json-api) is a [Typist Tech](https://www.typist.tech) project and maintained by [Tang Rufus](https://twitter.com/Tangrufus), freelance developer for [hire](https://www.typist.tech/contact/).

Special thanks to [Dave McHale](http://www.binarytemplar.com/) whose [Disable REST API](https://wordpress.org/plugins/disable-json-api/) plugin make this project possible.

Full list of contributors can be found [here](https://github.com/TypistTech/jailbreak-disable-json-api/graphs/contributors).

## License

[Jailbreak Disable REST API](https://github.com/TypistTech/jailbreak-disable-json-api) is licensed under the GPLv2 (or later) from the [Free Software Foundation](http://www.fsf.org/).
Please see [License File](LICENSE) for more information.
