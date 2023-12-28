            <div class="col-md-9  ms-5 bg-white p-5">

                <div class="card">
                    <div class="card-header bgcolor p-4"><h4 class="text-white">Apply for Reimbursement</h4></div>
                    <div class="card-body p-5 fs-5 text-center">

                        <div class="subtotal shadow-lg p-4">
                        
                            <h4 class="text-center text-primary"><span class="bi bi-currency-rupee"></span></h4>
                            <p class="text-center text-secondary">Total ammount for</p>
                            <p class="text-center fs-3 text-primary">For your Reimbursement</p>
                        
                        </div>    
                        <hr class="border border-1 border-dark w-25 mx-auto">
                            
                          <div class="row">
                           
                            <div class="col-md-10 mx-auto">
                            <form method="post">
                            <div class="form-group mt-2">
                                    <label class="text-primary">Expense Details</label>  
                                    <input type="text" name="exp_details" placeholder="Expense Details *" required class="form-control">
                                </div>
                              
                                <div class="form-group mt-2">
                                    <label class="text-primary">Expense For</label>  
                                    <select name="exp_for" placeholder="Expense For *" required class="form-control">
                                    <option value="">-select expense for-</option>
                                    <option value="auto">Auto</option>
                                    <option value="bus">Bus</option>
                                    <option value="seminar">seminar</option>
                                    <option value="workshop">workshop</option>
                                
                                </select>
                                </div>
                                
                                <div class="form-group mt-2 p-3 booder border-1">
                                    <label class="text-primary">Upload Expense Bill</label>  
                                    <input type="file" name="bill" placeholder="Upload Bill *" required class="form-control">
                                </div>

                                <div class="form-group mt-2">
                                    <label class="text-primary">Ammount</label>  
                                    <input type="text" name="ammount" placeholder="Expense For *" required class="form-control">
                                </div>

                                
                                <div class="form-group mt-2">
                                    <label class="text-primary">Expense Date</label>  
                                    <input type="date" name="date" placeholder="Expense Date *" required class="form-control">
                                </div>
                              
                            <div class="form-group mt-2">
                            <button type="submit" class=" btn-lg bgcolor text-white fs-5" >Add Expense<span class="bi bi-person-add"></span></button>
                            <button type="reset" class="btn-lg bg-danger text-white fs-5" >Reset <span class="bi bi-person-add"></span></button>
                
                              </div>

                                 
                            </form>
                            </div>
                            </div>
                       
                    </div>
                    
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