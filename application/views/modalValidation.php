<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" class="row g-3 needs-validation" novalidate>
                        <div>
                            <label for="">Name</label>
                            <input type="text" class="form-control" id="name" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>

                        <div>
                            <label for="">Phone number</label>
                            <input type="tel" class="form-control" id="phone_number"  pattern="[0-9]{10}" required>
                            <div class="invalid-feedback">
                                Enter valid phone number
                            </div>
                        </div>

                        <div>
                            <label for="">Gender</label>
                            <input type="text" class="form-control" id="gender" required>
                            <div class="invalid-feedback">
                                Enter the 1 or 2 
                            </div>
                        </div>

                        <div>
                            <label for="">Image</label>
                            <input type="file" class="form-control" id="image" name="file" required>
                            <div class="invalid-feedback">
                                require image
                            </div>
                        </div>

                        <div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-3">
            <table class="table">
                <thead>
                    <th>Name</th>
                    <th>phone number</th>
                    <th>gender</th>
                    <th>image</th>
                    <th>operation</th>
                </thead>
                <tbody id="tbody">
                    
                </tbody>

            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
        
        function fetchTable(){
            $.ajax({
                url:"fetchTable",
                method:"POST",
                dataType:"json",
                success:function(data){
                    //alert("hai");
                    var tbody="";
                    var ab="<?php echo base_url();?>";
                    console.log(ab);
                    for (var key in data){
                        //console.log(data[key]['id']);
                        
                        tbody += "<tr>";
                        tbody += "<td>"+data[key]['student_name']+"</td>";
                        tbody += "<td>"+data[key]['phone_number']+"</td>";
                        tbody += "<td>"+data[key]['gender']+"</td>";
                        
                        tbody += "<td> <img src="+ab+data[key]['image']+" alt='null' width='50px' height='50px'></td>";

                        tbody += "</tr>";
                    }
                    $("#tbody").html(tbody);
                }
            });
        }
        fetchTable();
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>