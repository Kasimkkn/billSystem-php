<!-- modal to update the data-->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Product Data</h5>
                <button type="button" id="closeUPModal" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="updateForm">
                    <div class="form-group">
                        <label style="text-transform:uppercase; margin: 10px; font-weight: 700;"
                            for="updateCategory">category:</label>
                        <input type="text" class="form-control p-3" id="updateCategory" name="updateCategory" required>
                    </div>
                    <div class="form-group">
                        <label style="text-transform:uppercase; margin: 10px; font-weight: 700;"
                            for="updateSubCategory">sub-category:</label>
                        <input type="text" class="form-control p-3" id="updateSubCategory" name="updateSubCategory"
                            required>
                    </div>
                    <div class="form-group">
                        <label style="text-transform:uppercase; margin: 10px; font-weight: 700;"
                            for="updateName">Name:</label>
                        <input type="text" class="form-control p-3" id="updateName" name="updateName" required>
                    </div>
                    <div class="form-group">
                        <label style="text-transform:uppercase; margin: 10px; font-weight: 700;"
                            for="updatePrice">PRICE:</label>
                        <input type="text" class="form-control p-3" id="updatePrice" name="updatePrice" required>
                    </div>
                    <div class="form-group">
                        <label style="text-transform:uppercase; margin: 10px; font-weight: 700;"
                            for="updateStocks">STOCKS:</label>
                        <input type="text" class="form-control p-3" id="updateStocks" name="updateStocks" required>
                    </div>
                    <input type="hidden" id="updateProductId" name="updateProductId">
                    <button type="submit" style="margin: 10px;" class="btn btn-dark">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>