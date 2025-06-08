
    <h2>ویرایش کاربر</h2>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>نام:</label>
        <input type="text" name="name" value="{{ $user->name }}" required>
        <br>

        <label>ایمیل:</label>
        <input type="email" name="email" value="{{ $user->email }}" required>
        <br>

        <button type="submit">بروزرسانی</button>
    </form>

