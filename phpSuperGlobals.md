# SUPER GLOBALS

these are those that can be accessible from everywhere:

1. $GLOBALS
2. $_SERVER
3. $_REQUEST
4. $_POST
5. $_GET
6. $_FILES
7. $_ENV
8. $_COOKIE
9. $_SESSION

## GLOBALS

it is used to access global variables from anywhere in the php script.

php stores all global variables in an array called $GLOBALS[index] where index is the name of the variable.

## _SERVER

This is a PHP super global variable which holds information about the headers, paths, and script locations.

1. $_SERVER['PHP_SELF'] - returns the filename of the currently executing script.
2. $_SERVER['GATEWAY_INTERFACE'] - returns the version  of the common gateway interface the server is currently using]
3. $_SERVER['SERVER_ADD'] - returns the ip address of the host server.
4. $_SERVER['SERVER_NAME'] - returns the name of the host server
5. $_SERVER['SERVER_SOFTWARE'] - returns the server identification string.
6. $_SERVER['SERVER_PROTOCOL'] - returns the protocol name and the version used
7. $_SERVER['REQUEST_METHOD'] - returns the request method used to access the page.
8. $_SERVER['REQUEST_TIME']	Returns the timestamp of the start of the request (such as 1377687496)
$_SERVER['QUERY_STRING']	Returns the query string if the page is accessed via a query string
$_SERVER['HTTP_ACCEPT']	Returns the Accept header from the current request
$_SERVER['HTTP_ACCEPT_CHARSET']	Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
$_SERVER['HTTP_HOST']	Returns the Host header from the current request
$_SERVER['HTTP_REFERER']	Returns the complete URL of the current page (not reliable because not all user-agents support it)
$_SERVER['HTTPS']	Is the script queried through a secure HTTP protocol
$_SERVER['REMOTE_ADDR']	Returns the IP address from where the user is viewing the current page
$_SERVER['REMOTE_HOST']	Returns the Host name from where the user is viewing the current page
$_SERVER['REMOTE_PORT']	Returns the port being used on the user's machine to communicate with the web server
$_SERVER['SCRIPT_FILENAME']	Returns the absolute pathname of the currently executing script
$_SERVER['SERVER_ADMIN']	Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
$_SERVER['SERVER_PORT']	Returns the port on the server machine being used by the web server for communication (such as 80)
$_SERVER['SERVER_SIGNATURE'] - Returns the server version and virtual host name which are added to server-generated pages
$_SERVER['PATH_TRANSLATED']	Returns the file system based path to the current script
$_SERVER['SCRIPT_NAME']	Returns the path of the current script
$_SERVER['SCRIPT_URI']	Returns the URI of the current page

## $_REQUEST

it is used to collect data after submitting an HTML form

when one clicks the submit button, the form is submitted to the file in the action method.

## $_POST

s a PHP super global variable which is used to collect form data after submitting an HTML form with method="post". $_POST is also widely used to pass variables.

## $_GET

 is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".

$_GET can also collect data sent in the URL.
