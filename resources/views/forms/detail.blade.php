<div class="modal fade" id="detail-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detail Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form-detail" action="">
          <template id="detail-template">
            <div class="form-group">
              <label for="firstname">Firstname</label>
              <input value="@{{ firstname }}" readonly type="text" class="form-control" name="firstname">
            </div>
            <div class="form-group">
              <label for="lastname">Lastname</label>
              <input value="@{{ lastname }}"  readonly type="text" class="form-control" name="lastname">
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input value="@{{ address }}"  readonly type="text" class="form-control" name="address">
            </div>
            <div class="form-group">
              <label for="email">E-mail</label>
              <input value="@{{ email }}"  readonly type="email" class="form-control" name="email">
            </div>
          </template>          
        </form>
      </div>
      <div class="modal-footer">        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>