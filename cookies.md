# COOKIES

this is normally used to identify a user.
this is normally a small file that the server embeds in the user's computer.

each time the same computer makes requests to a page with a browser, it will send a cookie too.

## creating cookies

setcookie() function.

setcookie("name","value", "expire", "path", "domain", "secure", :httponly")

that is the syntax of creating a cookie.

only the name parameter is required, the other fields are optional.

the value of the cookie is automatically urlencoded when sending the cookie, and decoded when recieved, to prevent this we use setrawcookie().

## modifying a cookie

to modify a cookie, just reset the cookie.

## deleting a cookie

you just use an expiration date that has already passed on the setcookie().

## checking if cookie has been enabled or not

you call the count method on the cookie `$_COOKIE`.
