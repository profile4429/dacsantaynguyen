@extends('backend/layout/master')
@section('header_name')
    Quản lý đơn hàng
@endsection

@section('content')
    <!-- Table list-->
    <div class="card">
        <div id="tableExample4" data-list='{"valueNames":["name","email","payment"],"filter":{"key":"payment"}}'>
            <div class="row justify-content-end g-0">
                <div class="col-auto px-3"><select class="form-select form-select-sm mb-3" aria-label="Bulk actions"
                        data-list-filter="data-list-filter">
                        <option selected="" value="">Select payment status</option>
                        <option value="Pending">Pending</option>
                        <option value="Success">Success</option>
                        <option value="Blocked">Blocked</option>
                    </select></div>
            </div>
            <div class="table-responsive scrollbar">
                <table class="table table-sm table-striped fs--1 mb-0 overflow-hidden">
                    <thead class="bg-200 text-900">
                        <tr>
                            <td><strong>ID</strong></th>
                            <th><strong>User ID</strong></th>
                            <th><strong>Họ và tên</strong></th>
                            <th><strong>Email</strong></th>
                            <th><strong>Số điện thoại</strong></th>
                            <th><strong>Địa chỉ nhận hàng</strong></th>
                            <th><strong>Nội dung đặt hàng</strong></th>
                            <th><strong>Thời gian đặt hàng</strong></th>
                            <th><strong>Trạng thái</strong></th>
                            <th><strong>Hành động</strong></th>
                        </tr>
                    </thead>
                    <tbody class="list" id="table-purchase-body">
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
                                <td class="align-middle text-end fs-0 white-space-nowrap payment">
                                    <div class="d-flex flex-column">
                                        @if ($item->status == 1)
                                            <a href="{{ route('ChangeStatus') }}?id={{ $item->id }}&type=accept"><span
                                                    class="badge badge rounded-pill badge-subtle-primary">
                                                    Chấp thuận<span class="ms-1 fas fa-redo" data-fa-transform="shrink-2">
                                                    </span></span></a>
                                            <a href="{{ route('ChangeStatus') }}?id={{ $item->id }}&type=cancel"><span
                                                    class="badge badge rounded-pill bg-danger">Hủy bỏ<span
                                                        class="ms-1 fas fa-ban"
                                                        data-fa-transform="shrink-2"></span></span></a>
                                        @elseif($item->status == 2)
                                            <a href="{{ route('ChangeStatus') }}?id={{ $item->id }}&type=success">
                                                <span class="badge badge rounded-pill badge-subtle-warning">Đang giao hàng
                                                    <span class="ms-1 fas fa-stream" data-fa-transform="shrink-2">
                                                    </span>
                                                </span></a>
                                        @elseif($item->status == 0)
                                            <span class="badge rounded-pill bg-danger">Đã hủy
                                                <span class="ms-1 fas fa-ban" data-fa-transform="shrink-2">
                                                </span>
                                            </span>
                                        @elseif($item->status == 3)
                                            <span class="badge badge rounded-pill badge-subtle-success">Giao hàng thành công
                                                <span class="ms-1 fas fa-check" data-fa-transform="shrink-2">
                                                </span>
                                            </span>
                                        @endif
                                    </div>
                                </td>

                                <td>

                                    <button class="btn btn-link p-0 btnEdit" data-id="{{ $item->id }}"><span
                                            class="text-500 fas fa-eye"></span>
                                    </button>
                                    <button class="btn btn-link p-0 ms-2 btnDelete" data-id="{{ $item->id }}"><span
                                            class="text-500 fas fa-trash-alt"></span>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- <div class="container-fluid">
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
    </div> --}}
    <!-- Table list-->
@endsection
