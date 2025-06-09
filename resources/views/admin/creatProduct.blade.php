@extends('layout')
@section('category')
    <div class="main-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        @foreach ($categories as $category)
                            <li><a href="#">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection
@section('main')
    {{-- <link href="css/styleCreateProducts" rel="stylesheet" type="text/css"> --}}
    <h2>افزودن محصول جدید</h2>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>نام محصول:</label>
        <input type="text" name="name" required>
        <br>

        <label>توضیحات:</label>
        <textarea name="description"></textarea>
        <br>

        <label>قیمت:</label>
        <input type="number" name="price" required>
        <br>

        <label>موجودی:</label>
        <input type="number" name="stock" required>
        <br>

        <label>دسته‌بندی:</label>
        <select name="category_id">
            <option value="">انتخاب دسته‌بندی</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <br>

        <label>تصویر محصول:</label>
        <input type="file" name="image">
        <br>

        <button type="submit">ذخیره</button>
    </form>
    @stop
