# FUNCTIONS

php has almost over 1000 builtin functions.

it is possible to create your own functions:

```php
function functionName(){
    //syntax here
}
```

function names are not case sensitive.

php is a loosely typed language -  hence we don't really have to tell php the data type of our data/variables.

if you want to define, you can use the `strict` keyword.
i.e:

```php
<?php declare(strict_types = 1);
// forcing things to be strict
?>
```

you can have default values in arguments by just declaring them in the function naming.

To declare a type for the function return, add a colon ( : ) and the type right before the opening curly ( { )bracket when declaring the function.

the default way we pass values in php is by values, but we can pass by reference by using the `&` operator, this points us to the memory location.
