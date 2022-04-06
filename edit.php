<?php
if (isset($_POST["editBtn"])) {
    $id = $_POST["editID"];
    $name = $_POST["editDataName"];
    $qty = $_POST["editDataAmount"];
    $expDate = $_POST["editDataExpire"];

    $editSql = "UPDATE `medstock` SET `stockName`='$name',`stockQty`='$qty',`stockExpDate`='$expDate' WHERE `stockID`='$id'";
    $result = mysqli_query($data, $editSql);

    if ($result) {
        echo '<script> alert("Data updated"); </script>';
    } else {
        echo '<script> alert("Data not updated"); </script>';
    }
}
?>

<div class="modal fade" id="editData<?php $fetch['stockID'] ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editData">Edit Stock Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <input type="hidden" name="editID" id="editID" value="<?php echo $fetch['stockID'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="editDataName" class="form-label">Stock Name</label>
                        <input type="text" class="form-control" name="editDataName" value="<?php echo $fetch['stockName'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="editDataAmount" class="form-label">Stock Amount</label>
                        <input type="text" class="form-control" name="editDataAmount" value="<?php echo $fetch['stockQty'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="editDataExpire" class="form-label">Stock Expiration Date</label>
                        <input type="date" class="form-control" name="editDataExpire" min="<?php echo date("Y-m-d"); ?>" value="<?php echo $fetch['stockExpDate'] ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" name="editBtn">Update Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>