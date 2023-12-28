
<!-- content here -->
<script>
function addlogin()
{
    alert('Are you sure to Activate your card Login first')
    window.location='./login';
}
</script>

<?php 
if(isset($_SESSION["studentid"]))
{

?>
<div class="container-fluid mt-5 p-5">
 <div class="row">
     <div class="col-md-3 mt-5 p-5">
        <ul class="sidebar-link">
        <li><a href="#" class="text-primary"><h3>Join Us</h3></a></li>
        <li><a href="#">24x7 support</a></li>
        <li><a href="<?php echo $mainurl;?>manageprofile">Manage Profile</a></li>
        <li><a href="#">Change Password</a></li>
        <li><a href="#">Manage cards <span class="badge badge-sm bg-danger pill-circle"><?php echo  $totalcrd[0]["total"];?></a></li>
        <li><a href="#">Delete Account</a></li>
        <li><a href="<?php echo $mainurl;?>?logout-here" class="text-white btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#log">Logout <span class="bi bi-power text-white"></span></a></li>
        </ul>
    </div>

    <div class="col-md-9 mt-5 p-5">
        <h3 class="text-primary">Edit card details</h3>
        <hr class="border border-1 border-primary w-75">

        <button type="button" class="btn btn-sm btn-primary"><span class="bi bi-backspace fs-5"></span>&nbsp;Back</button>
      
        <button type="button" class="btn btn-sm btn-primary ms-4" data-bs-toggle="modal" data-bs-target="#actcrd"><span class="bi bi-plus fs-5"></span>&nbsp;Activate New Card</button>
       
        <button type="button" class="btn btn-sm btn-success float-end"><span class="bi bi-printer fs-5"></span>&nbsp;Print Pdf</button>

        <form method="post">
        <div class="mt-5">
        <table class="table table-responsive table-bordered table-hover mt-5 p-3">
            <thead>   
         
                <tr>
                <th class="text-success">Edit CardName</th>
                <td><input type="text" name="name" value="<?php echo $shwcarddata[0]["name"];?>" class="form-control"> </td>
                </tr>
                <tr>
                <th class="text-success">Edit StudentName</th>
                <td><input type="text" name="stdid" value="<?php echo $shwcarddata[0]["studentname"];?>" class="form-control" readonly disabled> </td>
                </tr>

                <tr>
                <th class="text-success">Edit Phone</th>
                <td><input type="text" name="phone" value="<?php echo $shwcarddata[0]["phone"];?>" class="form-control"> </td>
                </tr>

                <tr>
                <th class="text-success">Edit Statff</th>
                <td>   
                <select  name="staffid" placeholder="Staffid *" required class="form-control">
                <option value="">-select staff-</option>
                <?php
                foreach($shwstaff as  $shwstaff1)
                { 
                    if($shwcarddata[0]["staffid"]==$shwstaff1["staffid"])
                    {
                ?>
                <option value="<?php echo  $shwcarddata[0]["staffid"];?>" selected="selected"><?php echo  $shwcarddata[0]["staffname"];?></option>

                <?php 
                }
                else 
                {
                ?>
                
                <option value="<?php echo  $shwstaff1["staffid"];?>"><?php echo  $shwstaff1["staffname"];?></option>

                <?php 
                }
            }
                ?>
                </select>
            
            </td>
            </tr>
                <tr>
                <th class="text-success">Edit Address</th>
                <td><input type="text" name="address" value="<?php echo $shwcarddata[0]["address"];?>" class="form-control"> </td>
                </tr>
                <tr>
                <th class="text-success">Edit Added date</th>
                <td><input type="text" name="date" value="<?php echo $shwcarddata[0]["added_date"];?>" class="form-control"> </td>
                </tr>
                <tr>
              
                <td colspan="2" align="center"><input type="submit" name="updcard" value="Update Card" class="btn btn-primary btn-sm"></td>
                </tr>
           
               
           
            </thead>
            <tbody>

      
   
        
        </tbody>
        </table>
        </div>

        </form>
    </div>
</div>
</div>

<?php 
}
else 
{
?>


<div class="container-fluid mt-5 p-5">
 <div class="row">
     <div class="col-md-5 mt-5 p-5">
       <img src="https://images.ctfassets.net/lbl105a14rhd/3bQZeBARY2OznNLtj2t79y/5137f9de87c5f3e2d15266c44ce1604b/d619b088-1385-4609-b357-b19cbc2afcac.gif" style="width:100%">
    </div>

    <div class="col-md-7 mt-5 p-5">
        <h3 class="text-primary">Activate your Card</h3>
        <hr class="border border-1 border-primary w-75">

        <button type="button" class="btn btn-sm btn-primary ms-4" onclick="addlogin()"><span class="bi bi-plus fs-5"></span>&nbsp;Activate New Card</button>       


    </div>
</div>
</div>    




<?php 
}
?>


