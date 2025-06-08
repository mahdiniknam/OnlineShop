<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>ورود</title>
</head>
<body>
    <h2>فرم ورود</h2>
    <form method="POST" action="/login">
        @csrf
        <label>ایمیل: <input type="email" name="email"></label><br>
        <label>رمز عبور: <input type="password" name="password"></label><br>
        <button type="submit">ورود</button>
    </form>

    @if($errors->any())
        <p style="color:red">{{ $errors->first() }}</p>
    @endif
</body>
</html>
