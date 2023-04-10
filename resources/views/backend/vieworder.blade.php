@extends('backend/layout/master')
@section('header_name')
    Quản lý đơn hàng
@endsection

@section('content')

     <!-- Table list-->
     <div class="container-fluid">
        <table class="table align-middle table-bordered table-hover">
            <caption>Danh sách đơn hàng</caption>
            <thead class="table-secondary">
                <tr>
                    <td><strong>ID</strong></th>
                    <th><strong>ID người đặt hàng</strong></th>
                    <th><strong>Họ và tên</strong></th>
                    <th><strong>Email</strong></th>
                    <th><strong>Số điện thoại</strong></th>
                    <th><strong>Địa chỉ nhận hàng</strong></th>
                    <th><strong>Nội dung đặt hàng</strong></th>
                    <th><strong>Thời gian đặt hàng</strong></th>
                    <th><strong>Trạng thái đơn hàng</strong></th>
                    <th><strong>Hành động</strong></th>

                </tr>
            </thead>
            <tbody>
                <!-- Dữ liệu trong bảng -->
                @foreach ($order as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->user_id }}</td>
                        <td>{{ $item->fullname }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone_number }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->desc }}</td>
                        <td>{{ $item->order_date }}</td>
                        <td>{{ $item->status }}</td>
                        <td>

                            <button id="" class="btn btnEdit" data-id="{{ $item->id }}"><i
                                    class="fa-solid fa-eye fa-lg" style="color: #000000;"></i></button>
                            <button type="button" class="btn btnDelete" data-id="{{ $item->id }}"><i
                                    class="fa-solid fa-xmark fa-lg" style="color: #000000;"></i></button>
                            <button type="button" class="btn btnAdd"><i class="fa-solid fa-plus fa-lg"
                                    style="color: #000000;"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Table list-->

@endsection
