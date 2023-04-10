$("#image").change(function () {
    let reader = new FileReader();
    reader.onload = function (e) {
        $("#preview-image").attr("src", e.target.result);
    };
    reader.readAsDataURL(this.files[0]);
});

// $(document).ready(function () {
//     document.querySelectorAll(".btnEdit").forEach((element) => {
//         element.addEventListener("click", function () {
//             let id = $(this).data("id");
//             $("#edit_modal").modal("show");
//             $("#id_product_edit").val(id);
//         });
//     });
// });

$(document).ready(function () {
    $(document).on("click", ".btnAdd", function () {
        $("#add_modal").modal("show");
    });
});
$(document).ready(function () {
    let options = {
        placeholder: "Nhap noi dung",
        tabsize: 2,
        height: 300,
        toolbar: [
            ["style", ["style"]],
            ["font", ["bold", "underline", "clear"]],
            ["color", ["color"]],
            ["para", ["ul", "ol", "paragraph"]],
            ["table", ["table"]],
            ["insert", ["link", "picture", "video"]],
            ["view", ["fullscreen", "codeview", "help"]],
        ],
    };

    $('#desc_add').summernote(options);
    $('#desc_edit').summernote(options);
});


