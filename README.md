# LaravelTestPackage
trying out laravel package

_____

## installing the package
in your laravel app's `composer.json` add
```json
"repositories": [
        {
            "type":"vcs",
            "url": "https://github.com/Yogesh-B/LaravelTestPackage.git"
        }
    ],
```
then,
`composer require yogeshb/laraveltestpackage:dev-main --prefer-dist`

and then package is ready to use

____
- defined alias successfully....anyways..!!
## how to use it?
```php
TestPackage::getPattern(3,'&');
```
____
## further improvements
- we have not utilized the `ServiceProvider`. Get the print_character from the config/env.
!!config not being published...priority work!!
- complete other pattern function logic😅


