
    <h2>ویرایش محصول</h2>
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>نام محصول:</label>
        <input type="text" name="name" value="{{ $product->name }}" required>
        <br>

        <label>توضیحات:</label>
        <textarea name="description">{{ $product->description }}</textarea>
        <br>

        <label>قیمت:</label>
        <input type="number" name="price" value="{{ $product->price }}" required>
        <br>

        <label>موجودی:</label>
        <input type="number" name="stock" value="{{ $product->stock }}" required>
        <br>

        <label>تصویر محصول:</label>
        <input type="file" name="image">
        <br>

        @if ($product->image)
            <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}" width="100">
        @endif

        <button type="submit">بروزرسانی</button>
    </form>
