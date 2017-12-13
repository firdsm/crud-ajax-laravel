<div class="modal fade" id="edit-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form-edit" action="">
          <template id="edit-template">
            <div class="form-group">
              <label for="firstname">Firstname</label>
              <input required="" value="@{{ firstname }}" type="text" class="form-control" name="firstname">
            </div>
            <div class="form-group">
              <label for="lastname">Lastname</label>
              <input required="" value="@{{ lastname }}" type="text" class="form-control" name="lastname">
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input required="" value="@{{ address }}" type="text" class="form-control" name="address">
            </div>
            <div class="form-group">
              <label for="email">E-mail</label>
              <input required="" value="@{{ email }}" type="email" class="form-control" name="email">
            </div>
            <input required="" type="hidden" name="id" value="@{{ id }}">
          </template>          
        </form>
      </div>
      <div class="modal-footer">        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="update" type="button" class="btn btn-success">Update data</button>
      </div>
    </div>
  </div>
</div>