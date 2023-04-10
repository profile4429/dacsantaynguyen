@extends('backend/layout/master')
@section('header_name')
    Quản lý sản phẩm
@endsection

@section('content')
    <!-- Modal add -->
    <div class="modal fade" id="add_modal" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form method="post" action="{{ route('AddProduct') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="category_id">Loại sản phẩm:</label>
                                <select class="form-control" name="category_id" id="category_id" required>
                                    @foreach ($category as $item)
                                        <option value="{{ $item->id }}">
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="title">Tên sản phẩm:</label>
                                <input name="title" required type="text" class="form-control" id="title"
                                    value="">
                            </div>
                            <div class="form-group">
                                <label for="price">Giá gốc:</label>
                                <input name="price" required type="text" class="form-control" id="price"
                                    value="">
                            </div>
                            <div class="form-group">
                                <label for="discount">Giá khuyến mãi:</label>
                                <input name="discount" required type="text" class="form-control" id="discount"
                                    value="">
                            </div>
                            <div class="form-group">
                                <label for="image">Hình ảnh:</label>
                                <input required type="file" class="form-control-file" id="image" name="image"
                                    accept=".jpg, .png, .jpeg|image/*">
                                <img class="card-img-top" style="height: 150px; width: 300px; object-fit: cover;"
                                    src="" alt="" id="preview-image">
                            </div>
                            <div class="form-group">
                                <label for="desc">Decsription:</label>
                                <textarea name="desc" class="form-control" id="desc_add"></textarea>

                                <button type="submit" class="btn btn-primary">Thêm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal add -->

    <!-- Modal edit -->
    <div class="modal fade" id="edit_modal" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa sản phẩm</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form method="post" action="" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="category_id">Loại sản phẩm:</label>
                                <select class="form-control" name="category_id" id="category_id" required>
                                    @foreach ($category as $item)
                                        <option value="{{ $item->id }}">
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="title">Tên sản phẩm:</label>
                                <input name="title" required type="text" class="form-control" id="title"
                                    value="">
                            </div>
                            <div class="form-group">
                                <label for="price">Giá gốc:</label>
                                <input name="price" required type="text" class="form-control" id="price"
                                    value="">
                            </div>
                            <div class="form-group">
                                <label for="discount">Giá khuyến mãi:</label>
                                <input name="discount" required type="text" class="form-control" id="discount"
                                    value="">
                            </div>
                            <div class="form-group">
                                <label for="image">Hình ảnh:</label>
                                <input required type="file" class="form-control-file" id="image" name="image"
                                    accept=".jpg, .png, .jpeg|image/*">
                                <img class="card-img-top" style="height: 150px; width: 300px; object-fit: cover;"
                                    src="" alt="" id="preview-image">
                            </div>
                            <div class="form-group">
                                <label for="desc">Decsription:</label>
                                <textarea name="desc" class="form-control" id="desc_edit"></textarea>

                                <button type="submit" class="btn btn-primary">Thêm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal edit -->


    <!-- Modal delete-->
    <div class="modal fade" id="delete_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Xóa sản phẩm</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h3>Bạn có chắc chắn muốn xóa sản phẩm này không?</h3>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="id_product" value="">
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
            <caption>Danh sách sản phẩm</caption>
            <thead class="table-secondary">
                <tr>
                    <td><strong>ID</strong></th>
                    <th><strong>Category ID</strong></th>
                    <th><strong>Title</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Discount</strong></th>
                    <th><strong>Image</strong></th>
                    <th><strong>Description</strong></th>
                    <th><strong>Hành động</strong></th>
                </tr>
            </thead>
            <tbody>
                <!-- Dữ liệu trong bảng -->
                @foreach ($product as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>
                            @foreach ($category as $category_item)
                                @if ($category_item->id == $product->category_id)
                                    {{ $category_item->name }}
                                @endif
                            @endforeach
                        </td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->discount }}</td>
                        <td><img class="card-img-top rounded" style="height: 150px; object-fit: cover;"
                                src="{{ asset('/images/' . $product->image) }}" alt=""></td>
                        <td>{!! $product->desc !!}</td>
                        <td>

                            <button id="btnEdit" class="btn btnEdit" data-id="{{ $product->id }}"><i
                                    class="fa-solid fa-pen-to-square fa-lg" style="color: #000000;"></i></button>
                            <button type="button" class="btn btnDelete" data-id="{{ $product->id }}"><i
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
                $("#id_product").val(id);
                $("#delete_modal").modal("show");
            });

            $(document).on("click", ".btn_delete_confirm", function() {
                let id = $("#id_product").val();

                $.ajax({
                    type: "post",
                    dataType: "json",
                    url: '{{ route('DeleteProduct') }}',
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

    <script>
        $(document).ready(function() {
            document.querySelectorAll(".btnEdit").forEach((element) => {
                element.addEventListener("click", function() {
                    let product_id = $(this).data('id');
                    $.ajax({
                        type: 'GET',
                        dataType: 'json',
                        url: '{{ route('GetProductID') }}',
                        data: {
                            product_id: product_id,
                        },
                        success: function(response) {
                            $('#edit_modal #category_id').val(response.category_id);
                            $('#edit_modal #title').val(response.title);
                            $('#edit_modal #price').val(response.price);
                            $('#edit_modal #discount').val(response.discount);
                            if (response.image) {
                                $('#edit_modal #preview-image').attr('src', '/images/' +
                                    response.image);
                            } else {
                                $('#edit_modal #preview-image').attr('src', '');
                            }
                            $('#edit_modal #desc').val(response.desc);
                            $('#edit_modal').modal('show');
                        },
                        error: function() {
                            alert('lỗi');
                        }
                    });
                });
            });
        });
    </script>
    <script src="{{ asset('backend/js/product.js') }}"></script>
@endsection
