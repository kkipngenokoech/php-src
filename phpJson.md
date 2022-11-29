# PHP JSON

JSON - javascript standard notation

this is a syntax of storing and exchanging data.

it is a text based format.

it can be easily sent to and fro the database.

## PHP BUILT IN FUNCTIONS TO HANDLE JSON

1. json_encode()
2. json_decode()

### JSON_ENCODE()

This function is used to encode a value to JSON format.

you have a php array `$age = array("kip" => 20,"multiverse"=>39,"chelsea"=>105`

to jsonfy the age array above you: `json_encode($age)`.

### JSON_DECODE()

to unjsonfy a json you use the decode function.

`json_decode($jsonObject)`

this json_decode returns an object by default.

it also has a second parameter if it is set.

if you set the second parameter to true it returns an associative array. that is a key value pair, a scenario where you use named keys instead of normal index array i.e:

```php
$array = array("team" => "chelsea", "country" => "united kingdom")
```

### accesing decoded values

when you decode json values you might want to use its values:

if you haven't set the second decode parameter to true, that means your json is in a php object format and thus to access values in it you:

`echo $array -> key_name`

if you set the second parameter to true that means your data is in an associative format and so you access it in the following manner:

`echo $array["key name"]`

to loop through the values as you access them:

you use the foreach()

`foreach($object as $key => $value)
{
    echo $key . ": " . $value
}`
