![Packagist Version](https://img.shields.io/packagist/v/stephan-strate/monolog-discord)
[![GitHub license](https://img.shields.io/github/license/stephan-strate/monolog-discord)](https://github.com/stephan-strate/monolog-discord/blob/master/LICENSE)
![GitHub Workflow Status (branch)](https://img.shields.io/github/workflow/status/stephan-strate/monolog-discord/CI/master?label=ci)

# Monolog Discord Handler

Simple monolog handler to send your logs to Discords webhooks. You may ask yourself "Why another Discord handler? There are already plenty out there..." and you are right. There are [lefuturiste/monolog-discord-handler](https://github.com/lefuturiste/monolog-discord-handler) and [den1008/monolog-discord-handler](https://github.com/den1008/monolog-discord-handler) to only name two of them. What they all have in common is, they require [guzzlehttp](https://github.com/guzzle/guzzle). Don't get me wrong. guzzlehttp is a great library, but kinda huge for sending one simple request to Discords webhooks. Unfortunately the existing Discord handlers dependencies are also not really up to date. With help of dependabot I will keep the handler up to date and release regular maintenance updates.

## Installation

Using composer:

```
$ composer require stephan-strate/monlog-discord
```

## Usage

### Create handler

The webhook url can be obtained by following this [tutorial](https://support.discord.com/hc/en-us/articles/228383668-Intro-to-Webhooks) by discord.

```php
$handler = new Strate\Monolog\DiscordHandler('https://discord.com/api/webhooks/{webhook.id}/{webhook.token}', Logger::WARNING)
```

### Add handler to Monolog

```php
$log = new Monolog\Logger();
$log->pushHandler(handler);
```

## Help & Donate

I am very curious about projects that use my libraries. Please drop me a short message about what you use the library for. You can find my contact information on my profile (LinkedIn, E-mail).

If this project saved you time and money or you just appreciate what I am doing, please consider sponsoring me 😊

## Acknowledgment

This library was mainly created to resolve conflicting dependencies, which occured with my plugin [stephan-strate/grav-plugin-logger-channels](https://github.com/stephan-strate/grav-plugin-logger-channels) in combination with some other plugins of the [Grav](https://getgrav.org/) ecosystem.
