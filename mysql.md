Step 1: Verify OpenSSH is Installed
1. Open PowerShell and check if the ssh command is available:
ssh -V

Step 2: Gather SSH Connection Details
You need the following information:
Hostname (or IP address): e.g., yourdomain.com or the server's IP.
Port: Default is 22, but your host may use a custom port.
Username: Your cPanel username.
Password: Your cPanel password (or SSH key for key-based authentication).

Step 3: Connect to the SSH Server
  1. Open PowerShell.
  2. Use the following command to initiate an SSH connection:
  : ssh username@hostname -p 22

  Replace:
  - username with your cPanel username.
  - hostname with your domain name or server IP.
  - 22 with the correct port number if not the default.

  3. Enter your password when prompted.

Step 3: Run the mysqldump Command
In the cPanel Terminal, use the following syntax to export your database:
$ mysqldump -u username -p database_name > /home/your_cpanel_user/backup.sql

Replace:
  - username: Your MySQL username (typically your cPanel username unless you created a custom MySQL user).
  - database_name: The name of the database you want to export.
  - /home/your_cpanel_user/backup.sql: The file path where you want to save the exported database.

After running the command:
  - Enter your MySQL password when prompted.


## Importing a MySQL or MariaDB Database:- ##

1. First, log in to MySQL as root or another user with sufficient privileges to create new databases:
This command will bring you into the MySQL shell prompt.
$ mysql -u root -p

2. List all databases
$ show databases;

3. Next, create a new database with the following command.
$ mysql> CREATE DATABASE new_database;

4. You’ll see this output confirming the database creation.
Output
Query OK, 1 row affected (0.00 sec)

5. Then exit the MySQL shell by pressing CTRL+D.

6. From the normal command line, you can import the dump file with the following command:
$ mysql -u username -p new_database < data-dump.sql
For ex:
$ mysql -u username -p arcocafenew_new_staging < D:\arcocafenew_new_staging.sql
$ mysql -u root -p reddoorproperty_db_local < D:\reddoorproperty_db_local.sql
mysql -u root -p reddoorproperty_db_local  rpg_posts < D:\reddoorproperty_db_local.sql

7. 
$ mysql> USE database_name;

$ mysql> SHOW TABLES;

or

If WAMP's mysql console
1. 
$ mysql> CREATE DATABASE db_name;

2.
$ mysql> SHOW DATABASES;

3. 
$ mysql> USE db_name;

3.
$ mysql> SELECT DATABASE();

4. 
$ mysql> SOURCE D:/db_name.sql;

