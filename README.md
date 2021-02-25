### SAVEMYEXPENSES

SavaMyExpenses is a web app use for saving and keeping track of expenses by a user.

REQUIREMENTS
------------
The minimum requirement by this project is Web server that supports PHP 5.6.0 and upward.

RUNNING THE APPLICATION
------------------------

### CLONE THE REPOSITORY 
1. https://github.com/AGidado/ITC
2. Open Terminal.
3. Change the current working directory to the location where you want to clone the project.
4. Copy and pest the following:
~~~
git clone https://github.com/AGidado/ITC.git
~~~

### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install project dependencies by running the following command:

~~~
composer install
~~~

### DATABASE

Edit the file `config/db.php` with real data, for example:

```php
$db = [
        'class' => 'yii\db\Connection',
        'dsn' => 'pgsql:host=localhost;port=5432;dbname=DatabaseName',
        'username' => 'DatabaseUsername',
        'password' => 'DatabasePassword',
        'charset' => 'utf8',
];
``` 
**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.
- Check and edit a file `db.php` in the `config/` directory to customize your application as required.

```
<?php
$db = [
        'class' => 'yii\db\Connection',
        'dsn' => 'pgsql:host=localhost;port=5432;dbname=expenses',
        'username' => 'postgres',
        'password' => 'postgres',
        'charset' => 'utf8',
];
``` 
### Migration
After connecting to database, run the following command to create table schemas:
~~~
php yii migrate
~~~

You can then start the application using the following command:

~~~
php yii serve
~~~
Open your browser and the type the following addres :

~~~
localhost:8080
~~~

TESTING
-------

Tests are located in `tests` directory. They are developed with [Codeception PHP Testing Framework](http://codeception.com/).
By default there are 3 test suites:

- `unit`
- `functional`
- `acceptance`

Tests can be executed by running

```
vendor/bin/codecept run
```

The command above will execute unit and functional tests. Unit tests are testing the system components, while functional
tests are for testing user interaction. Acceptance tests are disabled by default as they require additional setup since
they perform testing in real browser. 

