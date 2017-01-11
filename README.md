## Flacks | Video Conference Software##
***Flacks is an open source web based video conferencing program***

![License](http://flacks.altervista.org/license.png)

## Getting Started ##

To have this work on your server your server must have ***https*** enabled

Server Configurations
-------
*server->connect.php*

You will need to modify the **connect.php** to reflect your database configurations

    <?
	    $host = "<YOUR_DATABASE_LOCATION>";
	    $user = "<YOUR_USERNAME>";
	    $password = "<YOUR_PASSWORD>";
	    $db = "<YOUR_DATABASE>";
    ?>

your will also need 2 tables ***users*** and ***numbers***

you can use the following 2 code blocks to create the tables you need

Create **users** table

    CREATE TABLE IF NOT EXISTS `users` (
	`id` int(255) NOT NULL AUTO_INCREMENT,
	`username` text NOT NULL,
	`password` text NOT NULL,
	`email` text NOT NULL,
	`number` int(255) NOT NULL,
	PRIMARY KEY (`id`)
	)

Create **numbers** table

    CREATE TABLE IF NOT EXISTS `numbers` (
    `id` int(255) NOT NULL AUTO_INCREMENT,
    `number` int(255) NOT NULL,
    `username` text NOT NULL,
    `taken` varchar(255) NOT NULL DEFAULT 'false',
    PRIMARY KEY (`id`)
    )

If you change the table names or field names make sure you update the corresponding code

## Contributions ##
This project is currently in a very early stage of development so all contributions are welcome just make sure your code works before submitting a pull request or it will be rejected
