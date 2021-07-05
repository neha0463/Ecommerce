<html>
    <head>
        <title>Laravel Welcome</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<link href="{{asset('css/style.css')}}" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    </head>
    <body>
        <nav class="navbar navbar-expand bg-dark ">
           <a href="" class="navbar-brand"><img src="{{asset('images/logo.png')}}" alt=""  width="60%" class="ms-2" height="30"></a>
           <form>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="" class="nav-link ms-5 text-white">Home</a></li>
                <li class="nav-item"><a href="" class="nav-link ms-5 text-white">product</a></li>
                <li class="nav-item"><a href="" class="nav-link ms-5 text-white">About</a></li>
                <li class="nav-item"><a href="{{route('add')}}" class="nav-link ms-5 text-white">Add</a></li>
            </ul>
           </form>
         </nav>
        <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12 ">
                  <div class="row">
                <div class="col-lg-4 ">
                    <img src="{{asset('images/shoping.jpg')}}"  alt="" width="100%" height="290px">
                </div>
                <div class="col-lg-4 ">
                   <h2>Give Your Product<br>A New Style!</h2>
                   <p class="">This is online shoping many item avilable in ecom website</p>
                   <button type="button" class="btn btn-danger btn-hover">get Start</button>
                </div>
                  <div class="col-lg-4">
                      <img src="{{asset('images/ladi.jpg')}}" alt="" width="100%" height="290px">
                  </div>
                  </div>
                </div> 
                 <div class="col-lg-12">
                   <div class="row">
                       <h5>Feached Product</h5>
                   @foreach($data as $p)
                   <div class="col-lg-3">
                    <a href="{{route('detail',['id'=>$p->id])}}"><img src="{{asset('images/' .$p->image)}}" width="90px" height="200px" class="card-img-top"></a>
                         <h6 class="lead">{{$p->Product_Name}}</h6>
                          <h5 class="lead">rs:{{$p->rs}}</h5>
                         <div class="rating">
                          <i class="fas fa-star-of-david"></i>
                          <i class="fas fa-star-of-david"></i>
                          <i class="fas fa-star-of-david"></i>
                          <i class="fas fa-star-of-david"></i>
                          <i class="fas fa-star-of-david"></i>
                        </div>
                    </div>
                   @endforeach  
                 </div>
             </div> 

                   <div class="coll-lg-12">
                    <div class="row">
                    <div class="coll-lg-4">
                      <img src="{{asset('images/watch.jpg')}}"  width="50%">
                    </div>
                    <div class="col-lg-5">
                      <h6>watch is water profe </h6>
                      <h2 class="text-bolder">Smart Brand 4</h2>
                      <p>The Mi smart Brand 4 Feacture o 39 .9% Karger(Than mi Brand2)Album color<br>Full touch display width ordibentedat every ring in color on con be</p>
                      <button type="button" class="btn btn-danger">The Smart</button>
                    </div>
                    
                    </div>
                  </div>
        </div>
        </div>
    
    </body>
</html>