@extends('backend/layout/master')
@section('header_name')
    Quản lý danh mục
@endsection

@section('content')
  <!-- Modal add -->
  <div class="modal fade" id="add_modal" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm danh mục</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form method="post" action="{{route('AddCategory')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Tên danh mục:</label>
                            <input name="name" required type="text" class="form-control" id="name"
                                value="">
                        </div>
                        <div class="form-group">
                            <label for="image">Hình ảnh:</label>
                            <input required type="file" class="form-control-file" id="image" name="image"
                                accept=".jpg, .png, .jpeg|image/*">
                            <img class="card-img-top" style="height: 150px; width: 300px; object-fit: cover;"
                                src="" alt="" id="preview-image">
                        </div>
                            <button type="submit" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End modal add -->

<!-- Modal delete-->
<div class="modal fade" id="delete_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Xóa danh mục</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h3>Bạn có chắc chắn muốn xóa danh mục?</h3>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="id_category" value="">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn_delete_confirm">Delete</button>
            </div>
        </div>
    </div>
</div>
<!--End modal delete-->

    <!-- Table list-->
    <div class="container-fluid">
        <table class="table align-middle table-bordered table-hover">
            <caption>Danh sách danh mục sản phẩm</caption>
            <thead class="table-secondary">
                <tr>
                    <td><strong>ID</strong></th>
                    <th><strong>Tên danh mục</strong></th>
                    <th><strong>Hình ảnh</strong></th>
                    <th><strong>Hành động</strong></th>
                </tr>
            </thead>
            <tbody>
                <!-- Dữ liệu trong bảng -->
                @foreach ($category as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td><img class="card-img-top rounded" style="height: 150px; object-fit: cover;"
                                src="{{ asset('/images/' . $item->image) }}" alt=""></td>
                        <td>

                            <button id="" class="btn btnEdit" data-id="{{ $item->id }}"><i
                                    class="fa-solid fa-pen-to-square fa-lg" style="color: #000000;"></i></button>
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

    <script>
        $(document).ready(function() {
            $(document).on("click", ".btnDelete", function() {
                let id = $(this).data("id");
                $("#id_category").val(id);
                $("#delete_modal").modal("show");
            });

            $(document).on("click", ".btn_delete_confirm", function() {
                let id = $("#id_category").val();

                $.ajax({
                    type: "post",
                    dataType: "json",
                    url: '{{ route('DeleteCategory') }}',
                    data: {
                        id: id,
                        _token: "{{ csrf_token() }}",
                    },
                    success: function(data) {
                        if (data.error == 0) {
                            window.location.reload();
                        } else {
                            alert("Xóa thất bại");
                        }
                    },
                });
            });
        });
    </script>
    <script src="{{ asset('backend/js/category.js') }}"></script>
@endsection