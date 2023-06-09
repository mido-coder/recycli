@extends('layouts.admin')
@section('content')
<div class="row"> 
    <div class="col-md-12"> 
        <div class="card"> 
            <div class="card-header"> 
                <h4> add categorie</h4>
            
                <a href="{{url('admin/categories/add')}}" class="btn btn-primary btn-sm texte white float-end" > back</a>
            
                </div>
                <div class="card-body">
                    <form action="{{url('admin/categories/add')}}"  enctype="multipart/form-data" method="POST">
                        @csrf
                     
                        <div class="mb-3">
                            <label> name</label>
                            <input type="text" name="name" class="form-control">


                        </div>
                        <div class="mb-3">
                            <label> status</label>
                            <input type="checkbox" name="status" >
                        </div>
                        <div class="mb-3">
                            <label> Description</label>
                            <input type="description" name="description" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label> image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label> slug</label>
                            <input type="text" name="slug" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label> meta_tittle</label>
                            <input type="text" name="meta_tittle" class="form-control">
                        </div>
                    
                        <div class="mb-3">
                            <label> meta description</label>
                            <input type="text" name="meta_description" class="form-control">
                        </div>
                        <div class="col-md-12  mb-3">
                            <button type="submit" > add</button>
                        </div>   


                    </form>
        </div>


        </div>
    </div>
    

</div>
@endsection