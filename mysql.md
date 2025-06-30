# MySQL Database Export & Import via SSH

## Exporting a MySQL Database

### 1. Verify OpenSSH Installation
- Open PowerShell and check if SSH is available:
  ```sh
  ssh -V
  ```

### 2. Gather SSH Connection Details
- **Hostname/IP:** e.g., `yourdomain.com` or server IP
- **Port:** Default is `22` (may vary)
- **Username:** Your cPanel username
- **Password:** Your cPanel password (or SSH key)

### 3. Connect to the SSH Server
- Open PowerShell and run:
  ```sh
  ssh username@hostname -p 22
  ```
  - Replace `username`, `hostname`, and `22` as needed.
- Enter your password when prompted.

### 4. Export the Database with `mysqldump`
- In the SSH session, run:
  ```sh
  mysqldump -u username -p database_name > /home/your_cpanel_user/backup.sql
  ```
  - Replace:
    - `username`: MySQL username (often your cPanel username)
    - `database_name`: Name of the database to export
    - `/home/your_cpanel_user/backup.sql`: Desired backup file path
- Enter your MySQL password when prompted.

---

## Importing a MySQL or MariaDB Database

### 1. Log in to MySQL
- From the command line:
  ```sh
  mysql -u root -p
  ```
- Enter your MySQL password.

### 2. List Databases
  ```sql
  SHOW DATABASES;
  ```

### 3. Create a New Database
  ```sql
  CREATE DATABASE new_database;
  ```
- Output should confirm creation.

### 4. Exit MySQL Shell
- Press `CTRL+D` or type `exit`.

### 5. Import the Dump File
- From the command line:
  ```sh
  mysql -u username -p new_database < data-dump.sql
  ```
  - Example:
    ```sh
    mysql -u username -p arcocafenew_new_staging < D:\arcocafenew_new_staging.sql
    mysql -u root -p reddoorproperty_db_local < D:\reddoorproperty_db_local.sql
    ```

### 6. Verify Import
- Log in to MySQL and select your database:
  ```sql
  USE database_name;
  SHOW TABLES;
  ```

---

## Importing via WAMP MySQL Console

1. Create the database:
   ```sql
   CREATE DATABASE db_name;
   ```
2. Show databases:
   ```sql
   SHOW DATABASES;
   ```
3. Select the database:
   ```sql
   USE db_name;
   SELECT DATABASE();
   ```
4. Import the SQL file:
   ```sql
   SOURCE D:/db_name.sql;
   ```
