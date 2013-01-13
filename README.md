Melody Validation
=================

[![Build Status](https://secure.travis-ci.org/marcelsud/melody-validation.png)](http://travis-ci.org/marcelsud/melody-validation)

Melody Validation is a set of validation rules with a easy way to customize and test your validations.

```php
<?php
use Melody\Validation\Validator;
use Melody\Validation\ConstraintsBuilder as c;

require_once __DIR__.'/../vendor/autoload.php';
```

Validate using both Validator or Constraint validate method.
```php
$email = "test@mail.com";

$validator = new Validator();
$validator->validate($email, c::email()); //true

$violations = $validator->getViolations(); //List all violation messages
```

Reuse the constraints as you wish.
```php
$username = "valid@username.com";
$validEmail = c::email();

//Reusing $validEmail constraint
$validUsername = $validEmail->add(c::maxLength(15)->minLength(5));

$validator->validate($username, $validUsername);//true
```

Valid Password Example:
```php
$password = "pass@2012";
$validPassword = c::length(6, 12) //Minlength 6, Maxlength 12
    ->containsSpecial(1) //at least 1 special character
    ->containsLetter(3) //at least 3 letters
    ->containsDigit(2); //at least 2 digits

$validator->validate($password, $validPassword); //true
```
