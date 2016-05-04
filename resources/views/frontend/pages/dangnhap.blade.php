<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
     <form method="post" action="{{ url('dangnhap') }}">
        {{ csrf_field() }}
        <fieldset>
        <div class="form-group">Email
            <input type="email"  class="form-control" name="email" value="{{ old('email') }}">
        </div>
        <div class="form-group">Password
            <input type="password"  class="form-control" name="password">
        </div>
        <div>
            <button type="submit">Đăng nhập</button>
        </div>
        </fieldset>
        </form>
</body>
</html>
