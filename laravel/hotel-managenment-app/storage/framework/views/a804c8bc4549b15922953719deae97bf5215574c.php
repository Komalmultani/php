<?php $__env->startSection('content'); ?>
<div class="container">
   <div class="row">
      <div class="col-md-12 position-relative">
         <div class="row">


            <div class="col-md-4 bg-sucess sidebar">
               <ul>
                   
                  <li><a href=""><h4>Manage employee & Rooms</h4></a></li> 
                   <li><a href="add-employee">Add Employee</a></li>
                   <li><a href="manage-employee">Manage Employee</a></li>
                   <li><a href="add-room">Add Room</a></li>
                   <li><a href="manage-room">Manage Rooms</a></li>
                   <li><a href="delete-room">Delete Rooms</a></li>
                   <li><a href="edit-room">Edit Rooms</a></li>
               </ul>
            </div>
            <div class="col-md-8">
               <div class="row">   
               <div class="col-md-4">
                  <a href="/add-employee"><img src="images/employee.png" class="w-50"></a>
         </div>  
         <div class="col-md-4">
            <a href="/manage-employee"><img src="images/employeelist.png" class="w-50"></a>
         </div>  

         <div class="col-md-4">
            <a href="/add-room"><img src="images/addroom.png" class="w-50"></a>
         </div>  

         
         <div class="col-md-4">
            <a href="/manage-room"><img src="images/roomlist.png" class="w-50"></a>
         </div>  
         
         <div class="col-md-4">
            <a href="/edit-room"><img src="images/editroom.png" class="w-50"></a>
         </div>  
            
         
         <div class="col-md-4">
            <a href="/delete-room"><img src="images/deleteroom.png" class="w-50"></a>
         </div>  
         </div>

      </div>
      </div>
   </div>
   </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hotel-managenment-app\resources\views/dashboard.blade.php ENDPATH**/ ?>