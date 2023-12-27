<!-- The Modal -->
<div class="modal fade" id="metaMask">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Meta Mask</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <form id="myForm">
                    <div class="form-group">
                        <label for="input1">Input 1:</label>
                        <input type="text" class="form-control" id="input1" placeholder="Enter Input 1">
                    </div>
                    <div class="form-group">
                        <label for="input2">Input 2:</label>
                        <input type="text" class="form-control" id="input2" placeholder="Enter Input 2">
                    </div>
                    <button type="button" class="btn btn-primary" onclick="submitForm()">Submit</button>

                    <!-- Loader -->
                    <div class="spinner-border text-primary mt-3" role="status" id="loader" style="display: block;">
                        <span class="sr-only">Loading...</span>
                    </div>

                    <!-- Error Message -->
                    <div id="errorMessage" class="text-danger mt-3" style="display: none;"></div>
                </form>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>