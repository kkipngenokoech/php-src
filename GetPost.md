# GET AND POST

there are two ways to send information from the browser client to the web sevrer.

1. [get](forms/get.php)
2. [post](forms/post.php)

before the browser sends the information, it encodes it in a scheme called url encoding.

in this url encoding name and value are joined together and separated using an equal sign and they key/value pair is separated by &.

also white spaces are trimmed out and replaced by a + .

any other non-alphanumeric characters are replaced with a hexadecimal values. After the information is encoded it is sent to the server.

## $_REQUEST

it contains the content of both $_GET and $_POST and $_COOKIE.

this variable will be able to get the result from the data sent with both the GET and the POST.

## $_PHP_SELF

this is a global variable that returns the filename of the current executing file.

you can also choose to use `$_SERVER["PHP_SELF"]`.

this makes php send form data to itself instead of another form.
