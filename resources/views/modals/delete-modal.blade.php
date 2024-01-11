<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="text-center mt-4 mb-3">Confirm Action</h3>
                        <p class="text-center">Are you sure you want to delete this record?</p>
                    </div>
                </div>
                <div class="row mt-3 mb-5">
                    <div class="col-sm-4 offset-sm-2 float-left">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                    <div class="col-sm-4 float-right">
                        <form method="post" id="deleteForm">
                            <input type="hidden" name="id" id="identity">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-block btn-danger" type="submit"
                                style="background: black; border: 1px solid black; outline: none">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
