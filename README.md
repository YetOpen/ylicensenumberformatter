YLicenseNumberFormatter
=======================

Yii formatter to display a human readable license code

Consider you have in your database a license number in string format but without separators, but you want to display it with some dashes to the user in order to improve readability.
Say:
    123456789012 -> 1234-5678-9012

Installation
------------
Unpack YLicenseNumberFormatter to your protected/extensions, edit your config file and add the following:
``` php
...
    'components'=>array(
    ...
        'format' => array(
            ...
            'class' => 'ext.YLicenseNumberFormatter',
```

Usage
-----
In your view:
```php
array(
    'name'=>'yourFieldName',
    'type'=>'licenseNumber',
),
```
