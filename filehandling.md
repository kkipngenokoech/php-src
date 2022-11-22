# FILE HANDLING

you often need to update, open and process a file for different tasks.

php has many functions of creating, reading, uploading and editing files.

## readfile()

it reads a file and writes it to output buffer.

## php file open/read/close

### fopen()

it takes two parameters, the first being the path of the file and the second being the mode in which the file is to be opened.

i.e `fopen("/","r") or die("unable to open file")`.

or die provides an error message if we cannot be able to access the file.

### fread()

reads from an open file, so you access an already opened file.

fread() takes two parameters, the name of the opened file, and the second parameter specifies the maximum number of bytes to read.

### fclose()

again here we close an already opened file.

it takes one parameter, the name of the file only.

```php
<?php
$writeMe = fopen("/tmp","w");
$writeMe = fread("$writeMe");
fclose($writeMe);
?>
```

### fgets()

this function is used to read a single line from a file

after a call to fgets(), the pointer will move to the next line.

### feof() - check end of file()

this is used to check the end of file if it has been reached.

this is used when looping over data of unknown limit.

### fgetc()

this is used to read a single character from a file.

again, just like our fgets() the pointer will move to the next character.

## php file create/write

fopen is used for both opening and creating new files, if the file exists, it is opened else created: `fopen()`.

### PHP FILE write fwrite()

this is used to write into a file.

it takes two parameters, the first is the file to be written to and the second one is the string to be written.

so you `fwrite($writeMe,"Hello world")

### php overwriting

if we open an existing file for writing, all the existing data will be erased, and we will have to start from an empty file.

to avoid this you can append your text, by using the `a` mode while opening your text. the `w` mode overwrites everything.

## php modes

1. r - open a file for read only mode.
2. w - open a file for write only mode.
3. a - open a file for appending, existing data is preserved.
4. x - create a file for write only, returns an error if the file already exists
5. r+ - opens a file for read write
6. w+ - opens a file for read/write.
7. a+ - opens a file for appending - read/write.
8. x+ - opens a file for read/write, returns false if the file already exists.

## php file upload

in php you can easily upload your files to the server.

you always just ensure that you configure your php to allow file uploads

in your php.ini file search for the file_uploads and set it on.

check the html content in this [page](filehandling.php), in the form there are some rules to follow:

1. you use the post http verb
2. you have to use the enctype so as to specify which content-type to use when submitting the form.

our [uploads php](upload.php):

to check if a file already exists you can use the file_exists() method.

you can also limit the size to be updated by : `$_FILES["nameOfYourFrontendInput"]["size"]> 500000`.
