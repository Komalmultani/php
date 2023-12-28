<?php
$mainurl="http://localhost/book_store/";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>book store</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
   
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

   <div class="container text-center">
   <h1 class="p-2 bg-dark text-light"><i class="bi bi-book"></i>book store</h1>
    <div class="d-flax">
        <form  method="post">
            <div class="row">
              
                <div class="input-group mb-3 ">
                    <span class="input-group-text bg-warning"><i class="bi bi-person-badge"></i></span>
                    <input type="text" name="bookid" class="form-control" placeholder="bookid"  id="bookid">
                  </div>

                  <div class="input-group mb-3 ">
                    <span class="input-group-text bg-warning" ><i class="bi bi-book"></i></span>
                    <input type="text" class="form-control" id="bookname" name="bookname" placeholder="bookname"  >
                  </div>
                  <div class="input-group mb-3 ">
                    <span class="input-group-text bg-warning" ><i class="bi bi-people"></i></span>
                    <input type="text" class="form-control"name="bookpublicer" id="bookpublicer" placeholder="bookpublicer" >
                    
                    <span class="input-group-text bg-warning p-2s" ><i class="bi bi-currency-rupee"></i></span>
                    <input type="text" class="form-control" name="price" id="price" placeholder="price" >
                </div>
                <div >
                <button type="submit" name="create" class="btn btn-success"><i class="bi bi-file-plus-fill w-100"></i>create</button>
                
                <button type="submit" name="view" class="btn btn-primary"><i class="bi bi-view-list"></i>view</button>

                <button type="submit" name="update"class="btn btn-secondary">update<i class="bi bi-pencil"></i></button>

                <button type="submit" name="delete"class="btn btn-danger">delete<i class="bi bi-trash"></i></button>

                
            
                
            
              </div>

   </div>
   






    <div class="p-5 m-5">
        <table class="table bg-dark text-white">
            <thead>
                <tr>
                    <th scope="col">bookid</th>
                    <th scope="col">bookname</th>
                    <th scope="col">bookpublicer</th>
                    <th scope="col">price</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $data1): ?>
                    <tr>
                        <td><?php echo $data1['bookid']; ?></td>
                        <td><?php echo $data1['bookname']; ?></td>
                        <td><?php echo $data1['bookpublicer']; ?></td>
                        <td><?php echo $data1['price']; ?></td>
                        <td><a href="<?php echo $mainurl;?>editbook?editid=<?php echo $data1["bookid"];?>"><i class="bi bi-pencil"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- ... Your remaining HTML code ... -->
</body>
</html>

</body>
</html>