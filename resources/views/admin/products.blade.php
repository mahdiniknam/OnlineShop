@extends('master')
@section('main')
    <!-- /.row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Responsive Hover Table</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>آیدی</th>
                                <th>نام محصول</th>
                                <th>قیمت</th>
                                <th>تعداد</th>
                                <th>توضیحات</th>
                                <th>دسته بندی</th>
                                <th>تصویر</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->category_id }}</td>
                                    <td>{{ $product->image }}</td>
                                    <td>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-default"><i class="far fa-trash-alt"></i>
                                                Delete</button>
                                        </form>
                                    </td>
                                    <td>
                                         <form action="{{ route('products.edit', $product->id) }}">
                                            @csrf
                                            @method('UPDATE')
                                            <button type="submit" class="btn btn-default"><i class="far fa-trash-alt"></i>
                                                UPDATE</button>
                                        </form>
                                    </td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
@stop
