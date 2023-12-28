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
        <h3 class="text-primary">Manage your profile</h3>
        <hr class="border border-1 border-primary w-75">


        <form method="post">
            <div class="input-group mt-3">
                <input type="text" name="name" value="<?php echo $mangeprof[0]["studentname"];?>" placeholder="Name *" required class="form-control">
            </div>
 

            <div class="input-group mt-3">
            <input type="text" name="email" value="<?php echo $mangeprof[0]["email"];?>" placeholder="email *" required class="form-control">
            </div>

    
            
            <div class="input-group mt-3">
                <input type="text" name="phone" value="<?php echo $mangeprof[0]["phone"];?>" placeholder="Phone *" required class="form-control">
            </div>

            <div class="input-group mt-3">
                <textarea name="address" placeholder="Address *" required class="form-control"> 
                <?php echo $mangeprof[0]["address"];?>
                </textarea>
            </div>

              <div class="input-group mt-3">
                <select name="country"  required class="form-control">
                    <option value="">-select country-</option>
                    <?php
                    foreach($cnlist as $cn)
                    {
                        if($mangeprof[0]["countryid"]==$cn["countryid"])
                        {
                    ?>
                    <option value="<?php echo $mangeprof[0]["countryid"];?>" selected='selected'><?php echo $mangeprof[0]["countryname"];?></option>
                    <?php 
                    }
                    else 
                    {
                    ?>
                      <option value="<?php echo $cn["countryid"];?>"><?php echo $cn["countryname"];?></option>

                     <?php 
                    }
                }
                ?> 
                </select>
            </div>


            <div class="input-group mt-3">
                <select name="state"  required class="form-control">
                    <option value="">-select state-</option>
                    <?php
                    foreach($stlist as $st)
                    {
                        if($mangeprof[0]["stateid"]==$st["stateid"])
                        {
                    ?>
                    <option value="<?php echo $mangeprof[0]["stateid"];?>" selected='selected'><?php echo $mangeprof[0]["statename"];?></option>
                    <?php 
                    }
                    else 
                    {
                    ?>
                    
                    <option value="<?php echo $st["stateid"];?>"><?php echo $st["statename"];?></option>
                    <?php 
                    }
                }
                    ?>
                </select>
            </div>


            <div class="input-group mt-3">
                <select name="city"  required class="form-control">
                    <option value="">-select city-</option>
                    <?php
                    foreach($ctlist as $ct)
                    {
                        if($mangeprof[0]["cityid"]==$ct["cityid"])
                        {
                    ?>
                    <option value="<?php echo $mangeprof[0]["cityid"];?>" selected='selected'><?php echo $ct["cityname"];?></option>
                    <?php 
                    }
                    else 
                    {
                    ?>

                    
<option value="<?php echo $ct["cityid"];?>"><?php echo $ct["cityname"];?></option>

<?php 
                    }
                }
                ?>
                </select>
            </div>

            
            <div class="input-group mt-3">
                <input type="submit" name="updatestudent" value="Update Student" class="btn btn-md btn-primary text-white">
             
            </div>

               
          
        </form>
       
      

        </div>

    </div>
</div>
</div>