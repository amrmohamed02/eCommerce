@extends('layout_front')
@section('index')
<h1 class="text-center"> {{__('Create New Item')}}</h1>
<?php 
    use App\Category;
?>
<div class="create-ad block">
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading"> <span class="glyphicon glyphicon-picture"></span>{{__('Create New Ad')}}</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-8">
                    <form class="form-horizontal" method="POST">
                        @csrf
                        <!---- start category faild ---->
                        <div class="form-group  form-group-lg ">
                            <label class="col-sm-2 control-label " >    {{__('Item')}} {{__('Name')}} </label>
                                <div class="col-sm-10 col-md-8">
                                    <input type="text"
                                            name="name" 
                                            placeholder="Your Item Name"
                                            class="form-control live-name" 
                                            value="{{Request::Old('name')}}" />
                                </div>
                        </div>
                        <!---- end category faild ---->

                        <!---- start Description faild ---->
                        <div class="form-group  form-group-lg ">
                            <label class="col-sm-2 control-label " >   {{__('Description')}}</label>
                                <div class="col-sm-10 col-md-8">
                                    <textarea type="text" 
                                            name="description" 
                                            placeholder="Item Description" 
                                            class="form-control live-desc" 
                                            value="{{Request::Old('description')}}" ></textarea>
                                </div>
                        </div>
                        <!---- end Description faild ---->

                        <!---- start Price faild ---->
                        <div class="form-group  form-group-lg ">
                            <label class="col-sm-2 control-label " >  {{__('Price')}} </label>
                                <div class="col-sm-10 col-md-8">
                                    <input type="number" 
                                            name="price" 
                                            placeholder="Item Price" 
                                            class="form-control live-prica" 
                                            value="{{Request::Old('price')}}" />
                                </div>
                        </div>
                        <!---- end Price faild ---->

                        <!---- start Country made faild ---->
                        <div class="form-group  form-group-lg ">
                            <label class="col-sm-2 control-label " >  {{__('Country')}} </label>
                                <div class="col-sm-10 col-md-8">
                                    <input type="text" 
                                            name="country" 
                                            placeholder="Country Made Name" 
                                            class="form-control" 
                                            value="{{Request::Old('country')}}" />
                                </div>
                        </div>
                        <!---- end Country made faild ---->

                        <!---- start Status faild ---->
                        <div class="form-group  form-group-lg ">
                            <label class="col-sm-2 control-label " >   {{__('Status')}}</label>
                                <div class="col-sm-10 col-md-8">
                                    <select name="status" class="form-control">
                                        <option value="{{Request::Old('status')}}">{{Request::Old('status')}}</option>
                                        <option value="New">New</option>
                                        <option value="Like New">Like New</option>
                                        <option value="Used">Used</option>
                                    </select>
                                </div>
                        </div>
                        <!---- end Status faild ---->

                        <!---- start category-selct faild ---->
                        <div class="form-group  form-group-lg ">
                            <label class="col-sm-2 control-label " > {{__('Category')}} {{__('Name')}} </label>
                                <div class="col-sm-10 col-md-6">
                                    <select name="category_id" class="form-control">
                                        <option value="{{Category::where('name','Request::Old("category_id")')->get('id')}}">{{Request::Old('category_id')}}</option>
                                        @foreach ($cats as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>
                        <!---- end category-selct faild ---->

                        <!---- start Photo faild ---->
                        <div class="form-group form-group-lg ">
                            <label class="col-sm-2 control-label " >  {{__('Add Photo')}}</label>
                                <div class="col-sm-10 col-md-8">
                                <input type="file" name="avatar" class="form-control" />
                            </div>
                        </div>
                        <!---- end Photo faild ---->

                        <!---- start Tags faild ---->
                        <div class="form-group  form-group-lg ">
                            <label class="col-sm-2 control-label " >  {{__('Tags')}} </label>
                            <div class="col-sm-10 col-md-8">
                                <input type="text" 
                                    name="Tags" 
                                    placeholder="Add your producte tags" 
                                    class="form-control" 
                                    value="{{Request::Old('country')}}" />
                            </div>
                        </div>
                        <!---- end Tags faild ---->

                        <div class="form-group form-group-lg ">
                            <div class=" col-sm-offset-2 col-sm-10">
                                <button class="btn btn-primary btn-lg" type="submit">  
                                <span class="glyphicon glyphicon-plus-sign"></span> {{__('Add')}} {{__('New')}} {{__('Item')}}</button> 
                            </div>
                        </div> 
                    </form>

                    </div>
                    <div class="col-md-4 pull-right">
                        <div class="thumbnail item-box live-preview">
                            <span class="price-box">0<span>$</span> </span>
                            <img class="img-responsive" src="/img2.jpg" alt="item"/>
                            <div class="caption">
                                <a> <h3 id="item-name"> {{__(' item Name' )}} </h3> </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum vitae voluptates 
                                consequatur explicabo impedit? Exercitationem quibusdam assumenda, pariatur mollitia asperiores
                                nihil culpa voluptatem, </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
 //alert('hello');
 $('.live-name').keyup(function(){
        $('#item-name').text($(this).val());
    });

    $('.live-desc').keyup(function(){
        $('.live-preview .caption p ').text($(this).val());
    });

    $('.live-price').keyup(function(){
        $('.live-preview .price-box ').text($(this).val());
    });
</script>

@endsection