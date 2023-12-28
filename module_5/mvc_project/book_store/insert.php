<div class="col-lg-6">
        <form  method="post" role="form" class="">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="bookid" class="form-control" id="name" placeholder="bookid" required="">
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="bookname" class="form-control" name="bookname" id="bookname" placeholder="" required="">
            </div>
          </div>
          <div class="col-md-12 form-group mt-3 mt-md-2">
              <input type="text" class="form-control" name="bookpublicer" id="" placeholder="bookbublicer" required="">
            </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="price" id="price" placeholder="price" required="">
          </div>
          
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your order is comfirm. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit" name="create">create</button></div>
        </form>
      </div>