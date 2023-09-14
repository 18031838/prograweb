<?php
    class Conexion{
        private $DBType = 'mysqli';
        private $DBServer = 'localhost';
        private $DBUser = 'webmaster';
        private $DBPass = rawurlencode('1234');
        private $DBName = 'prograweb';
    }

    /*
    create user webmaster@localhost identified by '1234';
    GRANT ALL on prograweb.* TO webmaster@localhost;
    */
    
?>