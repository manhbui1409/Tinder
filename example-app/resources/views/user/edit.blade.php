<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa thông tin người dùng</title>
</head>
<body>
    <h1>Chỉnh sửa thông tin người dùng</h1>
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Tên:</label>
        <input type="text" id="name" name="name" value="{{ $user->name }}"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}"><br><br>

        <button type="submit">Lưu</button>
    </form>
</body>
</html>
