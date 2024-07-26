# CRUD Project

This is a simple CRUD (Create, Read, Update, Delete) project built using PHP and MySQL. The project is hosted locally using XAMPP and is designed to perform basic database operations.

## Project Structure

crud/

├── delete.php 

├── display.php

├── update.php

└── user.php


### Files Description

- **delete.php**: Contains functionality to delete records from the database.
- **display.php**: Displays records from the database. This is the default file that loads when navigating to `localhost/crud`.
- **update.php**: Contains functionality to update existing records in the database.
- **user.php**: Handles user data operations such as adding new users.

## Prerequisites

- XAMPP installed on your system.
- Basic knowledge of PHP and MySQL.

## Setup Instructions

1. **Clone or Download the Project**:
   - Place the `crud` folder in the `htdocs` directory of your XAMPP installation.

2. **Configure Apache**:
   - Open the `httpd.conf` file located in the `apache/conf` directory of your XAMPP installation.
   - Modify the `DirectoryIndex` directive to set `display.php` as the default file:
     ```apache
     <IfModule dir_module>
         DirectoryIndex display.php index.php index.pl index.cgi index.asp index.shtml index.html index.htm \
                        default.php default.pl default.cgi default.asp default.shtml default.html default.htm \
                        home.php home.pl home.cgi home.asp home.shtml home.html home.htm
     </IfModule>
     ```
   - Save the file and restart the Apache server from the XAMPP control panel.

3. **Database Setup**:
   - Start MySQL from the XAMPP control panel.
   - Create a new database and necessary tables using the following SQL script:
     ```sql
     CREATE DATABASE your_database_name;
     USE your_database_name;

     CREATE TABLE users (
         id INT(11) AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(100) NOT NULL,
         email VARCHAR(100) NOT NULL,
         password VARCHAR(100) NOT NULL
     );
     ```
   - Update the database connection settings in each PHP file (`delete.php`, `display.php`, `update.php`, `user.php`) to match your database credentials.

4. **Running the Project**:
   - Open your web browser and navigate to `http://localhost/crud`.
   - The `display.php` file should load by default, displaying the records from your database.

## Usage

- **Display Records**: Navigate to `http://localhost/crud` to view all records.
- **Add Records**: Use the `user.php` file to add new records.
- **Update Records**: Use the `update.php` file to modify existing records.
- **Delete Records**: Use the `delete.php` file to remove records.

## License

This project is licensed under the MIT License. See the `LICENSE` file for more details.
