# Unit tests
## Determine if phpunit is installed
In a terminal window, run the following command:

`phpunit --version`

If phpunit is installed, it will give you output like this:

`PHPUnit 8.1.5 by Sebastian Bergmann and contributors.`

## How to install phpunit when it is not installed

https://phpunit.de/getting-started/phpunit-8.html

## How to run the tests
In this directory, you will find a configuration file `phpunit.xml`. 

The configuration file determines which tests will be executed and how, when you run `phpunit` inside the directory.

Just type `phpunit` in a terminal window inside this directory and the tests will run.

## Run an individual test
`phpunit` YourTestClassFile.php
