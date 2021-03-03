<?php include '..view/header.php'; ?>
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
            <?php endforeach; ?>
        </table>
    
    </section>
</main>