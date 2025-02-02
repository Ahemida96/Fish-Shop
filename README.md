# Seafood Online Shop Web Application

This repository contains the source code for the **Seafood Shop Website** – a dynamic PHP-based website for showcasing and managing a fish shop. It features both a customer-facing interface and an administrative control panel.

## Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Installation](#installation)
- [File Structure](#file-structure)
- [Database Setup](#database-setup)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Overview

The Fish Shop Website is designed to provide visitors with an engaging online experience where they can browse various fish products and learn more about the shop. Additionally, a control panel is available for shop administrators to manage content, orders, and other key aspects of the site.

## Features

- **Responsive Design:** Built with CSS and Bootstrap to ensure a smooth user experience across devices.
- **Dynamic Content:** PHP scripts drive the dynamic content and interact with the database.
- **Control Panel:** A dedicated admin area to manage products, users, and site settings.
- **Database Integration:** MySQL is used to store and manage data, with the provided SQL script to set up the initial schema.
- **Modular Components:** Organized folders for components, styles, images, and scripts help keep the code maintainable.

## Installation

Follow these steps to set up the Fish Shop Website locally:

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/Ahemida96/Fish-Shop.git
   ```
  
2. **Set Up a Web Server:**
- Ensure you have PHP installed (version 7.0 or later is recommended).
- Set up a local web server (e.g., using XAMPP, WAMP, or LAMP) and place the repository in your web server’s root directory.
  
3. **Database Setup:**
- Create a new MySQL database.
- Import the fish-shop.sql file into your database to set up the necessary tables and sample data.

4. **Configure Database Connection:**
- Edit the connection.php file to add your database credentials:
```bash
<?php
$servername = "localhost";
$username   = "your_username";
$password   = "your_password";
$dbname     = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
```

5. **Link Bootstrap and Assets:**
- The bootstrap-linker.php file handles linking to Bootstrap resources. Ensure you have internet access or adjust the file paths if you are hosting Bootstrap locally.

 ## Database Setup
The fish-shop.sql file includes the necessary SQL commands to create and populate the database. Import this file into your MySQL server using a tool like phpMyAdmin or the MySQL command-line interface: 
```bash
mysql -u your_username -p your_database < fish-shop.sql
```
