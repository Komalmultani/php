
<!-- add student -->

    <div class="container p-5">
        <div class="row">
            <div class="col-md-5 mt-5">
                <img src="<?php echo $baseurl;?>images/user.gif" style="width:100%">
            </div>
            <div class="col-md-7">
        <h3>Add Students <button type="button" class="btn btn-sm btn-danger float-end" data-bs-dismiss="modal">&times;</button></h3>
        <hr class="border border-1 border-dark">
        <form method="post">
            <div class="input-group mt-3">
                <input type="text" name="name" placeholder="Name *" required class="form-control">
            </div>
 

            <div class="input-group mt-3">
            <input type="text" name="email" placeholder="email *" required class="form-control">
            </div>

            <div class="input-group mt-3">
            <input type="password" name="pass" placeholder="Password *" required class="form-control">
            </div>
            
            <div class="input-group mt-3">
                <input type="text" name="phone" placeholder="Phone *" required class="form-control">
            </div>

            <div class="input-group mt-3">
                <textarea name="address" placeholder="Address *" required class="form-control"></textarea>
            </div>

              <div class="input-group mt-3">
                <select name="country"  required class="form-control">
                    <option value="">-select country-</option>
                    <?php
                    foreach($cnlist as $cn)
                    {
                    ?>
                    <option value="<?php echo $cn["countryid"];?>"><?php echo $cn["countryname"];?></option>
                    <?php 
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
                    ?>
                    <option value="<?php echo $st["stateid"];?>"><?php echo $st["statename"];?></option>
                    <?php 
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
                    ?>
                    <option value="<?php echo $ct["cityid"];?>"><?php echo $ct["cityname"];?></option>
                    <?php 
                    }
                    ?>
                </select>
            </div>

            
            <div class="input-group mt-3">
                <input type="submit" name="addstudent" value="Add Student" class="btn btn-md btn-primary text-white">
                <input type="reset" name="reset" value="Reset" class="btn btn-md btn-danger text-white ms-2">

            </div>

               
            <div class="input-group mt-3">
            <b>Already have an Account ? <a href="<?php echo $mainurl;?>login">Login here </a>
            </div>
        </form>



    </div>

 </div>
</div>
</div>    
</div>