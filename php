1. Write a PHP script to take a number from the user and print the table of that number.
```php
<?php
if (isset($_POST['number'])) {
 $number = $_POST['number'];
 for ($i = 1; $i <= 10; $i++) {
 $result = $number * $i;
 echo "$number x $i = $result <br>";
 }
}
?>
<form method="post">
 Enter a number: <input type="number" name="number">
 <input type="submit" value="Generate Table">
</form>
```



2. Write a program to check a student's grade based on the marks using if-else statements.
```php
<?php
if (isset($_POST['marks'])) {
 $marks = $_POST['marks'];
 if ($marks >= 60) {
 $grade = "First Division";
 } elseif ($marks >= 45) {
 $grade = "Second Division";
 } elseif ($marks >= 33) {
 $grade = "Third Division";
 } else {
 $grade = "Fail";
 }
 echo "Grade: $grade";
}
?>
<form method="post">
 Enter marks: <input type="number" name="marks">
 <input type="submit" value="Check Grade">
</form>
```


3. Write a program to show the day of the week based on numbers using switch/case statements.
```php
<?php
if (isset($_POST['day'])) {
 $day = $_POST['day'];
 switch ($day) {
 case 1:
 $result = "Monday";
 break;
 case 2:
 $result = "Tuesday";
 break;
 case 3:
 $result = "Wednesday";
 break;
 case 4:
 $result = "Thursday";
 break;
 case 5:
 $result = "Friday";
 break;
 case 6:
 $result = "Saturday";
 break;
 case 7:
 $result = "Sunday";
 break;
 default:
 $result = "Invalid number";
 }
 echo "Day: $result";
}
?>
<form method="post">
 Enter a number (1-7): <input type="number" name="day">
 <input type="submit" value="Show Day">
</form>
```




4. Write a PHP program to find the factorial of a number using a recursive function.
```php
<?php
function factorial($n) {
 if ($n <= 1) {
 return 1;
 } else {
 return $n * factorial($n - 1);
 }
}
if (isset($_POST['number'])) {
 $number = $_POST['number'];
 $result = factorial($number);
 echo "Factorial of $number is $result";
}
?>
<form method="post">
 Enter a number: <input type="number" name="number">
 <input type="submit" value="Calculate Factorial">
</form>
```




5. Write a program to calculate the electricity bill in PHP.
```php
<?php
if (isset($_POST['units'])) {
 $units = $_POST['units'];
 $bill = 0;
 if ($units <= 50) {
 $bill = $units * 3.50;
 } elseif ($units <= 150) {
 $bill = 50 * 3.50 + ($units - 50) * 4.00;
 } elseif ($units <= 250) {
 $bill = 50 * 3.50 + 100 * 4.00 + ($units - 150) * 5.20;
 } else {
 $bill = 50 * 3.50 + 100 * 4.00 + 100 * 5.20 + ($units - 250) * 6.50;
 }
 echo "Electricity Bill: Rs. $bill";
}
?>
<form method="post">
 Enter consumed units: <input type="number" name="units">
 <input type="submit" value="Calculate Bill">
</form>
```



6. Write a PHP program to find the square root of a number using a PHP function.
```php
<?php
if (isset($_POST['number'])) {
 $number = $_POST['number'];
 $result = sqrt($number);
 echo "Square Root of $number is $result";
}
?>
<form method="post">
 Enter a number: <input type="number" name="number">
 <input type="submit" value="Calculate Square Root">
</form>
```



7. Write a PHP script with a function to check whether a number is prime or not.
```php
<?php
function isPrime($num) {
 if ($num <= 1) return false;
 if ($num <= 3) return true;
 if ($num % 2 == 0 || $num % 3 == 0) return false;
 
 for ($i = 5; $i * $i <= $num; $i += 6) {
 if ($num % $i == 0 || $num % ($i + 2) == 0) return false;
 }
 
 return true;
}
if (isset($_POST['number'])) {
 $number = $_POST['number'];
 $isPrime = isPrime($number);
 
 if ($isPrime) {
 echo "$number is a prime number.";
 } else {
 echo "$number is not a prime number.";
 }
}
?>
<form method="post">
 Enter a number: <input type="number" name="number">
 <input type="submit" value="Check Prime">
</form>
```



8. Write a PHP function script that checks whether a passed string is a palindrome or not.
```php
<?php
function isPalindrome($str) {
 $str = strtolower(str_replace(' ', '', $str));
 return $str == strrev($str);
}
if (isset($_POST['input'])) {
 $input = $_POST['input'];
 if (isPalindrome($input)) {
 echo "$input is a palindrome.";
 } else {
 echo "$input is not a palindrome.";
 }
}
?>
<form method="post">
 Enter a string: <input type="text" name="input">
 <input type="submit" value="Check Palindrome">
</form>
```


9. Write a PHP script to transform a string:
a) To all uppercase letters.
b) To all lowercase letters.
c) To make the first character uppercase.
d) To make the first character of all words uppercase.
```php
<?php
if (isset($_POST['input'])) {
 $input = $_POST['input'];
 $uppercase = strtoupper($input);
 $lowercase = strtolower($input);
 $firstUpper = ucfirst($input);
 $wordsUpper = ucwords($input);
 
 echo "Uppercase: $uppercase<br>";
 echo "Lowercase: $lowercase<br>";
 echo "First character uppercase: $firstUpper<br>";
 echo "First character of all words uppercase: $wordsUpper<br>";
}
?>
<form method="post">
 Enter a string: <input type="text" name="input">
 <input type="submit" value="Transform String">
</form>
```


10. Write a PHP program to compute and return the square root of a given number.
```php
<?php
if (isset($_POST['number'])) {
 $number = $_POST['number'];
 $result = sqrt($number);
 echo "Square Root of $number is $result";
}
?>
<form method="post">
 Enter a number: <input type="number" name="number">
 <input type="submit" value="Calculate Square Root">
</form>
```



11. Write a PHP program to reverse the digits of an integer.
```php
<?php
if (isset($_POST['number'])) {
 $number = $_POST['number'];
 $reversed = strrev($number);
 echo "Reversed number: $reversed";
}
?>
<form method="post">
 Enter an integer: <input type="number" name="number">
 <input type="submit" value="Reverse Digits">
</form>
```



12. Write a PHP program to check whether a given positive integer is a power of four.
```php
<?php
function isPowerOfFour($n) {
 return $n > 0 && (($n & ($n - 1)) === 0) && ($n & 0x55555555);
}
if (isset($_POST['number'])) {
 $number = $_POST['number'];
 if (isPowerOfFour($number)) {
 echo "$number is a power of four.";
 } else {
 echo "$number is not a power of four.";
 }
}
?>
<form method="post">
 Enter a positive integer: <input type="number" name="number">
 <input type="submit" value="Check Power of Four">
</form>
```



13. Write a PHP function script to accept a temperature from the user in Fahrenheit and convert it to 
degrees Celsius and vice versa.
```php
<?php
if (isset($_POST['temp'])) {
 $temp = $_POST['temp'];
 $convertTo = $_POST['convertTo'];
 if ($convertTo == 'FtoC') {
 $result = ($temp - 32) * 5/9;
 echo "$temp °F is equal to $result °C.";
 } elseif ($convertTo == 'CtoF') {
 $result = ($temp * 9/5) + 32;
 echo "$temp °C is equal to $result °F.";
 }
}
?>
<form method="post">
 Enter temperature: <input type="number" name="temp">
 Convert to:
 <select name="convertTo">
 <option value="FtoC">°F to °C</option>
 <option value="CtoF">°C to °F</option>
 </select>
 <input type="submit" value="Convert Temperature">
</form>
```
For these examples, I assume you have a MySQL database set up with the appropriate tables (Student 
and Employee). Replace the placeholders (e.g., your_server_name, your_username, your_password, 
your_database_name) with your actual database credentials.



14: Adding Student Records to MySQL
```php
<?php
$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";
// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
// Handle form submission to insert a new student record
if (isset($_POST['roll_number'], $_POST['name'], $_POST['city'], $_POST['pin_code'])) {
 $rollNumber = $_POST['roll_number'];
 $name = $_POST['name'];
 $city = $_POST['city'];
 $pinCode = $_POST['pin_code'];
 
 $sql = "INSERT INTO Student (RollNumber, Name, City, PinCode) VALUES ('$rollNumber', '$name', 
'$city', '$pinCode')";
 
 if ($conn->query($sql) === TRUE) {
 echo "Record added successfully!";
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
}
// Display student records
$result = $conn->query("SELECT * FROM Student");
if ($result->num_rows > 0) {
 echo "<table><tr><th>Roll Number</th><th>Name</th><th>City</th><th>Pin Code</th></tr>";
 while ($row = $result->fetch_assoc()) {
 echo "<tr><td>" . $row['RollNumber'] . "</td><td>" . $row['Name'] . "</td><td>" . $row['City'] . 
"</td><td>" . $row['PinCode'] . "</td></tr>";
 }
 echo "</table>";
} else {
 echo "No records found.";
}
$conn->close();
?>
<form method="post">
 Roll Number: <input type="text" name="roll_number"><br>
 Name: <input type="text" name="name"><br>
 City: <input type="text" name="city"><br>
 Pin Code: <input type="text" name="pin_code"><br>
 <input type="submit" value="Add Record">
</form>
```



15: Adding Employee Records and Displaying by Salary in MySQL
```php
<?php
$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";
// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
// Handle form submission to insert a new employee record
if (isset($_POST['emp_no'], $_POST['emp_name'], $_POST['department'], $_POST['salary'])) {
 $empNo = $_POST['emp_no'];
 $empName = $_POST['emp_name'];
 $department = $_POST['department'];
 $salary = $_POST['salary'];
 
 $sql = "INSERT INTO Employee (EmpNo, EmpName, Department, Salary) VALUES ('$empNo', 
'$empName', '$department', '$salary')";
 
 if ($conn->query($sql) === TRUE) {
 echo "Record added successfully!";
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
}
// Display employee records with a salary greater than 50000 Rs
$result = $conn->query("SELECT * FROM Employee WHERE Salary > 50000");
if ($result->num_rows > 0) {
 echo "<table><tr><th>Emp No</th><th>Name</th><th>Department</th><th>Salary</th></tr>";
 while ($row = $result->fetch_assoc()) {
 echo "<tr><td>" . $row['EmpNo'] . "</td><td>" . $row['EmpName'] . "</td><td>" . 
$row['Department'] . "</td><td>" . $row['Salary'] . "</td></tr>";
 }
 echo "</table>";
} else {
 echo "No records found with a salary greater than 50000 Rs.";
}
$conn->close();
?>
<form method="post">
 Emp No: <input type="text" name="emp_no"><br>
 Name: <input type="text" name="emp_name"><br>
 Department: <input type="text" name="department"><br>
 Salary: <input type="text" name="salary"><br>
 <input type="submit" value="Add Record">
</form>
```



16.Adding User Records and Updating Passwords in MySQL
```php
<?php
$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";
// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
// Handle form submission to insert a new user record
if (isset($_POST['user_id'], $_POST['user_name'], $_POST['password'])) {
 $userId = $_POST['user_id'];
 $userName = $_POST['user_name'];
 $password = $_POST['password'];
 
 $sql = "INSERT INTO Users (UserID, UserName, Password) VALUES ('$userId', '$userName', 
'$password')";
 
 if ($conn->query($sql) === TRUE) {
 echo "Record added successfully!";
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
}
// Handle form submission to update user password
if (isset($_POST['update_user_id'], $_POST['new_password'])) {
 $updateUserId = $_POST['update_user_id'];
 $newPassword = $_POST['new_password'];
 
 $sql = "UPDATE Users SET Password = '$newPassword' WHERE UserID = '$updateUserId'";
 
 if ($conn->query($sql) === TRUE) {
 echo "Password updated successfully!";
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
}
// Display user records
$result = $conn->query("SELECT * FROM Users");
if ($result->num_rows > 0) {
 echo "<table><tr><th>User ID</th><th>User Name</th><th>Password</th></tr>";
 while ($row = $result->fetch_assoc()) {
 echo "<tr><td>" . $row['UserID'] . "</td><td>" . $row['UserName'] . "</td><td>" . 
$row['Password'] . "</td></tr>";
 }
 echo "</table>";
} else {
 echo "No user records found.";
}
$conn->close();
?>
<form method="post">
 User ID: <input type="text" name="user_id"><br>
 User Name: <input type="text" name="user_name"><br>
 Password: <input type="text" name="password"><br>
 <input type="submit" value="Add Record">
</form>
<form method="post">
 User ID to Update Password: <input type="text" name="update_user_id"><br>
 New Password: <input type="text" name="new_password"><br>
 <input type="submit" value="Update Password">
</form>
```
