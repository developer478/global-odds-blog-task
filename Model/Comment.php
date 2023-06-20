<?php
/**
 * @author           Jam <developer478@gmail.com>
 * @copyright        (c) 2023-2025, Jam. All Rights Reserved.
 * @link             https://codexnova.com
 */

namespace JamBlog\Model;

class Comment
{
    protected $oDb;

    public function __construct()
    {
        $this->oDb = new \JamBlog\Engine\Db;
    }

    public function get($keyword = '',$iOffset, $iLimit)
    {

        $query = "SELECT * FROM Posts";
        if($keyword){
            $query .= " Where title LIKE '%".$keyword."%'";
        }

        $query .= ' ORDER BY createdDate DESC LIMIT :offset, :limit';

        $oStmt = $this->oDb->prepare($query);
        $oStmt->bindParam(':offset', $iOffset, \PDO::PARAM_INT);
        $oStmt->bindParam(':limit', $iLimit, \PDO::PARAM_INT);
        $oStmt->execute();
        return $oStmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getAll()
    {
        $oStmt = $this->oDb->query('SELECT * FROM Posts ORDER BY createdDate DESC');
        return $oStmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function add(array $commentData)
    {
        $oStmt = $this->oDb->prepare('INSERT INTO comments (post_id, body, user_name) VALUES(:post_id, :body, :user_name)');
        return $oStmt->execute($commentData);
    }

    public function getById($iId)
    {
        $oStmt = $this->oDb->prepare('SELECT * FROM Posts WHERE id = :postId LIMIT 1');
        $oStmt->bindParam(':postId', $iId, \PDO::PARAM_INT);
        $oStmt->execute();
        return $oStmt->fetch(\PDO::FETCH_OBJ);
    }

    public function getByPostId($iId,$iOffset = 0, $iLimit = 10)
    {
        $query = "SELECT * FROM comments where post_id =$iId ORDER BY createdAt DESC LIMIT :offset, :limit";

        $oStmt = $this->oDb->prepare($query);
        $oStmt->bindParam(':offset', $iOffset, \PDO::PARAM_INT);
        $oStmt->bindParam(':limit', $iLimit, \PDO::PARAM_INT);
        $oStmt->execute();
        return $oStmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function update(array $aData)
    {
        $oStmt = $this->oDb->prepare('UPDATE Posts SET title = :title, body = :body WHERE id = :postId LIMIT 1');
        $oStmt->bindValue(':postId', $aData['post_id'], \PDO::PARAM_INT);
        $oStmt->bindValue(':title', $aData['title']);
        $oStmt->bindValue(':body', $aData['body']);
        return $oStmt->execute();
    }

    public function delete($iId)
    {
        $oStmt = $this->oDb->prepare('DELETE FROM Posts WHERE id = :postId LIMIT 1');
        $oStmt->bindParam(':postId', $iId, \PDO::PARAM_INT);
        return $oStmt->execute();
    }
}
