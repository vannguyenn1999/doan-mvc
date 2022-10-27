var obj_form = document.querySelector("#add");
obj_form.addEventListener("submit", function () {
  // document.addEventListener(SubmitEvent('#add'), function () {
  // Mong muốn của chúng ta
  Validator({
    form: "#add",
    formGroupSelector: ".form-group",
    errorSelector: ".form-message",
    rules: [
      Validator.isRequired("#masp", "Vui lòng nhập mã sản phẩm"),
      Validator.isRequired("#tensp", "Vui lòng nhập tên sản phẩm"),
      Validator.isRequired("#giasp", "Vui lòng nhập giá sản phẩm"),
      Validator.isRequired("#anh", "Vui lòng nhập ảnh sản phẩm"),
      Validator.isRequired("#soluong", "Vui lòng nhập số lượng sản phẩm"),
      Validator.isRequired("#thongtin", "Vui lòng nhập số lượng sản phẩm"),
      // Validator.isRequired('#add', 'Vui lòng nhập thông tin sản phẩm')
    ],
  });
});

// var obj = {
//   rules: {
//     masp: {
//       required: true,
//       minlength: 5,
//     },
//     tensp: {
//       required: true,
//       minlength: 5,
//     },
//     anh: {
//       required: true,
//     },
//     giasp: {
//       required: true,
//       number: true,
//       minlength: 7,
//     },
//     soluong: {
//       required: true,
//       number: true,
//     },
//     thongtin: {
//       required: true,

//     },

//   },
//   messages: {
//     masp: {
//       required: "tên phải mã sản phẩm",
//       minlength: "tên phải nhập ít nhất 5 ký tự",
//     },
//     tensp: {
//       required: "tên phải mã sản phẩm",
//       minlength: "tên phải nhập ít nhất 5 ký tự",
//     },
//     giasp: {
//       required: "gia phải nhập",
//       number: "tuổi phải là số",
//     },
//     giasp: {
//       required: "gia phải nhập",
//       number: "tuổi phải là số",
//     },
//     soluong: {
//       required: "gia phải nhập",
//       number: "tuổi phải là số",
//     },
//     thongtin: {
//       required: "tên phải mã sản phẩm",
//       minlength: "tên phải nhập ít nhất 5 ký tự",
//     },

//   },
// };
// $("#add").validate(obj);
