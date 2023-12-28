
<!-- add card Modal -->
<div class="modal fade" id="actcrd" role="dialog">
<div class="modal-dialog">
    <div class="modal-content p-5">
        <h3>Add Your Card <button type="button" class="btn btn-sm btn-danger float-end" data-bs-dismiss="modal">&times;</button></h3>
        <hr class="border border-1 border-dark">

        
        <form method="post">
            <div class="input-group mt-3">
                <input type="text" name="name" placeholder="Name *" required class="form-control">
            </div>
            
            <div class="input-group mt-3">
                
            <select  name="studentid" placeholder="Studentid *" required class="form-control">
                <option value="">-select student-</option>
                <?php
                foreach($shwstudent as  $shwstudent1)
                { 
                ?>
                <option value="<?php echo  $shwstudent1["studentid"];?>"><?php echo  $shwstudent1["studentname"];?></option>

                <?php 
                }
                ?>
</select>
            </div>
            
            <div class="input-group mt-3">
                <input type="text" name="phone" placeholder="Phone *" required class="form-control">
            </div>

            
            <div class="input-group mt-3">
                <select  name="staffid" placeholder="Staffid *" required class="form-control">
                <option value="">-select staff-</option>
                <?php
                foreach($shwstaff as  $shwstaff1)
                { 
                ?>
                <option value="<?php echo  $shwstaff1["staffid"];?>"><?php echo  $shwstaff1["staffname"];?></option>

                <?php 
                }
                ?>
                </select>
            </div>


            
            <div class="input-group mt-3">
                <textarea name="address" placeholder="Address *" required class="form-control"></textarea>
            </div>

            
            <div class="input-group mt-3">
                <input type="submit" name="addcard" value="Add Card" class="btn btn-md btn-primary text-white">
                <input type="reset" name="reset" value="Reset" class="btn btn-md btn-danger text-white ms-2">

            </div>
        </form>



    </div>

</div>    
</div>