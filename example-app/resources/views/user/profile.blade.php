<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hồ sơ người dùng</title>
</head>
<body>
    <h1>Hồ sơ người dùng</h1>
    <p>Tên: {{ Auth::user()->name }}</p>
    <p>Email: {{ Auth::user()->email }}</p>
    <!-- Nút chỉnh sửa thông tin -->
    <a href="{{ route('user.edit', Auth::user()->id) }}">Chỉnh sửa thông tin</a>

    <!-- Form xóa thông tin -->
    <form action="{{ route('user.destroy', Auth::user()->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Xóa thông tin</button>
    </form>
</body>
</html>
