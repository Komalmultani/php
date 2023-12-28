<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Fashion ecommerce provides retails | showrooms | selling products</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- bootstrap css file -->
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/gray.css">
    
<!-- bootstrap js file -->
<!--jquery call here--  -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>  
<!-- bvalidator of jquery -->
<script src="js/jquery.bvalidator.min.js"></script>
<script src="js/gray.js"></script>
<script src="js/default.min.js"></script>
<script>
    $(document).ready(function(){
        $("#frm1").bValidator();
    })
</script>
<!-- cart delete using jquery -->
<script>
    $(document).ready(function(){
        $("#del").click(function(){
            $("#content").remove();
        })
    })
</script>   


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
crossorigin="anonymous"></script>
<script src="js/cart_total.js"></script>

</head>

<body>
    <!-- fashion top header start here -->
    <section id="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <p class="ms-5 p-3">Free Shipping on All orders Over $75!</p>
                    </p>
                </div>
                <div class="col-md-5">
                    <ul class="header-navbar">
                        <li><a href="">Myaccount</a></li>
                        <li><a href="">Wishlist</a></li>
                        <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="">Currency
                                USD</a>

                            <ul class="dropdown-menu">
                                <li><a href="">$$ dollar</a></li>
                                <li><a href="">Rs. INR</a></li>

                            </ul>

                        </li>
                        <li><a href="" class="text-danger"><i class="bi bi-cart"></i> My Cart(2)</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>



<!-- fashion content start here -->

<section id="content">
<div class="card mt-5 container p-5">
<div class="card-header bg-white"><h4><span>Contact us Form</span></h2></h4></div>
<div class="card-body">

    <div class="col-md-6">
    <form method="post" id="frm1" action="mail.php">
        <div class="row">
            <div class="form-group mt-2 col-md-6">
                <input type="text" name="fname" data-bvalidator="required,alpha"  placeholder="Firstname *" class="form-control">
            </div>
    
            <div class="form-group mt-2 col-md-6">
                <input type="text" name="lname" data-bvalidator="required,alpha"  placeholder="Lastname *" class="form-control">
            </div>
        </div>
        <div class="input-group mt-2">
            <input type="text" name="email" data-bvalidator="required,email"  placeholder="Email *" class="form-control">
        </div>

        <div class="input-group mt-2 col-md-6">
            <input type="text"  name="name" data-bvalidator="required,alpha" placeholder="Name *"  class="form-control">
        </div>

        <div class="input-group mt-2 col-md-6">
            <input type="text"  name="phone" placeholder="Phone *" data-bvalidator="required,minlen[10],maxlen[10],digit"  class="form-control">
        </div>

        
        <div class="input-group mt-2 col-md-6">
            <textarea  name="message" placeholder="Message *" data-bvalidator="required"  class="form-control"></textarea>
        </div>

        <div class="input-group mt-2 col-md-6">
            <input type="submit" name="send" value="Send">
        </div>
    </form>

</div>


</div>
</div>
</section>
                