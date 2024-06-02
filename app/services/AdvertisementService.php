<?php

require_once 'core/Database.php';
require_once 'models/Advertisement.php';

class AdvertisementService {
    public function getAllAdvertisements() {
        $db = Database::getInstance()->getConnection(); #getting access to the database
        $query = $db->query('SELECT advertisements.id, advertisements.title, users.name  FROM advertisements JOIN users ON advertisements.userid = users.id'); #getting the required information from the db
        $advertisements = [];

        #from each record, we create a new object and add it to the array
        while ($row = $query->fetch()) {
            $advertisements[] =new Advertisement($row['id'], $row['name'], $row['title']);
        }
        return $advertisements;
    }
}