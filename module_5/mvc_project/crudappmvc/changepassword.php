<div class="container-fluid mt-5 p-5">
 <div class="row">
     <div class="col-md-3 mt-5 p-5">
        <ul class="sidebar-link">
        <li><a href="<?php echo $mainurl;?>manageprofile">Manage profile</a></li>
            <li><a href="<?php echo $mainurl;?>changepasssword">Chanage password</a></li>
            <li><a href="<?php echo $mainurl;?>manageorders">Manage Orders</a></li>
            <li><a href="<?php echo $mainurl;?>">Manage Card <span class="badge badge-sm bg-danger text-white"><?php echo  $totalcrd[0]["total"];?></a></li>
            <li><a href="<?php echo $mainurl;?>?logout-here" class="btn btn-sm btn-danger text-white ms-3">Logout</a></li>
        </ul>
    </div>

    <div class="col-md-9 mt-5 p-5">
        <h3 class="text-primary">Change your password</h3>
        <hr class="border border-1 border-primary w-75">


        <form method="post">
            <div class="input-group mt-3">
                <input type="password" name="opass" placeholder="Enter Old password *" required class="form-control">
            </div>
            <div class="input-group mt-3">
                <input type="password" name="npass" placeholder="Enter New password *" required class="form-control">
            </div>

            <div class="input-group mt-3">
                <input type="password" name="cpass" placeholder="Enter confirm password *" required class="form-control">
            </div>

            <div class="input-group mt-3">
                <input type="submit" name="chngpassword" value="Submit" class="btn btn-md btn-primary text-white">
             
            </div>

               
          
        </form>
       
      

        </div>

    </div>
</div>
</div>