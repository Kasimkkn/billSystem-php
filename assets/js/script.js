$(document).ready(function () {
  fetchTableData("productsTable", "products");
  fetchTableData("customersTable", "customer");
  fetchTableData("salesTable", "bills");
});

function fetchTableData(divId, tableName) {
  $.ajax({
    url: "include/functions.php",
    type: "POST",
    data: { table: tableName },
    success: function (response) {
      $("#" + divId).html(response);
    },
    error: function (xhr, status, error) {
      console.error(xhr.responseText);
    },
  });
}

function openAddModal(table) {
  
  // Customize modal content based on the selected table
  switch (table) {
    case "products":
      $("#product-modal-body").html("");
      $("#product-modal-body").append(`
         <form id="addProductForm">
          <div class="form-group">
              <label style="text-transform:uppercase; margin: 10px; font-weight: 700;"
                  for="ProductCategory">CATEGORY:</label>
              <input type="text" class="form-control p-3" id="ProductCategory" name="category" required>
          </div>
          <div class="form-group">
              <label style="text-transform:uppercase; margin: 10px; font-weight: 700;"
                  for="ProductSubCategory">SUBCATEGORY:</label>
              <input type="text" class="form-control p-3" id="ProductSubCategory" name="subCategory" required>
          </div>
          <div class="form-group">
              <label style="text-transform:uppercase; margin: 10px; font-weight: 700;"
                  for="productName">NAME:</label>
              <input type="text" class="form-control p-3" id="productName" name="name" required>
          </div>
          <div class="form-group">
              <label style="text-transform:uppercase; margin: 10px; font-weight: 700;"
                  for="prodcutPrice">PRICE:</label>
              <input type="text" class="form-control p-3" id="prodcutPrice" name="price" required>
          </div>
          <div class="form-group">
              <label style="text-transform:uppercase; margin: 10px; font-weight: 700;"
                  for="productStocks">STOCKS:</label>
              <input type="text" class="form-control p-3" id="productStocks" name="stocks" required>
          </div>
          <button type="submit" style="margin: 10px;" class="btn btn-dark">ADD</button>
      </form>
          `);

      // Show the modal
      $("#addProductModal").show();
      break;

    case "customer":
      $("#customer-modal-body").html("");

      $("#customer-modal-body").append(`
      <form id="addcustomerForm">
      <div class="form-group">
          <label style="text-transform:uppercase; margin: 10px; font-weight: 700;"
              for="customerName">Name:</label>
          <input type="text" class="form-control p-3" id="customerName" name="customerName" required>
      </div>
      <div class="form-group">
          <label style="text-transform:uppercase; margin: 10px; font-weight: 700;"
              for="customerAddress">ADDRESS:</label>
          <input type="text" class="form-control p-3" id="customerAddress" name="customerAddress" required>
      </div>
      <button type="submit" style="margin: 10px;" class="btn btn-dark">ADD</button>
  </form>
          `);
      // Show the modal
      $("#addcustomerModal").show();

      break;
    case "sales":
      $("#sales-modal-body").html("");
      $("#sales-modal-body").append(`
       <form id="addbillsForm" method="POST">
      <div class="form-group">
          <label style="text-transform:uppercase; margin: 10px; font-weight: 700;"
              for="products">PRODUCT:</label>
          <input type="text" class="form-control p-3" id="product_id" name="product_id" required>
      </div>
      <div class="form-group">
          <label style="text-transform:uppercase; margin: 10px; font-weight: 700;"
              for="customer">CUSTOMER:</label>
          <input type="text" class="form-control p-3" id="customer_id" name="customer_id" required>
      </div>
      <div class="form-group">
          <label style="text-transform:uppercase; margin: 10px; font-weight: 700;"
              for="address">ADDRESS:</label>
          <input type="text" class="form-control p-3" id="address" name="address" required>
      </div>
      <button type="submit" style="margin: 10px;" class="btn btn-dark">ADD</button>
  </form>
          `);
      // Show the modal
      $("#addbillsModal").show();
      break;
  }
}
function closeModal() {
  $("#addProductModal").hide();
  $("#addcustomerModal").hide();
  $("#addbillsModal").hide();
}
