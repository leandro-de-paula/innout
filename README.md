# innout
![GitHub repo size](https://img.shields.io/github/repo-size/leandro-de-paula/innout?style=for-the-badge)
![GitHub language count](https://img.shields.io/github/languages/count/leandro-de-paula/innout?style=for-the-badge)

>Open source project for point of work registration

## About the innout
This project is a replica of the project developed by **cod3r** and provided to the students of the complete php 7 course, in which everything that was aborted in the course during the innout development process is put into practice.
innout is a project for the use of the RH department in order to record the hours of employees in addition to managing them on the subject.
Its implementation is simple and easy to use.

## 💻 Prerequisites
Before you begin, make sure you've met the following requirements:
- Have a `<Windows / Linux / Mac>` machine.
- Install version `<PHP 7>` or higher with database.
- Have `<git>` installed.

## 🚀 Installing <innout>
 
To install <innout> follow these steps:
 
Linux: `<Terminal>` | macOS: `<Terminal>` | Windows: `<cmd>` | Android: `<Termux>`:
 
1 - Clone or Download the Project:
_**Important Note**: CLONE or DOWNLOAD the project directly into the responsible PHP repository._
 
**Clone:**
 
```
git clone https://github.com/leandro-de-paula/innout.git
```

**Download zip:** ⬇️
[innout](https://github.com/leandro-de-paula/innout/archive/main.zip).

2 - To create the sample database, table, and insert, access the following file:
```
extras/db.sql
```
>Copy and paste, or run this file in your database manager

3 - Create a file called env.ini inside the `<src>` folder, then copy the structure that is in the env.sample.ini file that is also in the `<src>` folder, paste it in the env.ini file and then fill in the data of your database environment and save.

## ⚙️ Settings
1 - This configuration is for **Linux Ubuntu** environments with **Apache**.
2 - **Backup** - Let's back up apache configuration files before modifying them.
Copy and paste the files below in a location of your choice;

File:
**000-default.conf**
Path:
```
/etc/apache2/sites-enabled/000-default
```

File:
**apache2.conf**
Path:
```
/etc/apache2/apache2.conf
```


3 - Change the document root of the Apache web server, for that open the **000-default.conf** file in your text editor and search for **DocumentRoot**:

```sh
     #However, you must set it for any further virtual host explicitly.
     #ServerName www.example.com

     ServerAdmin webmaster@localhost
     DocumentRoot /var/www/html/innout/public/
```


4 - In the Apache configuration file **apache2.conf** change the directives as follows in your text editor:

```xml
<Directory /usr/share>
     AllowOverride None
     Require all granted
</Directory>

<Directory var/www/html/innout/public>
     Options Indexes FollowSymLinks
     AllowOverride All
     Require all granted
</Directory>

```

5 - Restart apache:

```sh
sudo service apache2 restart
```


## 🚧 Under development 🚧 



