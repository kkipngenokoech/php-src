# DATA TYPES

php supports the following data types:

1. strings
2. integer
3. float/double
4. Boolean
5. Array
6. Object
7. NULL
8. Resource

`$var_dump()` - returns the data type and value.

## STRING DATA TYPE

1. strlen() - returns the length of the datatype.
2. str_word_count() - it counts the number of words in a string.
3. strrev() - function that reverses a string.
4. strpos() - function that checks for a specific text within a string.If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
5. str_replace() - replaces some characters with other characters in a string.

## NUMBERS DATA TYPE

1. PHP_INT_MAX - returns the largest integer supported
2. PHP_INT_MIN - the smallest integer supported
3. PHP_INT_SIZE - the size of the integer in bytes

to check if a variable is an int - `is_int(), is_integer(), is_long()`

## PHP FLOAT DATA TYPE

1. PHP_FLOAT_MAX - returns the largest possible float
2. PHP_FLOAT_MIN - smallest representable possible positive float number
3. PHP_FLOAT_DIG - the numbers of decimal digits that can be rounded into a float and back without precision loss
4. PHP_FLOAT_EPSILON -  The smallest representable positive number x, so that x + 1.0 != 1.0

functions:

1. is_float() - check if float
2. is_double() - also check if is float

N/B: a number that is greater than PHP_FLOAT_MAX is considered infinite.

to check if a number is infinite or not you:

1. is_infinite()
2. is_finite()

## PHP NAN

this stands for not a number. to check if a value is not a number..`is_nan()`.

## PHP NUMERIC STRING

this stands for an integer which is represented in form of a string `"23456"`. you use `is_numeric()` to check if it is a numeric string.

## OBJECTS

a class is a template for objects.

## CASTING FROM ONE DATATYPE TO ANOTHER

to int:

1. you preempt with a (int), (integer), intval().
