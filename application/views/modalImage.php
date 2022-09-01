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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="check()">
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
                                <form id="submit_form">
                                    <div class="form-group">

                                        <label for="">name</label><span id="name_span" style="color:red"></span>
                                        <input type="text" id="name" name="name" class="form-control" oninput="checkName()">

                                        <label for="">phonenumber</label><span id="phone_number_span" style="color:red"></span>
                                        <input type="text" id="phone_number" name="phone_number" class="form-control" oninput="checkPhonenumber()" >

                                        <label for="">gender</label><span id="gender_span" style="color:red"></span>
                                        <input type="text" id="gender" name="gender" class="form-control" oninput="checkGender()">
                                        
                                        <label for="">image</label><span id="image_span" style="color:red"></span>
                                        <input type="file" id="image" name="file" class="form-control" oninput="checkImage()">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <input type="submit" name="upload_button" id="upload_btn" value="upload">
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Modal for Edit -->

            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mt-3">
                <table class="table">
                    <thead>
                        <th>name</th>
                        <th>phonenumber</th>
                        <th>gender</th>
                        <th>image</th>
                        <th>operations</th>
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
var name_status=false;
var phone_number_status=false;
var gender_status=false;
var image_status=false;
        $(document).ready(function() {
            $("#submit_form").on("submit", function(e) {
                e.preventDefault();
                
                //alert(name_status);
                if(name_status!=null && phone_number_status!=null && gender_status!=null && image_status!=null){
                    
                
                var formData = new FormData(this);
                //alert(formData);
                var name = $("#name").val();
                var name = $("#gender").val();
                var phone_number=$("#phone_number").val();

            //     var DataJSON = {
            //     name: name,
            //     gender:gender,
            //     phone_number:phone_number
            // };
            var DataJSON=$('#submit_form').serialize();
                // console.log(formData);
                // console.log(DataJSON);
                $.ajax({
                    url:"modalImageInsert",
                    type:"post",
                    data:formData,DataJSON,
                    contentType:false,
                    processData:false,
                    success: function(response) {
                    
                    
                        $('#exampleModal').modal('hide')
                        $('#submit_form')[0].reset();
                    


                }
                });
            }else{
                check();
            }
            });
        });
        function checkName(){
            var data = 'name='+$('#name').val();
            if(data.length<6){
                $('#name_span').text(" need this feild");
                name_status=false;
                //alert("name"+data.length);
            }else{
                $('#name_span').text(" ");
                
                name_status=true;
                //alert(name_status);

            }
        }
        function checkPhonenumber(){
            var data = 'phone_number='+$('#phone_number').val();
            if(data.length<23){
                $('#phone_number_span').text(" need valid phone number ..!");
                phone_number_status=false;
                //alert("phone"+data.length);
            }
            else{
                $('#phone_number_span').text(" ");
                //alert(name_status);
                 phone_number_status=true;
            }
        }
        function checkGender(){
            var data = 'gender='+$('#gender').val();
            if(data.length<8){
                $('#gender_span').text(" need this feild");
                gender_status=true;
                //alert("gender"+data.length);
            }
            else{
                $('#gender_span').text(" ");
                gender_status=true;
            }
        }
    function checkImage(){
        var data='image'+$('#image').val();
        if(data.length<6){
            $('#image_span').text(" need this feild");
            image_status=true;
                //alert("image"+data.length);
            }
            else{
                $('#image_span').text(" ");
                image_status=true;
        }
    }
        function check(){
            checkName();
            checkPhonenumber();
            checkGender();
            checkImage()
        }
        

        function fetch(){
            $.ajax({
                url:"fetch",
                method:"GET",
                dataType:"json",
                success
            });
        }
    </script>
</body>

</html>