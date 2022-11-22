# sessions

this is a way to track or store information to be used across multiple pages

http address doesn't maintain state.

session variables solve the problem by storing user information to be used across multiple pages.

sessions last until the user closes the browser.

## start a php session?

session_start()

session variables are set within the php global variable : `$_SESSION`

to check the session variables that are available in the current session you can `print_r($_SESSION)`

## CHANGING SESSION VARIABLES

you just override the session variables.

## DESTROY A PHP SESSION

you use session_unset() and session_destroy(), the first one removes all the session variables, then this other one destroys the sessions.
