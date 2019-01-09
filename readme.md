# Performer

<p align="center">
<a href="https://packagist.org/packages/bbsnly/performer"><img src="https://poser.pugx.org/bbsnly/performer/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/bbsnly/performer"><img src="https://poser.pugx.org/bbsnly/performer/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/bbsnly/performer"><img src="https://poser.pugx.org/bbsnly/performer/license.svg" alt="License"></a>
</p>

This package helps you to understand better how efficient your code is.


## Table of Contents

- [Install](#install)
- [Requirements](#requirements)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)


## Install

Require this package with composer.
```shell
composer require bbsnly/performer
```


## Requirements

* `php >= 7.2`


## Usage

```php
$performer = new \Bbsnly\Performer\Performer;

$performer->run(function () {
    // do something
});
```


## Contributing

Thank you for considering contributing to the Performer!


## License

The Performer is open-sourced software licensed under the
[MIT license](http://opensource.org/licenses/MIT).