<table class="table table-striped" id="table">
    <div class="modalBtn" style="display:flex; justify-content:center;">
    <button class="btn" onclick="openAddModal('products')">Add</button>
    <?php include('addModal.php')?>
    </div>
    <h3 class="mb-2 " style="text-align:center;">Products</h3>
    <thead>
        <tr>
            <th>P-Id</th>
            <th>Category</th>
            <th>Sub-Category</th>
            <th>Name</th>
            <th>Price</th>
            <th>Stocks</th>
            <th>Changes</th>
            <th>Download</th>
        </tr>
    </thead>
    <tbody id="productsTable">

    </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php include('../footer.php')?>