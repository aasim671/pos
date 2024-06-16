@extends('layout')

@section('content')
    <div class="container">



        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="form-area">
                    <h2 align="center" class="mt-1">Category</h2>
                    <form method="POST" action="{{ url('category/store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label>Category Name</label>
                                <input type="text" class="form-control" name="CategoryName" required>
                            </div>
                            <div class="col-md-6">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option value="selected">Select Value</option>
                                    <option value="1">True</option>
                                    <option value="2">False</option>
                                </select>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-primary" value="submit">
                                </div>
                            </div>
                    </form>
                </div>

                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td scope="col">{{ $category->id }}</td>
                                <td scope="col">{{ $category->cat_name }}</td>
                                <td scope="col">
                                    @if ($category->status == 1)
                                        True
                                    @else
                                        False
                                    @endif
                                </td>

                                <td scope="col">
                                    <a href="{{ url('category/edit', $category->id) }}" class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                    </a>
                                    <form action="{{ url('category/delete/'. $category->id) }}" method="POST"
                                        style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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

    .table th,
    .table td {
        text-align: center;
        vertical-align: middle;
    }

    .btn-sm i {
        margin-right: 5px;
    }
</style>
