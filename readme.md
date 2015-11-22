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

### Migrate ###

Run migrate command to add column on users in your database :

```
    php artisan migrate
```

Add 'confirmation_token' and 'confirmed' in your $fillable on user model.

### Routes ###

To have mail validation add this lines in your routes.php
```
    Route::get('register/verify/{confirmationToken}', [
        'as' => 'confirmation_path',
        'uses' => 'RegistrationController@confirm'
    ]);
```
