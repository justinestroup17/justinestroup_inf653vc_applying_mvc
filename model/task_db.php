<?php
    function get_tasks_by_category($category_id) {
        global $db;
        $query = 'SELECT *
                  FROM todoitems
                  WHERE todoitems.categoryID = :category_id';
        $statement = $db->prepare($query);
        $statement->bindValue(":category_id", $category_id);
        $statement->execute();
        $tasks = $statement->fetchAll();
        $statement->closeCursor();
        return $tasks;
    }
    function get_task($item_num) {
        global $db;
        $query = 'SELECT *
                  FROM todoitems
                  WHERE itemNum = :item_num';
        $statement = $db->prepare($query);
        $statement->bindValue(":item_num", $item_num);
        $statement->execute();
        $task = $statement->fetch();
        $statement->closeCursor();
        return $task;
    }
    function delete_task($item_num) {
        global $db;
        $query = 'DELETE FROM todoitems
                  WHERE itemNum = :item_num';
        $statement = $db->prepare($query);
        $statement->bindValue(":itemNum", $item_num);
        $statement->execute();
        $statement->closeCursor();
    }
    function add_task($item_num, $title, $description, $category_id){
        global $db;
        $query = 'INSERT INTO todoitems
                    (itemNum, title, description, categoryID)
                  VALUES
                    (:item_num, :title, :description, :category_id)';
        $statement = $db->prepare($query);
        $statement->bindValue(':item_num', $item_num);
        $statement->bindValue(':title', $title);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':category_id', $category_id);
        $statement->execute();
        $statement->closeCursor();
    }
?>