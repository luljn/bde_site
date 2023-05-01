<?php

    namespace src\db\database;

    class DatabaseConnection{

        public ?\PDO $database = null;

        public function getConnection(): \PDO
        {
            if ($this->database === null) {
                $this->database = new \PDO('mysql:host=localhost;dbname=bde_site;charset=utf8', 'root', '');
            }

            return $this->database;
        }
    }
