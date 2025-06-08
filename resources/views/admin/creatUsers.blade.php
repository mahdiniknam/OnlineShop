
    <h2>افزودن کاربر جدید</h2>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label>نام:</label>
        <input type="text" name="name" required>
        <br>

        <label>ایمیل:</label>
        <input type="email" name="email" required>
        <br>

        <label>رمز عبور:</label>
        <input type="password" name="password" required>
        <br>

        <button type="submit">ذخیره</button>
    </form>
