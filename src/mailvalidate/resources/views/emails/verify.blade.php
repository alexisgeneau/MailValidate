<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Verify your email</h2>

        <div>
            Thanks for th registration. To use your account, you have to validate your email address by clicking on the link.<br/>
            <a href="{{ URL::to('register/verify/' . $code) }}">Click here to validate your account.</a>

        </div>

    </body>
</html>