<!doctype html>
@extends('creatorlayout.master')
@extends('creatorlayout.sidebar')


<html class="no-js" lang="en">

<head>
        <title>CMS Photography</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

@section('search')
@stop
@section('indexcontent')
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left"><b>Photography</b></h4>  
                        </div>
                    </div>
                   

                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Rajan Das Gupta<i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Message</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="#">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            @if (session('status'))
            <h6 class="alert alert-success">{{ session('status')}}</h6>
                
            @endif

            <div class="container">
                <form  method="post" enctype="multipart/form-data">

                    <input type="hidden" name="cid" id="cid" value="{{$Creatorimages->cid}}">
              
                    @csrf

                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" name="title" class="form-control" value="{{$Creatorimages->title}}"  placeholder="Enter Title">   
                    </div>

                    <div class="form-group">
                      <label >Discription</label>
                      <input type="text" name="cdescription" class="form-control" value="{{$Creatorimages->cdescription}}"   placeholder="Enter Discription">
                    </div>

                    <div class="form-group">
                        <label >Photography/Paint/Digital Art</label>
                    <div class="custom-file">
                        <label class="custom-file-label" for="inputGroupFile03">Choose File</label>
                        <input type="file" name="image" class="custom-file-input" value="{{$Creatorimages->image}}" id="inputGroupFile03">
                        
                    </div>
                    </div>
                      
                
                    <input type="submit"  class="btn btn-primary"></input>
              
                
                        <a href="/photo"> <button type="button" class="btn btn-primary">Show Content</button></a>
        
                      
                  </form>
    
              </div>


             
           
    </div>
    
	@endsection




</body>

</html>
