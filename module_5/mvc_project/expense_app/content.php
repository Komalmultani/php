            <div class="col-md-9  ms-5 bg-white p-5">

                <div class="card">

                  <?php 
                   if(!isset($_SESSION["userid"]))
                   { 
                  ?>

                    <div class="card-header bgcolor p-4"><h4 class="text-white">Expense management systems app</h4></div>
                    <div class="card-body p-5 fs-3 text-center">Create Account for add Expense
                        <hr class="border border-1 border-dark w-50 mx-auto">

                        <p class="text-center p-4">
                            <button type="button" class=" btn-lg bgcolor text-white fs-5" onclick="expense_first()">Add User <span class="bi bi-person-add"></span></button>

                            <button type="button" class=" btn-lg bgcolor text-white fs-5" onclick="expense_first()">Add Expense <span class="bi bi-currency-dollar"></span></button>
                        </p>
                    </div>
                    <?php 
                   }
                   else 
                   {
                   ?>


                  <div class="card-header bgcolor p-4"><h4 class="text-white">Welcome to Expense Management systems<h4 align='right' class="text-white">Welcome :<?php echo ucfirst($_SESSION["name"]);?></h4></h4></div>
                    <div class="card-body p-5 fs-3 text-center">Add Expense Here
                        <hr class="border border-1 border-dark w-25 mx-auto">

                        <p class="text-center p-4">
                            <a href="<?php echo $mainurl;?>add-expense"><button type="button" class="btn-lg w-50 bgcolor text-white fs-5">Add Expense here <span class="bi bi-currency-dollar"></span></button>
                        </p>
                    </div>



                 <?php 
                   }
                ?>

                    
                    <div class="card-footer p-5 bg-white">
                        <h5 class="text-center">Follow us on <span class="bi bi-facebook fs-1 text-primary"></span>
                            <span class="bi bi-whatsapp fs-1 text-success ms-3"></span>
                            <span class="bi bi-twitter fs-1 text-success ms-3"></span>
                            <span class="bi bi-snapchat fs-1 text-success ms-3"></span>
                            <span class="bi bi-pinterest fs-1 text-success ms-3"></span>
                            <span class="bi bi-instagram fs-1 text-success ms-3"></span>
                        </h5>
                    </div>
                </div>
            </div>


    </div>
    </div>
    <!-- add expense modal for login first -->


</body>
</html>    