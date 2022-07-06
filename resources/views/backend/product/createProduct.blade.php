@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row pt-3">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header cardB ">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="heading_h4">Add Product</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{route('index.product')}}" class="btn btn-primary btn-sm">Show</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body form_bg">
                        <form action="{{route('store.product')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Product Name</label> <span class="span_star_message"> *</span>
                                <input type="text" class="form-control" name="name">
                                @error('name')
                                    <span class="span_star_message">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">Category Name</label><span class="span_star_message"> *</span>
                                    <select name="cat_id" id="" class="form-control">
                                        @foreach ($category as $row)
                                            <option value="{{$row->id}}">{{$row->cat_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('cat_id')
                                        <span class="span_star_message">{{$message}}</span>
                                    @enderror
                                    <small class="float-right">Product Category not listed here? <a href="#"data-toggle="modal" data-target="#addProductTypeModal">Add new</a> </small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Product Code</label><span class="span_star_message"> *</span>
                                    <input type="number" name="code" class="form-control">
                                    @error('code')
                                        <span class="span_star_message">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">Buy Date</label>
                                    <input type="date" class="form-control" name="buyDate">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Expire Date</label>
                                    <input type="date" class="form-control" name="expireDate">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">Buying Price</label><span class="span_star_message"> *</span>
                                    <input type="number" class="form-control" name="buyPrice">
                                    @error('buyPrice')
                                        <span class="span_star_message">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Selling Price</label><span class="span_star_message"> *</span>
                                    <input type="number" class="form-control" name="selPrice">
                                    @error('selPrice')
                                        <span class="span_star_message">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Upload Photo</label>
                                <input type="file" class="form-control" name="photo">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" id="" cols="30" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="text-right pt-2">
                                <input type="submit" value="Add" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Category modal-->
<div class="modal fade" id="addProductTypeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-light cardB">
            <h4>Add New Category</h4>
            <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{route('store.category')}}" method="POST"  class="needs-validation" novalidate>
                @csrf
                <div class="form-group">
                    <label for="">Category Name</label>
                    <input type="text" class="form-control" name="cat_name" required>
                    <div class="invalid-feedback">
                        Please provide Category Name.
                    </div>
                </div>
                <div class="form-gorup">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="30" rows="3" class="form-control"></textarea>
                </div>
                <div class="text-right pt-2">
                    <input type="submit" value="Add" class="btn btn-success">
                </div>
            </form>
        </div>
        </div>
    </div>
    </div>
@endsection