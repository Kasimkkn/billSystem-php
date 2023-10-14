<table class="table table-striped" id="table">
<div class="modalBtn" style="display:flex; justify-content:center;">
    <button class="btn" onclick="openAddModal('customer')">Add</button>
    <?php include('addModal.php')?>
</div>

    <h3 class="mb-2 " style="text-align:center;">Customer</h3>
    <thead>
        <tr>
            <th>Customer-Id</th>
            <th>Customer-name</th>
            <th>Product-name</th>
            <th>Address</th>
            <th>Changes</th>
            <th>Download</th>
        </tr>
    </thead>
    <tbody id="customersTable">

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