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