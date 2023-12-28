            <div class="col-md-9  ms-5 bg-white p-5">

                <div class="card">
                    <div class="card-header bgcolor p-4"><h4 class="text-white">Register Form</h4></div>
                    <div class="card-body p-5 fs-3 text-center">Register here
                        <hr class="border border-1 border-dark w-25 mx-auto">
                            
                          <div class="row">
                            <div class="col-md-4">
                                <img src="https://cdn.dribbble.com/users/1767962/screenshots/5986027/signin.gif" class="img-fluid">
                            </div>
                            
                            <div class="col-md-8">
                            <form method="post" enctype="multipart/form-data">
                            <div class="input-group mt-2">
                                    <input type="file" name="img" placeholder="Photo *" required class="form-control">
                                </div>

                                
                                <div class="input-group mt-2">
                                    <input type="text" name="email" placeholder="Email *" required class="form-control">
                                </div>
                              
                                <div class="input-group mt-2">
                                    <input type="text" name="password" placeholder="password *" required class="form-control">
                                </div>

                                
                                <div class="input-group mt-2">
                                    <input type="text" name="name" placeholder="Name *" required class="form-control">
                                </div>



                                <div class="input-group mt-2">
                                    <input type="text" name="phone" placeholder="phone *" required class="form-control">
                                </div>

                                
                                <div class="input-group mt-2">
                                    <textarea name="address" placeholder="Address *" required class="form-control"></textarea>.
                                </div>


                                
                            <div class="input-group mt-2">
                            <button type="submit" name="adduser" class=" btn-lg bgcolor text-white fs-5" >SignUp <span class="bi bi-person-add"></span></button>
                            <button type="reset" class="btn-lg bg-danger text-white fs-5" >Reset <span class="bi bi-person-add"></span></button>
                
                              </div>

                                 
                            <div class="input-group mt-2">
                                <b class="ms-2">Already have an account ?<a href="<?php echo $mainurl;?>login">Login Here</a></b>
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