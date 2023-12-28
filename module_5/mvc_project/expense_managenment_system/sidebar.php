<div class="col-md-2 p-0 bgcolor sidebar">
                <ul>
                    <li>
                    
                    <a href="<?php echo $mainurl;?>"><span class="bi bi-house fs-1 text-white"></span></a></li>
                    <li><a href="<?php echo $mainurl;?>manage-profile" title="Manage Profile here"><span class="bi bi-person-add fs-1 text-white"></span></a></li>
                    
                    <li><a href="<?php echo $mainurl;?>manage-expense" title="Add Expense Here"><span class="bi bi-grid-3x3 fs-1 text-white"></span></a></li>
                    <li><a href="<?php echo $mainurl;?>" title="Share expense Here"><span class="bi bi-share fs-1 text-white"></span></a></li>
                    <li><a href="<?php echo $mainurl;?>add-expense" title="Manage Expense here"><span class="bi bi-currency-rupee fs-1 text-white"></span></a></li>
                   <?php
                   if(isset($_SESSION["userid"]))
                   { 
                   ?>
                    <li><a href="<?php echo $mainurl;?>?lg" title="Logout Here" onclick="return confirm('Are you sure to Logout ?')"><span class="bi bi-power fs-1 text-danger"></span></a></li>
                  
                
                    <?php 
                   }
                   ?>
                </ul>
            </div>
