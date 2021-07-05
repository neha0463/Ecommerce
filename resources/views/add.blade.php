<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                <form action="{{route('add')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                  
                        <div class="form-group">
                            <label for="">Product_Name</label>
                            <input type="text" name="Product_Name" class="form-control">
                            </div>
                 <div class="form-group">
                     <label for="">rs</label>
                     <input type="text" name="rs" class="form-control">
                     </div>
                 <div class="form-group">
                     <label for="">product_details</label>
                     <input type="text" name="product_details" class="form-control">
                     </div>
                 <div class="form-group">
                     <label for="">quentity</label>
                     <input type="text" name="quentity" class="form-control">
                     </div>
                 <div class="form-group">
                     <label for="">Rating:</label>
                     <input type="text" name="Rating" class="form-control">
                     </div>
                 <div class="form-control">
                     <label for="">image</label>
                     <input type="file" name="image"  class="form-control">
                     </div>
                 <div class="form-control">
                     <label for="">logo</label>
                     <input type="file" name="logo"  class="form-control">
                     </div>
                 <div class="form-group">
                     <input type="submit" name="send"  class="btn btn-danger w-100">
                     </div>
                    
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>