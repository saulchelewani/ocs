# OCS
## Installation
1. Install via composer
```
composer require tnmdev/ocs
```
 2. Publish config
```
php artisan vendor:publish --provider=TNM\OCS\OcsServiceProvider
```
3. Update OCS base url in `/config/ocs.php`


## Testing
 ```
phpunit tests
```
