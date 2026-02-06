# MySQL Connectivity in PHP

## Introduction To MySQL

With **PHP**, you can connect to and manipulate databases.

MySQL is the most popular database system used with PHP.

* MySQL is a database system used on the web
* MySQL is a database system that runs on a server
* MySQL is ideal for both small and large applications
* MySQL is very fast, reliable, and easy to use
* MySQL uses standard SQL
* MySQL compiles on a number of platforms
* MySQL is free to download and use
* MySQL is developed, distributed, and supported by Oracle Corporation
* MySQL is named after co-founder Monty Widenius's daughter: My

## Database Used:

**Link:** https://github.com/PrashDev425/mysql-lab-12

## Connecting with Database

In PHP you can easily do this using the ``mysqli_connect()`` function. All communication between PHP and the MySQL database server takes place through this connection. 

**Syntax:**

```PHP
$conn = mysqli_connect("servername", "username", "password", "databasename");
```

**Example:**
```PHP
<?php
$servername = "localhost";
$database = "school_db";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
```

## Closing a Connection

The connection will be closed automatically when the script ends. To close the connection before, use the following:

```PHP
mysqli_close($conn); 
```

## **``mysqli_query()``**

The ``mysqli_query()`` function in PHP is used to execute SQL queries on a **MySQL** database.

**Basic Syntax:**

```PHP
mysqli_query($connection, $query);
```

- ``$connection``: The connection to the database. This is created using ``mysqli_connect()``.

- ``$query``: The SQL query you want to run (like ``SELECT``, ``INSERT``, ``UPDATE``, ``DELETE``).

**Return Value:**

- If the query runs successfully:
    - For ``SELECT`` queries (like retrieving data), it returns the data you requested.
    - For queries like ``INSERT``, ``UPDATE``, ``DELETE``, it returns ``TRUE`` if successful.

- If it fails, it returns ``FALSE``, and you can check the error using ``mysqli_error()``.

## Tasks:

### Task 1: Connecting MySQL

```PHP
$conn = mysqli_connect("localhost", "root", "", "school_db");
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn); 
?>
```


### Task 2: MySQL Select

The ``SELECT`` statement is used to select data from one or more tables:

Syntax:
```SQL
SELECT column_name(s) FROM table_name
```

or we can use the ``*`` character to select ALL columns from a table:

```SQL
SELECT * FROM table_name 
```

Example Program:
```PHP
<?php
$conn = mysqli_connect("localhost", "root", "", "school_db");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
if ($result && mysqli_num_rows($result) > 0) {
    while ($student = mysqli_fetch_assoc($result)) {
        echo "First Name: " . $student['first_name'] . "<br>";
        echo "Last Name: " . $student['last_name'] . "<br>";
        echo "Gender: " . $student['gender'] . "<br>";
        echo "DOB: " . $student['dob'] . "<br>";
        echo "Department: " . $student['department'] . "<br>";
        echo "Admission Year: " . $student['admission_year'] . "<br>";
        echo "Marks: " . $student['marks'] . "<br>";
        echo "<hr>";
    }
} else {
    echo "No records found.";
}
mysqli_close($conn);
?>

```
the function ``mysqli_num_rows()`` checks if there are more than zero rows returned.

If there are more than zero rows returned, the function ``mysqli_fetch_assoc()`` puts all the results into an associative array that we can loop through. The ``while()`` loop loops through the result set and outputs the data.

### Task 3: MySQL Insert

The ``INSERT INTO`` statement is used to add new records to a MySQL table:

Syntax:
```SQL
INSERT INTO table_name (column1, column2,...) VALUES (value1, value3,...);
```

Data can be entered into MySQL tables by executing SQL ``INSERT`` statement through PHP function ``mysql_query()``.

Example program:
```PHP
<?php
$conn = mysqli_connect("localhost", "root", "", "school_db");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO students (first_name, last_name, gender, dob, department, admission_year, marks)
        VALUES ('Prakash', 'Shrestha', 'Male', '2002-03-15', 'Computer Science', 2020, 80)";

if (mysqli_query($conn, $sql)) {
    echo "Records inserted successfully.";
} else {
    echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
}

mysqli_close($conn);
?>
```
