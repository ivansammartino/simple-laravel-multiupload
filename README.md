# Laravel Simple Multiupload Example

A basic Laravel 5.5 image uploader based on [Blueimp jQuery File Uploader](https://github.com/blueimp/jQuery-File-Upload), with database storage and deletion.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. Please avoid running in production environment since no authentication/authorization layer is provided.

### Prerequisites

Please refer to [Laravel 5.5](https://laravel.com/docs/5.5) requirements.

### Installing

Download or clone the repository, then open terminal and run:

```
composer install
```

All required packages will be installed

### Database

Rename `.env.example` to `.env` and fill in the required Database fields. Then run this command in terminal:

```
php artisan migrate
```

All required database tables will be created

### Key Generation

Previous file `.env` does not come with a predefined `APP_KEY` value. Please generate it using this command in terminal:

```
php artisan key:generate
```

### Usage

Open terminal and start Laravel development server running:

```
php artisan serve
```

Of course you can configure your own AMP server (I love [Laragon](https://laragon.org/) on Windows)

Then open your browser, go to your brand new application and start uploading images :-)

## Built With

* [Laravel](https://laravel.com/)
* [Bootstrap](https://getbootstrap.com/)
* [Blueimp jQuery File Uploader](https://github.com/blueimp/jQuery-File-Upload)
* [gargron/fileupload](https://github.com/Gargron/fileupload)
* [bkwld/croppa](https://github.com/BKWLD/croppa)

Acknowledgments go to these tools and packages that make a developer's life easier ;-)

## Contributing

Any contribution for bug fix or improvements is well appreciated! Please notice that this is just a starting example: I can't guarantee support or answering issues, sorry

## Authors

* **Ivan Sammartino** - [IWStudio](https://iwstudio.it)

## License

This project is licensed under the [MIT](https://choosealicense.com/licenses/mit/) License - see the [LICENSE.md](LICENSE.md) file for details