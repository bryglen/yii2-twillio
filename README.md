Yii 2 Twillio
===========================
twillio for yii 2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist bryglen/yii2-twillio "*"
```

or add

```
"bryglen/yii2-twillio": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, you should configure it in the application configuration like the following,

```php
'components' => [
    'twillio' => [
        'class' => 'bryglen\yii2-twillio\Twillio',
        'sid' => 'your_sid',
        'token' => 'your_token',
    ]
]
```

** Creating a customer

```php
$twillio = Yii::$app->twillio;
$message = $twillio->getClient()->account->messages->sendMessage(
    '9991231234', // From a valid Twilio number
    '8881231234', // Text this number
    "Hello monkey!"
)

print $message->sid;
```
