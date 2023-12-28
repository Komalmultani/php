
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 position-relative">
            <div class="row">
                <div class="col-md-4 bg-sucess sidebar">
                    <ul>
                        <li><a href="">
                                <h4>Manage employee & Rooms</h4>
                            </a></li>
                            <li><a href="/add-employee">Add Employee</a></li>
                        <li><a href="/manageemployee">Manage Employee</a></li>
                        <li><a href="/add-room">Add Room</a></li>
                        <li><a href="/manage-room">Manage Rooms</a></li>
                        <li><a href="">Manage Rooms</a></li>
                        <li><a href="">Delete Rooms</a></li>
                        <li><a href="">Edit Rooms</a></li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <div class="card-header active text-white" style="background-color:rgba(20,0,0,0.5)!important">
                        <h2>manage employee here</h2>
                    </div>
                    <div class="card-body>">
                        
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">username</th>
      <th scope="col">name</th>
      <th scope="col">mobile</th>
      
      <th scope="col">gender</th>
      <th scope="col">address</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>

  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($row->id); ?></th>
      <td><?php echo e($row->username); ?></td>
      <td><?php echo e($row->name); ?></td>
      <td><?php echo e($row->mobile); ?></td>
      <td><?php echo e($row->gender); ?></td>
      <td><?php echo e($row->address); ?></td>
      <td><a href='<?php echo e(URL("/manage-employee/".$row->id)); ?>'><span class ='bi bi-trash text-white'></span></a></td>

      <td>@mdo</td>
    </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>




                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hotel-managenment-app\resources\views//manageemployee.blade.php ENDPATH**/ ?>