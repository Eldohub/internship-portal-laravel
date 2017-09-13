
[![Build Status](https://travis-ci.org/Eldohub/internship-portal-laravel.svg?branch=master)](https://travis-ci.org/Eldohub/internship-portal-laravel)


# EldoHub Internship Portal
This is the management account for all interns which tracks their KPIs and can be used to showcase in their portfolios

## Installation

**Pre-installation info**

The Laravel framework requires:

- PHP >= 5.4
- MCrypt PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

As of PHP 5.5, some OS distributions may require you to manually install the PHP JSON extension. When using Ubuntu, this can be done via `apt-get install php5-json`.


1. Clone or download from `https://github.com/Eldohub/internship-portal-laravel` 

2. From your installation folder, run;
```bash
$ composer install

$ npm install

$ npm run dev

$ php artisan migrate --seed

or

//If you already an instance of the app's db
$ php artisan migrate:refresh --seed
```

The above commands installs php dependency packages + Node packages. 
`npm run dev` compiles the `semantic-ui` **.js** and **.css** files

## Collaboration

Participation guidelines are laid out on our [Contribution Guide](CONTRIBUTING.md). Also please refer to our [Code of Conduct](CODE_OF_CONDUCT.md).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.




