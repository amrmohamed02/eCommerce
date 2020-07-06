@extends('layout_front')
@section('index')
<h1 class="text-center"> {{__('Item Name')}}</h1>
<div class="container">
    <div class="row">
        <div class="col-md-5 item-img">
        <img class="img-responsive img-thumbnail" src="/img2.jpg" alt="item"/>
        </div>
        <div class="col-md-7 item-info">
            <h2> {{__('Category Name')}} <span class="glyphicon glyphicon-chevron-right"></span> {{__('Item Name')}}</h2>
            <!---description in this p -->
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Aspernatur veritatis reiciendis ex vel excepturi error culpa doloribus,
                exercitationem maxime consectetur,
                ut eveniet nisi, quaerat delectus. Optio ratione odit quasi consequuntur.
                exercitationem maxime consectetur,
                ut eveniet nisi, quaerat delectus. Optio ratione odit quasi consequuntur.
            </p>
            <div class="add-date"> <span class="glyphicon glyphicon-calendar icon"></span> 2/2/2020</div>
            <div class="price"> <span class="glyphicon glyphicon-usd icon"></span> Price : 20$</div>
            <div class="con-made"> <span class="glyphicon glyphicon-cog icon"></span> Made in : USA</div>
            <div class="cat-name"> <span class="glyphicon glyphicon-tags icon"></span> Category : <a href="#"> Category name </a> </div>
            <!-- a===>public user profile  --->
            <div class="seller-name"> <span class="glyphicon glyphicon-user icon"></span> Add By : <a href="#"> Ali Ahmed </a> </div>
        </div>
    </div>
    <hr class="hr"/>
    <div class="row comment">
        <div class=" col-md-offset-2">
            <form>
                <div class="com-box col-md-8">
                    <h3>Add Your Comment :</h3>  
                    <textarea class="form-control"></textarea>
                </div>

                <div class="col-md-4 pull-right rate-box">
                    <h3>Your Rate</h3>
                        <ul class="list-unstyled">
                            <li> 
                                <button> <span class="glyphicon glyphicon-star icon-rate"></span></button>
                            </li> 

                            <li> 
                                    <button>
                                        <span class="glyphicon glyphicon-star icon-rate"></span>
                                        <span class="glyphicon glyphicon-star icon-rate"></span>
                                    </button>
                            </li>

                            <li> 
                                <button>
                                    <span class="glyphicon glyphicon-star icon-rate"></span>
                                    <span class="glyphicon glyphicon-star icon-rate"></span>
                                    <span class="glyphicon glyphicon-star icon-rate"></span>
                                </button>
                            </li>
                            <li> 
                                    <button>
                                        <span class="glyphicon glyphicon-star icon-rate"></span>
                                        <span class="glyphicon glyphicon-star icon-rate"></span>
                                        <span class="glyphicon glyphicon-star icon-rate"></span>
                                        <span class="glyphicon glyphicon-star icon-rate"></span>
                                    </button>
                            </li>
                            <li> 
                                    <button>
                                        <span class="glyphicon glyphicon-star icon-rate"></span>
                                        <span class="glyphicon glyphicon-star icon-rate"></span>
                                        <span class="glyphicon glyphicon-star icon-rate"></span>
                                        <span class="glyphicon glyphicon-star icon-rate"></span>
                                        <span class="glyphicon glyphicon-star icon-rate"></span>
                                    </button>
                            </li>
                        </ul>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Add Comment">  
                </div>
            </form>
        </div>   
    </div>
    
</div>    
<!--comment section--->
<div class="container">
    <hr class="hr"/>
    <div class="comment-box">
        <div class="row show-com-box">
            <div class="col-sm-2 text-center com-user-name">
                <img class="img-responsive img-thumbnail img-circle center-block" src="/img2.jpg" alt="item">
                ali ali
            </div>
            <!--comment content-->
            <div class="col-sm-7 com-content">
                <p class="lead" >
                    Lorem ipsum dolor sit amet consectetur adipisicing elit
                </p>
            </div>
            <div class="col-sm-3">
                <span class="date"> <span class="glyphicon glyphicon-calendar icon"></span>2/3/10001</span> <br>
                <span class="rate">Rate : 4 </span> <span class="glyphicon glyphicon-star icon-rate"></span>
            </div>
        </div>
        <hr class="hr"/>
    </div>
    <!--end comment section--->

    <div class="comment-box">
        <div class="row show-com-box">
            <div class="col-sm-2 text-center com-user-name">
                <img class="img-responsive img-thumbnail img-circle center-block" src="/img2.jpg" alt="item">
                ali ali
            </div>
            <!--comment content-->
            <div class="col-sm-7 com-content">
                <p class="lead" >
                    Lorem ipsum dolor sit amet consectetur adipisicing elit
                    sed tenetur voluptatum distinctio. Nulla,
                    corrupti deleniti quisquam minima iure architecto laudantium enim voluptatibus delectus dolorum doloribus tempora.
                </p>
            </div>
            <div class="col-sm-3">
                <span class="date"> <span class="glyphicon glyphicon-calendar icon"></span>2/3/10001</span> <br>
                <span class="rate">Rate : 4 </span> <span class="glyphicon glyphicon-star icon-rate"></span>
            </div>
        </div>
        <hr class="hr"/>
    </div>
    <!--end comment section--->

    <div class="comment-box">
        <div class="row show-com-box">
            <div class="col-sm-2 text-center com-user-name">
                <img class="img-responsive img-thumbnail img-circle center-block" src="/img2.jpg" alt="item">
                ali ali
            </div>
            <!--comment content-->
            <div class="col-sm-7 com-content">
                <p class="lead com-p" >
                    Lorem ipsum dolor sit amet consectetur adipisicing elit
                    . Est quaerat modi suscipit,
                    
                </p>
            </div>
            <div class="col-sm-3">
                <span class="date"> <span class="glyphicon glyphicon-calendar icon"></span>2/3/10001</span> <br>
                <span class="rate">Rate : 4 </span> <span class="glyphicon glyphicon-star icon-rate"></span>
            </div>
        </div>
        <hr class="hr"/>
    </div>
    <!--end comment section--->
</div>

@endsection