<?php include '../view/header.php'; ?>
<main>
    <h1>To Do List</h1>
    
    <aside>
        <!-- display a list of categories -->
        <h2>Categories</h2>
        <nav>
        <ul>
        <?php foreach ($categories as $category) : ?>
            <li>
            <a href="?category_id=<?php echo $category['categoryID']; ?>">
            </a>
            </li>
        <?php endforeach; ?>
        </ul>
        </nav>
    </aside>
    <section>
        <!-- display a table of products -->
        <h2><?php echo $category_name; ?></h2>
        <table>
            <tr>
                <th>ItemNum</th>
                <th>Title</th>
                <th>Description</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($tasks as $task) : ?>
            <tr>
                <td><?php echo $tasks['itemNum']; ?></td>
                <td><?php echo $tasks['title']; ?></td>
                <td><?php echo $tasks['description']; ?></td>
                <td><?php echo $tasks['categoryID']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_task">
                    <input type="hidden" name="item_num"
                           value="<?php echo $tasks['itemNum']; ?>">
                    <input type="hidden" name="category_id"
                           value="<?php echo $tasks['categoryID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p class="last_paragraph">
            <a href="?action=show_add_form">Click Here to Add More Tasks</a>
        </p>
    </section>
</main>
<?php include '../view/footer.php'; ?>