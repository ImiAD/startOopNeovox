<?php

class NewsDB implements IteratorAggregate
{
    private array $items = [];
    private $conn = null;
    private string $host = 'localhost';
    private string $dbName = 'news';
    private string $user = 'root';
    private string $password = '';

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
    public function addCategories(): void
    {
        try {
            $sql = "INSERT INTO category(id, name)
                    VALUES (NULL, :name)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['name' => 'Микроволновки']);
    } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }

    }

    public function getIterator()
    {
        return new ArrayIterator($this->items);
    }
    public function __destruct()
    {
        unset($this->conn);
        echo '<hr>';
        echo 'Шалость удалась.';
        echo '<hr>';
    }
}

$obj = new NewsDB();
//$results = $obj->getIterator();

//$obj->addCategories();

echo '<pre>';
print_r($obj);
echo '</pre>';
//echo '<pre>';
//print_r($results);
//echo '</pre>';
