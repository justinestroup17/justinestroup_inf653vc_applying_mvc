<?php include '../view/header.php'; ?>
<main>
    <h1>Add Product</h1>
    <form action="index.php" method="post" id="add_product_form">
        <input type="hidden" name="action" value="add_product">
        
        <label>Category:</label>
        <select name="category_id">
        <?php foreach ($categories as $category ) : ?>
            <option value="<?php echo $category['categoryID']; ?>">
            <?php echo $category['categoryName']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>

        <label>Item Num:</label>
        <input type="text" name="code" />
        <br>

        <label>Title:</label>
        <input type="text" name="name" />
        <br>

        <label>Description</label>
        <input type="text" name="name" />
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Task" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_products">View Task List</a>
    </p>
</main>
<?php include '../view/footer.php'; ?>