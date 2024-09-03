# Database Management PHP Scripts

This repository contains two PHP scripts designed for managing and manipulating data within a MySQL database. Below is an overview of each script's functionality and usage.

## Overview

### 1. `create_new_table_base_2tables.php`

#### Description

This script creates a new table named `table3` in your MySQL database. It then populates `table3` with rows from two existing tables (`table1` and `table2`). The new table includes only the specified columns: `name`, `carte`, `phone`, `sum`, and `city`.

#### Functionality

- **Connection Setup:** Establishes a connection to the MySQL database using provided credentials.
- **Table Creation:** Creates a new table `table3` with the specified columns.
- **Data Insertion:** Inserts rows from `table1` and `table2` into `table3` for the specified columns.

#### Usage

1. **Update Connection Settings:** Configure the database connection settings in the script to match your environment.
2. **Execute Script:** Run the script on your PHP server to create the new table and populate it with data.

### 2. `Compare_2_tables.php`

#### Description

This script compares the `name` column between two tables (`table1` and `table2`). If a `name` in `table2` matches a `name` in `table1`, the corresponding row is removed from `table2`.

#### Functionality

- **Connection Setup:** Establishes a connection to the MySQL database using provided credentials.
- **Comparison and Display:** Selects and displays names from `table2` that match those in `table1`.
- **Row Deletion:** Deletes rows from `table2` where the `name` column matches any `name` in `table1`.

#### Usage

1. **Update Connection Settings:** Configure the database connection settings in the script to match your environment.
2. **Execute Script:** Run the script on your PHP server to compare the tables and remove the matching rows.


## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

