<?php
require_once 'core/Database.php';
require_once 'models/User.php';
class UserService {
    public function getAllUsers() {
        $db = Database::getInstance()->getConnection(); #getting access to the database
        $stmt = $db->query('SELECT * FROM users'); #getting the required information from the db
        $users = [];

        #from each record, we create a new object and add it to the array
        while ($row = $stmt->fetch()) {
            $users[] = new User($row['name'],$row['id']);
        }
        return $users;
    }
}