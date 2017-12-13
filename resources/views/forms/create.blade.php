<div class="modal fade" id="create-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form-create">          
          <div class="form-group">
            <label for="firstname">Firstname</label>
            <input required="" type="text" class="form-control" name="firstname">
          </div>
          <div class="form-group">
            <label for="lastname">Lastname</label>
            <input required="" type="text" class="form-control" name="lastname">
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <input required="" type="text" class="form-control" name="address">
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input required="" type="email" class="form-control" name="email">
          </div>         
        </form>
      </div>
      <div class="modal-footer">        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="store" type="button" class="btn btn-primary">Save changes</button>        
      </div>
    </div>
  </div>
</div>