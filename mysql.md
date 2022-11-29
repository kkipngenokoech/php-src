# MYSQL

mysql is a database that runs on the server.

its an open source

data in a mysql database is stored in tables.

## php connect to mysql

you can connect to the database by using either mysqli(i for improved) extension or pdo - php data objects.

pdo offers you the flexibility of working in different databases whereas in MYSQL you only get to work with mysql database only.

MYSQLi can be both procedural and object oriented

## opening a connection to MYSQL

this is connecting to the server

you need the following parameters:

1. servername
2. username
3. password

to create a connection you `&connection = new mysqli($servername, $username, $password)`.

then you check if you have actually connected to the server:

```php
if ($connection->connect_error)// or ($mysqli_connect_error())
    die("connection error: " . $connection->connect_error)
```

the above code is an object-oriented mysqli

for a procedural way of connecting to the database:

```php
$servername = "localhost"
$username = "multiverse"
$password = "multiverse001"

$conn = mysqli_connect($servername, $username, $password)
if (!$conn)
{
    die("connection error: " . $connection->connect);
}
```

for pdo - php data objects:

```php
try{
    $connection = new PDO("mysqli:host = $servernamw;dbname=$multiverse",$username,$password)
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)
    echo "connection successful"
}
catch (PDOException $e)
{
    echo "connection failed ".$e->getMessage()
}
```

## closing the connection

the sqli object oriented way - `$connection->close()`

the sqli procedural way - `$mysqli_close($connection)`

the PDO way - `$connection = null`.

## CREATING A DATABASE

to create a database you first write your query into a variable:

`$sqlquery = "CREATE DATABASE multiverse";`

then you pass this query to your connection you had created earlier:

`$connection -> query($sqlquery);` - mysqli object-oriented way

or

`mysqli_query($connection, $sqlquery)` - mysqli procedural way.

or

`$connection -> exec($sqlquery);` - the pdo way

## creating tables

when creating a table an sql statement would look like this:

```sql
CREATE TABLE multiverseGrade1 (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname varchar(30) NOT NULL,
    reg_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)
```

You store this sql statement in a variable and just pass it into our connection as shown in the example of creating a database.

## inserting data into a database

to insert data into a database, the sql database would normally look like this:

```sql
INSERT INTO MultiverseGrade1 (firstname, reg_date) VALUES ("multiverse001", now());
```

then the story starts being similar, store the sql query in a database then you pass it into your connection.

## accessing the current index or id for an auto incrementing id

you create a variable:

`$last_id = $conn -> LastInsertId() - the PDO way`

`$last_id = mysqli_insert_id($connection)` - this is the mysqli procedural way

`$last_id  = $connection -> insert_id`

## inserting multiple records at the same time

to insert multiple records, you append to your initial variables the records:

$sqlquery = `sql statement - first record`
$sqlquery .= `sql statement - second record`

then in where you pass it to your server you:

`$connection -> multi_query($sqlquery`)`

ensure you use the semi-colons at the end of each sql query.

in PDO:

```php
...
#inside your try statement
$connection-> beginTransaction()
$connection -> exec("your first sql insert record")
$connection -> exec("your second sql insert record")
$connection -> exec("your other sql insert records")
$connection -> commit()
...
```

for mysqli procedural - `mysqli_multi_query()`

## PREPARED STATEMENTS

These statements are statements that prepare us from sql injections.

a prepared statement is a feature used to execute the same /similar statement repeatedly with high efficiency.

this is how the prepared statement works:

1. you create a template(an sql statement template), send it to our database with certain values left unspecified, these are the parameters
2. the database parses, compiles and performs query optimization on the sql statement template without executing it.
3. execute - this is done at a later time. application binds the values with the parameters and then it is executed.

the difference between the prepared statements and the sql statements:

1. it reduces parsing time as the preparation of query is done only once.
2. bound parameters minimize bandwidth to the server as you only need send the parameters and not the whole query.
3. 