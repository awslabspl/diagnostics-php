# Quickstart guide

## If you are a user....
Just follow simple steps:
* go to [download page](https://github.com/awslabspl/diagnostics-php/releases),
* download **latest** release (marked as stable),
* unzip source to folder thats accessible from webserver ( consult your webservers' manual ).
* edit `$project_config_file` to reflect your current setup,
* from your project, just load desired class(-es).

### How to load classes in PHP
This software makes extensive use of [autoloading](https://www.php.net/manual/en/language.oop5.autoload.php) feature.
So, there is no need to do extensive "workout": just follow the simple ( language-standard ) way:

```phpt
$class = new ClassInstance();
```
and than you will be able to access all class's members like this:
```phpt
$class->memberName();
```

## If you are a developer...
### Enviroment setup:
* Download, install and activate [PHPStorm](https://www.jetbrains.com/phpstorm/download/#section=mac),
* [Download](https://github.com/awslabspl/phpstormsettings/archive/1.0.zip) and [import](https://www.jetbrains.com/help/phpstorm/sharing-your-ide-settings.html#import-export-settings-6-procedure), downloaded settings file(-s),
* [Clone project repo](https://www.jetbrains.com/help/webstorm/manage-projects-hosted-on-github.html#clone-from-GitHub),
* **Create new branch** following simple naming scheme:
    * if you want to work on things mentioned in an issue ( listed on GH ) -> name your branch `fix-#issue_ID`,
    * if you want to work on things **not** mentioned in an issue -> `dev-<description_of_changes`,
* make changes,
* if you are happy with the changes, open PR and wait.....

## JS packages

`Diagnostics-php` uses a lot of JS packages. Once you clone the project into PhpStorm, you will be prompted to install these; if you do not, **you will not be able to fully develop your code**.