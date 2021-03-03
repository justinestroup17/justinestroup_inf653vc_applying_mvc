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
            <?php foreach ($todoitems as $todoitem) : ?>
            <tr>
                <td><?php echo $todoitem['itemNum']; ?></td>
                <td><?php echo $todoitem['title']; ?></td>
                <td><?php echo $todoitem['description']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_product">
                    <input type="hidden" name="item_num"
                           value="<?php echo $todoitem['itemNum']; ?>">
                    <input type="hidden" name="category_id"
                           value="<?php echo $todoitem['categoryID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p class="last_paragraph">
            <a href="?action=show_add_form">Add task</a>
        </p>
    </section>
</main>
<?php include '../view/footer.php'; ?>