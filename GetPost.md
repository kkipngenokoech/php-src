# GET AND POST

there are two ways to send information from the browser client to the web sevrer.

1. [get](forms/get.php)
2. post

before the browser sends the information, it encodes it in a scheme called url encoding.

in this url encoding name and value are joined together and separated using an equal sign and they key/value pair is separated by &.

also white spaces are trimmed out and replaced by a + .

any other non-alphanumeric characters are replaced with a hexadecimal values. After the information is encoded it is sent to the server.
