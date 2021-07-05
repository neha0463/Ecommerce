<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<link href="{{asset('css/style.css')}}" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>
<body>

  
    <nav class="navbar navbar-expand-lg">
      <h3 class="text-dark">Ecom</h3>
    </nav>

    <div class="container-fluid" style="width:100%; height:400px;">
        <div class="row" style="margin-left: 7%;">
            <div class="col-lg-4 mt-5" style="margin-left: 9%;">
                <div class="card mt-5">
                <img src="{{asset('images/' .$data->image)}}" alt="" width="70%" height="300px">
                </div>
            </div>
            <div class="col-lg-6 "  style="margin-left:2%; margin-top:7%;">
                <h1 class=""> {{$data->Product_Name}}</h1>
                <h5 class="mt-3"> {{$data->rs}}</h5>
                <div class="col-sm-1 ms-2 mt-4 " style="border-style: outset; width:5%; height:30px;">
                 <h6 class=" ms-2 "> {{$data->quentity}}</h6> 
              </div>
              
              <a href="{{route('addcart',[$data->id])}}" class="btn btn-danger mt-2 ms-5 " style="border-radius:30px; box-shadow:0ex;">Add to Card</a>
                <h5 class=" mt-2 ms-2" style="font-size: 30px;">product_details</h5>  
                <p style="font-size:17px; color:rgb(14, 12, 12);"> {{$data->product_details}}</p>
            </div>
         </div>

         <div class="row mt-5">
            <div class="col-lg-12 mt-5">
                <img src="{{asset('images/footer.jpg')}}" width="100%" height="100px">
            </div>
         </div>
       </div>
    
</body>
</html>