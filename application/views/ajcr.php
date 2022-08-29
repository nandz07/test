<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h1 class="text-center">
                    ajax_sample
                </h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-2">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Add
                </button>

                <!-- Modal for Add -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="POST" id="form">
                                    <div class="form-group">
                                        <label for="">name</label><span></span>
                                        <input type="text" id="name" class="form-control">

                                        <label for="">phonenumber</label>
                                        <input type="tel" id="phonenumber" class="form-control">

                                        <label for="">gender</label>
                                        <input type="text" id="gender" class="form-control">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="add">add</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal for Edit -->
                <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="POST" id="form">
                                    <div class="form-group">

                                        <input type="hidden" id="edit_id" class="form-control" >

                                        <label for="">name</label><span></span>
                                        <input type="text" id="edit_name" class="form-control">

                                        <label for="">phonenumber</label>
                                        <input type="text" id="edit_phonenumber" class="form-control">

                                        <label for="">gender</label>
                                        <input type="text" id="edit_gender" class="form-control">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="update">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-3">
                <table class="table">
                    <thead>
                        <th>name</th>
                        <th>phonenumber</th>
                        <th>gender</th>
                    </thead>
                    <tbody id="tbody">

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).on("click", '#add', function(e) { // *******
            e.preventDefault(); //**********           
            var name = $("#name").val();
            var phonenumber = $("#phonenumber").val();
            var gender = $("#gender").val();
            //console.log(name);

            var DataJSON = {
                name: name,
                phonenumber: phonenumber,
                gender: gender
            };

            $.ajax({
                method: "post",
                url: "ajcrInsert",
                dataType: "json",
                data: DataJSON,
                success: function(response) {
                    console.log(response);
                    fetch();
                    $('#exampleModal').modal('hide')
                    $('#form')[0].reset();
                    if (response.message == "success") {
                        toastr["success"](response.message);

                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }


                    } else {
                        toastr["error"](response.message);

                        toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut",
                            "setTextColor": "green"
                        }
                    }


                }
            });

        });

        function fetch() {
            $.ajax({
                url: "fetch",
                method: "get",
                dataType: "json",
                success: function(data) {
                    var tbody = "";

                    for (var key in data) {
                        tbody += "<tr>";
                        tbody += "<td>" + data[key]['student_name'] + "</td>";
                        tbody += "<td>" + data[key]['phone_number'] + "</td>";
                        tbody += "<td>" + data[key]['gender'] + "</td>";
                        tbody += `<td>
                                    <a href="#" id="del" value="${data[key]['id']}">Delete</a>
                                    <a href="#" id="edit" value="${data[key]['id']}">Edit</a>
                                </td>`;
                        tbody += "</tr>";
                    }
                    $("#tbody").html(tbody);
                }
            });
        }
        fetch();
        $(document).on("click", "#del", function(e) {
            e.preventDefault();
            var del_id = $(this).attr("value");


            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger mr-2'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        url: "ajdelete",
                        type: "post",
                        dataType: "json",
                        data: {
                            del_id: del_id
                        },
                        success: function(data) {


                            console.log(data.response);
                            if (data.response == 'success') {
                                swalWithBootstrapButtons.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                )
                                fetch();
                            }

                        }
                    });




                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            })

        });
        $(document).on("click", "#edit", function(e) {
            e.preventDefault();
            var edit_id = $(this).attr("value");
            //alert(edit_id);
            if (edit_id == "") {
                alert("id need");
            } else {
                $.ajax({
                    url: "ajcredit",
                    type: "post",
                    dataType: "json",
                    data: {
                        edit_id: edit_id
                    },
                    success: function(data) {
                        //console.log(data);
                        $('#editModal').modal('show');
                        $('#edit_id').val(data.post.id);
                        $('#edit_name').val(data.post.student_name);
                        $('#edit_phonenumber').val(data.post.phone_number);
                        $('#edit_gender').val(data.post.gender);
                    }
                });
            }
        });
        $(document).on("click", "#update", function(e) {
            e.preventDefault();
            //alert("hai");
            var edit_id = $("#edit_id").val();
            var edit_name = $("#edit_name").val();
            var edit_phonenumber = $("#edit_phonenumber").val();
            var edit_gender = $("#edit_gender").val();

            //alert(edit_name);
            var DataJSON = {
                edit_id: edit_id,
                edit_name: edit_name,
                edit_phonenumber: edit_phonenumber,
                edit_gender: edit_gender
            };
            //alert(DataJSON.edit_gender);

            $.ajax({
                method: "post",
                url: "ajcrupdate",
                dataType: "json",
                data: DataJSON,
                success: function(response) {
                    console.log(response);
                    fetch();
                    $('#editModal').modal('hide')
                    $('#form')[0].reset();
                    if (response.message == "success") {
                        //toastr["success"](response.message);
                        toster

                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut",
                        }


                    } else {
                        toastr["error"](response.message);

                        toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut",
                            "setTextColor": "green"
                        }
                    }


                }
            });

        });
    </script>
</body>

</html>