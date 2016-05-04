<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
     <form method="post" action="{{ url('dangky') }}">
        {{ csrf_field() }}
        <fieldset>
        <div class="form-group">Tên đầy đủ
            <input type="text" class="form-control" name="name" value="{{ old('name') }}"> 
        </div>
        <div class="form-group">Email
            <input type="email"  class="form-control" name="email" value="{{ old('email') }}">
        </div>
        <div class="form-group">Password
            <input type="password"  class="form-control" name="password">
        </div>
        <div class="form-group">Confirm Password
            <input type="password"  class="form-control" name="password_confirmation">
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
        </fieldset>
        </form>
</body>
</html>
   