# Quickstart guide

## General info
Just follow simple steps:
* go to [download page](https://github.com/awslabspl/diagnostics-php/releases),
* download **latest** release,
* unzip source to folder thats accessible from webserver ( consult your webservers' manual ).
* edit `$project_config_file` to reflect your current setup,
* from your project, just load desired class(-es).

## How to load classes in PHP
This software makes extensive use of [autoloading](https://www.php.net/manual/en/language.oop5.autoload.php) feature.
So, there is no need to do extensive "workout": just follow the simple ( language-standard ) way:

```phpt
$class = new ClassInstance();
```
and than you will be able to access all class's members like this:
```phpt
$class->memberName();
```