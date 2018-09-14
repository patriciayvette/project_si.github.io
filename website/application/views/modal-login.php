  <!-- Modal -->
   <div class="modal fade" id="lgn" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <div class="alert alert-info">Please Enter Required Details Below.</div>
        </div>
          <div class="modal-body">
            <form class="form-horizontal" action="<?php echo base_URL(); ?>index.php/welcome/do_login" method="post">
              
              <div class="control-group">
                <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
                <input type="text" class="form-control"name="uid" required placeholder="Enter username">
              </div>
              <div class="control-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                <input type="password" class="form-control" name="psw" required placeholder="Enter password">
              </div>
               <div class="modal-footer">
                  <button type="submit" class="btn btn-success btn-default pull-left"><span class="glyphicon glyphicon-off"></span> Login</button>
                </form>
                  <button class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
              </div>
      </div>
      <!-- modal content end -->
      
  </div>
</div>
<!--Modal end-->