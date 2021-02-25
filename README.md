### SAVEMYEXPENSES

SavaMyExpenses is a web app use for saving and keeping track of expenses by a user.

REQUIREMENTS
------------
The minimum requirement by this project is Web server that supports PHP 5.6.0 and upward.

RUNNING THE APPLICATION
------------------------

### CLONE THE REPOSITORY 
1. On GitHub, navigate to the main page of the repository (https://github.com/AGidado/ITC)
2. Above the list of files, click Code.
3. To clone the repository using HTTPS, under "Clone with HTTPS", click Copy sign. To clone the repository using an SSH   key, including a certificate issued by your organization's SSH certificate authority, click Use SSH, then click Copy sign. To clone a repository using GitHub CLI, click Use GitHub CLI, then click copy sign.
4. Open Git Bash or Terminal of your text editor.
5. Change the current working directory to the location where you want the cloned directory.
6. Type git clone, and then paste the URL you copied earlier and press enter key.
~~~
$ git clone https://github.com/AGidado/ITC.git
~~~

### DATABASE

Edit the file `config/db.php` with real data, for example:

```php
$db = [
        'class' => 'yii\db\Connection',
        'dsn' => 'pgsql:host=localhost;port=5432;dbname=yii2basic',
        'username' => 'postgres',
        'password' => '',
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
        'password' => '',
        'charset' => 'utf8',
];
``` 

You can then access the application through the following URL:

~~~
http://localhost/directory/web/
~~~

INSTALLATION
------------

### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
composer create-project --prefer-dist yiisoft/yii2-app-basic itc
~~~

Now you should be able to access the application through the following URL, assuming `itc` is the directory
directly under the Web root.

~~~
http://localhost/itc/web/
~~~

### INSTALL FROM ARCHIVE FILE 

Extract the archive file downloaded from [yiiframework.com](http://www.yiiframework.com/download/) to
a directory named `itc` that is directly under the Web root.

Set cookie validation key in `config/web.php` file to some random secret string:

```php
'request' => [
    // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
    'cookieValidationKey' => '<secret random string goes here>',
],
```

You can then access the application through the following URL:

~~~
http://localhost/itc/web/
~~~

CONFIGURATION
-------------

### DATABASE

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=expenses',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

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

