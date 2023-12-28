
<!-- add student -->

    <div class="container p-5">
        <div class="row">
            <div class="col-md-5 mt-5">
                <img src="<?php echo $baseurl;?>images/user.gif" style="width:100%">
            </div>
            <div class="col-md-7">
        <h3>Login <button type="button" class="btn btn-sm btn-danger float-end" data-bs-dismiss="modal">&times;</button></h3>
        <hr class="border border-1 border-dark">
        <form method="post">
       

            <div class="input-group mt-3">
            <input type="text" name="email" placeholder="email *" required class="form-control">
            </div>

            <div class="input-group mt-3">
            <input type="password" name="pass" placeholder="Password *" required class="form-control">
            </div>
            
           

            
            <div class="input-group mt-3">
                <input type="submit" name="add_login" value="Login" class="btn btn-md btn-primary text-white">
              

            </div>

               
            <div class="input-group mt-3">
            <b>Dont  have an Account ? <a href="<?php echo $mainurl;?>addstudent">Create account </a>
            </div>
        </form>



    </div>

 </div>
</div>
</div>    
</div>