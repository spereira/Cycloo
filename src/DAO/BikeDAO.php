<?php

namespace Cycloo\DAO;
use Doctrine\DBAL\Connection;
use Cycloo\Domain\Bike;  
class BikeDAO
{
    /**
     * Database connection
     *
     * @var \Doctrine\DBAL\Connection
     */
    private $db;
    /**
     * Constructor
     *
     * @param \Doctrine\DBAL\Connection The database connection object
     */
    public function __construct(Connection $db) {
        $this->db = $db;
    }
    /**
     * Return a list of all articles, sorted by date (most recent first).
     *
     * @return array A list of all articles.
     */
    public function findAll() {
        $sql = "select * from t_bike order by bike_id desc";
        $result = $this->db->fetchAll($sql);

        // Convert query result to an array of domain objects
        $articles = array();
        foreach ($result as $row) {
            $bikeId = $row['bike_id'];
            $bikes[$bikeId] = $this->buildArticle($row);
        }
        return $bikes;
    }

    private function buildArticle($row) {
        $bike = new Bike();
        $bike->setId($row['bike_id']);
        $bike->setName($row['bike_name']);
        $bike->setDescription($row['bike_description']);
        return $bike;
    }
}