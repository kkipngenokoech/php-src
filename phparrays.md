# ARRAYS

you use `array()`

there are three types of arrays:

1. indexed arrays - arrays with numeric index.
2. associative arrays -  arrays with named keys
3. multi-dimensional arrays - arrays containing one or more arrays.

## count()

get the length of the array

## indexed arrays

it can be created automatically where the index would start from zero.
or you assign them manually:

```php
$array = array(...)
$array[0] = "array"
$array[1] = "array"
```

## associative arrays

here we use things like dictionary - it has a key/value pair.

`$array = Array("key"=>"value",...)`.

## multi-dimensional arrays

you declare arrays within arrays
`array(array(),array())`.

## sorting algorithms

1. sort() - sorts algorithms in ascending order.
2. rsort() - sorts arrays in decending order
3. asort() -  sort associative arrays in ascending order, according to the value
4. ksort() - sort associative arrays in ascending order, according to the key
5. arsort() - sort associative arrays in descending order, according to the value
6. krsort() - sort associative arrays in descending order, according to the key
