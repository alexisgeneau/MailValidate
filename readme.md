## MailValidate ##

### Installation ###

Add MailValidate to your composer.json file to require MailValidate :
```
    require : {
        "alexisgeneau/mailvalidate": "dev-master"
    }
```

Update Composer :
```
    composer update
```

The next step is to add the service provider to config/app.php :
```
    Alexisgeneau\MailValidate\MailValidateServiceProvider::class,
```

### Publish ###

The next step is to publish files in your application with :
```
    php artisan vendor:publish --force
```

Warning ! This command will replace 'AuthController' in your application to edit PostLogin function.