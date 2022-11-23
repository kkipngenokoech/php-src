# FILTERS

validating data - determine if the data is in proper form.

sanitizing data - remove any illegal character from the data.

php filters are used to validate and filter external input.

to see what our filter extension offers you can use `filter_list()`.

## filter_var()

this function both validate and sanitizes data.

this function filters a single variable with a specific filter, it takes two parameters:

1. the variable you want to check
2. the type of check to use.

filter_sanitize_string - filters all html tags in a string.
filter_validate_int - it checks if an input is an integer.filter_validate_ip - it checks if an input is an ip address and if it is valid.

## sanitize and filter an email address

to filter an email address, you need to sanitize you use - `FILTER_SANITIZE_EMAIL`. it sanitizes it of all its illegal characters.

to validate the email, you use the `FILTER_VALIDATE_EMAIL`, it checks if the email is valid.

to sanitize and validate url, you use:

1. `filter_var(..., FILTER_SANITIZE_URL)`
2. `filter_var(..., FILTER_VALIDATE_URL)`
