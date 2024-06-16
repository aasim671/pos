@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-area">
                    <h2 align="center" class="mt-1">Category</h2>
                    <form method="POST" action="{{ url('brands/update/' . $brand->id) }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label>Brand Name</label>
                                <input type="text" class="form-control" name="BrandName" value="{{ $brand->brand_name }}"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option value="">Select Value</option>
                                    <option value="1" {{ $brand->status == 1 ? 'selected' : '' }}>True</option>
                                    <option value="2" {{ $brand->status == 2 ? 'selected' : '' }}>False</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary" value="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .form-area {
        padding: 20px;
        margin-top: 20px;
        background-color: #b3e5fc;
        border-radius: 5px;
    }


    .btn-sm i {
        margin-right: 5px;
    }
</style>
