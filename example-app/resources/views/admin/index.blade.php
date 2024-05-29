<!-- resources/views/admin/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Danh sách người dùng</h1>
    <!-- Hiển thị danh sách người dùng ở đây -->
    <!-- resources/views/admin/index.blade.php -->
    <form action="{{ route('admin.search') }}" method="GET">
        <input type="text" name="search" placeholder="Nhập tên người dùng...">
        <button type="submit">Tìm kiếm</button>
    </form>

@endsection
