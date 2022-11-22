# [DATE AND TIME](datetime.php)

## date()

date function takes two parameters - format and timestamp
date(format, timestamp)

1. format - specific format of the timestamp
2. timestamp - optional, default is current time and date.

### formats for dates

1. y-m-d = year-month-day - represented in numbers
2. l - day of the week. - gives the day of the week

if you want your website to automatically update the copyright you use date() function.

### formats for time

1. H - 24hr time (00 - 23)
2. h - 12hr  time (00 - 12)
3. i -  minutes with leading zeros (00 - 59)
4. s - seconds with leading zeros (00 - 59)
5. a - lowercase Ante meridiem and Post meridiem

to set a timezone for your time - you can set a default time zone; `date_default_timezone_set("africa/Nairobi")`.

## timestamp

to create a timestamp, you `mktime(hour, minute, second, month, day, year)`.

then you pass this variable into the next optional parameter in our date()  function.

## strtotime()

this is used to convert a human readable date and time to unix - the number of seconds since 1 1 1970 00.00.00 GMT.
