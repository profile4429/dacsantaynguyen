@extends('backend/layout/master')
@section('header_name')
    Quản lý người dùng
@endsection

@section('content')
    <div class="main-content">


        <h1 class="mb-4">Bảng thông tin người dùng</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Quyền quản trị</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($User_Admin as $item)
                    <tr>
                        <th>{{ $item->id }}</th>
                        <td>{{ $item->username }}</td>
                        <td>
                        @if (session('ss_role')->first() == 2)
                            {{ $item->password }}
                        @endif
                    </td>
                        <td>{{ $item->role_id == 1 ? 'User' : 'Admin' }}</td>
                        <td>
                            @if (session('ss_role')->first() == 2)
                                <button class="btn btn-success">Xóa</button>
                                <button class="btn btn-warning">Sửa</button>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
