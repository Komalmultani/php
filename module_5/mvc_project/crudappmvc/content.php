
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
        <li><a href="<?php echo $mainurl;?>manageprofile">Manage profile</a></li>
            <li><a href="<?php echo $mainurl;?>changepasssword">Chanage password</a></li>
            <li><a href="<?php echo $mainurl;?>manageorders">Manage Orders</a></li>
            <li><a href="<?php echo $mainurl;?>">Manage Card <span class="badge badge-sm bg-danger text-white"><?php echo  $totalcrd[0]["total"];?></a></li>
            <li><a href="<?php echo $mainurl;?>?logout-here" class="btn btn-sm btn-danger text-white ms-3">Logout</a></li>
        </ul>
    </div>

    <div class="col-md-9 mt-5 p-5">
        <h3 class="text-primary">Activate your Card</h3>
        <hr class="border border-1 border-primary w-75">

        <button type="button" class="btn btn-sm btn-primary"><span class="bi bi-backspace fs-5"></span>&nbsp;Back</button>

     
       
      
        <button type="button" class="btn btn-sm btn-primary ms-4" data-bs-toggle="modal" data-bs-target="#actcrd"><span class="bi bi-plus fs-5"></span>&nbsp;Activate New Card</button>
       
        <button type="button" class="btn btn-sm btn-success float-end"><span class="bi bi-printer fs-5"></span>&nbsp;Print Pdf</button>

        <div class="mt-5">
        <table id="examples" class="table table-responsive table-bordered table-hover mt-5 p-3">
            <thead>   
            <tr>
                <th>#srno</th>
                <th>Cardname</th>
                <th>studentId</th>
                <th>Phone</th>
                <th>staffid</th>
                <th>Address</th>
                <th>AddedDate</th>
                <th>view</th>
                <th>Edit</th>
                <th>delete</th>
               
            </tr>
            </thead>
            <tbody>

            <?php 
               foreach($shwcrd as $shwcrd1)
               {
            ?>
            <tr>
                <td><?php echo $shwcrd1["cardid"];?></td>
                <td><?php echo $shwcrd1["name"];?></td>
                <td><?php echo $shwcrd1["studentid"];?></td>
                <td><?php echo $shwcrd1["phone"];?></td>
                <td><?php echo $shwcrd1["staffid"];?></td>
                <td><?php echo $shwcrd1["address"];?></td>
                <td><?php echo $shwcrd1["added_date"];?></td>
                <td><a href="<?php echo $mainurl;?>viewcard?readid=<?php echo $shwcrd1["cardid"];?>" class="btn btn-sm btn-warning"><span class="bi bi-book"></span></a></td>

                <td><a href="<?php echo $mainurl;?>editcard?readid=<?php echo $shwcrd1["cardid"];?>" class="btn btn-sm btn-primary"><span class="bi bi-pencil"></span></a></td>
                
                <td><a href="<?php echo $mainurl;?>?delcardid=<?php echo $shwcrd1["cardid"];?>" onclick="return confirm('Are you sure to Delete data ?')" class="btn btn-sm btn-danger"><span class="bi bi-trash"></span></a></td>
            </tr>

            <?php 
               }
            ?>

        
        </tbody>
        </table>
        </div>

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


