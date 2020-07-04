# Laravel Blog

Add a blog to your Laravel Application 

### Installation 

`$ composer require brucebrophy/laravel-blog`

`$ php artisan vendor:publish --provider='BruceBrophy\LaravelBlog\BlogServiceProvider'`

Run the above command to publish migrations and config



### Publish Blog Views
`$ php artisan blog:publish --ui={tailwind || bootstrap}`

### Testing

You can run the tests with:

```bash
vendor/bin/phpunit
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.