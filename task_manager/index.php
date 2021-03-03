<?php
require('../model/database.php');
require('../model/category_db.php');
require('../model/task_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_products';
    }
}
if ($action == 'list_products') {
    $category_id = filter_input(INPUT_GET, 'category_id',
                FILTER_VALIDATE_INT);
    if ($category_id == NULL || $category_id == FALSE) {
        $category_id = 1;
    }
    $category_name = get_category_name($category_id);
    $categories = get_categories();
    $tasks = get_tasks_by_category($category_id);
    include('task_list.php');
} else if ($action == 'delete_task') {
    $task_id = filter_input(INPUT_POST, 'task_id',
                FILTER_VALIDATE_INT);
    $category_id = filter_input(INPUT_POST, 'category_id',
                FILTER_VALIDATE_INT);
    if ($category_id == NULL || $category_id == FALSE ||
         $task_id == NULL || $task_id == FALSE) {
        $error = "Missing or incorrect task id or category id.";
        include('..errors/error.php');
    } else {
        delete_task($task_id);
        header("Location: .?category_id=$category_id");
    }
} else if ($action == 'show_add_form') {
    $categories = get_categories();
    include('task_add.php');
} else if ($action == 'add_product') {
    $category_id = filter_input(INPUT_POST, 'category_id', 
            FILTER_VALIDATE_INT);
    $title = filter_input(INPUT_POST, 'title');
    $description = filter_input(INPUT_POST, 'description');
    if ($category_id == NULL || $category_id == FALSE || $title == NULL || 
            $title == NULL || $description == NULL || $description == FALSE) {
        $error = "Invalid product data. Check all fields and try again.";
        include('../errors/error.php');
    } else { 
        add_task($item_num, $title, $description, $category_id);
        header("Location: .?category_id=$category_id");
    }
}
?>