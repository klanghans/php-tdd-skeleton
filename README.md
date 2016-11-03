# PHP TDD Skeleton

A simple TDD skeleton that lets you jump right into TestDrivenDevelopment with PHP.

##Instalation
```
composer install
```
##Documentation

 - Please have a look at the included ExampleTest for how to start a Test
 - if you want to recreate the composer autoloader change:
 
``` 
     "autoload": {
         "psr-4": {
             "Example\\": "src/Example"
         }
     },
``` 
    
  to include your namespace:directory mapping and run

```
composer dump-autoload
```

## Contribution
 Please open an issue if you encounter an error or have a suggestion. Pull requests are welcome.
