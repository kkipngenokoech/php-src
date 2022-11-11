# php-src

my php-journey

## PHP INTRO

php stands for hypertext preprocessor, an open source scripting language.

this scripted are executed in the server side.

## PHP FILE

it can contain text, HTML, CSS and JS, and PHP code.

it is executed in the server and hence it returns to the browser as plain HTML.

it can:

1. generate dynamic data for website
2. it can read, open, write, delete and close files on the server.
3. it can collect form data
4. it can receive and send cookies
5. it can add, delete, modify database data
6. it can be used to control user-access
7. it can encrypt data.

## PHP OUTPUTS

1. HTML
2. images
3. pdfs files
4. flash movies
5. XHTML
6. XML

## PHP SYNTAX

you write your code within the php tags.

```php
<?php
//your php code goes here
?>
```

A php file normally contains HTML tags and some php scripting code.

php statements ends with semi-colons.

php is not case sensitive in terms of it's keywords, classes, functions, and user-defined functions.

All variable names are case sensitive though, `$ColOr` and `$COLOR` are two different variables.

## PHP COMMENTS

you can use `//` or `#`.

## PHP VARIABLES

these are containers for storing information

in PHP, a variable starts with a `$`, followed by the variable name.

```php
<?php
$user = "Multiverse001";
?>
```

in PHP, a variable is only created when assigning a value.

rules for creating a variable:

1. it should start with a dollar sign `$`.
2. it should start with an underscore or a letter
3. it should not start with a number
4. a variable can only contain an alpha-numeric characters and underscore
5. they are case sensitive.

to call a variable you can just `$variableName` or you concatinate it using `.`s i.e `"".$variable.""`.

## PHP IS A LOOSELY TYPED LANGUAGE

this means you don't have to define what variable data type it will be, php automatically does that for you.

in PHP7, you can do that though it is optional.
