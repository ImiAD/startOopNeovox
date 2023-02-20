<?php
/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 20.02.2023
 * Time: 14:25
 */

class NewsDB implements IteratorAggregate
{
    private array $items = [];
    private $conn = null;
    private string $host = 'localhost';
    private string $dbName = 'news';
    private string $user = 'root';
    private string $password = '';
    private string $error;

    public function __construct()
    {
        $dsn = "mysql:host=".$this->host.";dbname=".$this->dbName.";";
        try {
            $this->conn = new PDO($dsn, $this->user, $this->password);
        } catch (PDOException $e) {
            $this->conn  = null;
            $this->error = $e->getMessage();
        }
        $this->getCategories();
    }

    public function getError(): string
    {
        return $this->error;
    }

    private function getCategories()
    {
        $sql  = "SELECT id, name FROM category";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        foreach ($results as $result) {
            $this->items[$result['id']] = $result['name'];
        }

        return  $this->items;

    }

    public function getIterator()
    {
        return new ArrayIterator($this->items);
    }
}

//$obj = new NewsDB();
//$results = $obj->getIterator();
//echo '<pre>';
//print_r($obj);
//echo '</pre>';

//echo '<pre>';
//print_r($results);
//echo '</pre>';
