<?php

use PHPUnit\Framework\TestCase;

const
DB_HOST = 'mysql',
DB_NAME = 'default',
DB_USR = 'root',
DB_PWD = 'root';

class PostTest extends TestCase
{

    protected static $pdo;
    protected static $tableName = 'testPosts';

    public static function setUpBeforeClass(): void
    {
        
        self::$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';',DB_USR,DB_PWD);
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Create the example table for testing
        self::$pdo->exec("CREATE TABLE IF NOT EXISTS " . self::$tableName . " (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(95) NOT NULL,
            body TEXT(500) NOT NULL,
            createdDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )");
    }

    public function testCreate()
    {
        // Insert a new record
        $title = 'Test Post';
        $body = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        It has survived not only five centuries, but also the leap into electronic typesetting,
         remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
         sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
         Aldus PageMaker including versions of Lorem Ipsum.";

        $stmt = self::$pdo->prepare("INSERT INTO " . self::$tableName . " (title, body) VALUES (?, ?)");
        $stmt->execute([$title, $body]);

        $this->assertEquals(1, $stmt->rowCount());
    }

    public function testRead()
    {
        // Fetch all records
        $stmt = self::$pdo->query("SELECT * FROM " . self::$tableName);
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $this->assertNotEmpty($records);
    }

    public function testUpdate()
    {

        $title = 'Test Post';
        $body = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        It has survived not only five centuries, but also the leap into electronic typesetting,
         remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
         sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
         Aldus PageMaker including versions of Lorem Ipsum.";

        // Update an existing record
        $stmt = self::$pdo->prepare("UPDATE " .
        self::$tableName . " SET title = ?, body = ?, createdDate = ? WHERE id = ?");
        $stmt->execute([$title,$body,'2023-06-20 13:02:31',1]);

        $this->assertEquals(1, $stmt->rowCount());
    }

    public function testDelete()
    {
        // Delete a record
        $stmt = self::$pdo->prepare("DELETE FROM " . self::$tableName . " WHERE id = ?");
        $stmt->execute([1]);

        $this->assertEquals(1, $stmt->rowCount());
    }

    public static function tearDownAfterClass(): void
    {
        // Drop the example table
        self::$pdo->exec("DROP TABLE IF EXISTS " . self::$tableName);
    }
}
