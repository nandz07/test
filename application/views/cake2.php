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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addMyModal">Open Modal</button>
    <div class="modal fade" id="addMyModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Stuff</h4>
                </div>
                <div class="modal-body">
                    <form id="basic-form" action="" method="post">
                        <p>
                            <label for="name">Name <span>(required, at least 3 characters)</span></label>
                            <input id="name" name="name">
                        </p>
                        <p>
                            <label for="age">Your Age <span>(minimum 18)</span></label>
                            <input id="age" name="age">
                        </p>
                        <!-- <p>
            <label for="email">E-Mail <span>(required)</span></label>
            <input id="email" name="email">
        </p>
        <p>
            <label for="weight">Weight <span>(required if age over 50)</span></label>
            <input id="weight" name="weight">
        </p> -->
                        <p>
                            <input class="submit" type="submit" value="SUBMIT">
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <script>
        $(function() {

            $("#basic-form").validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 8
                    },
                    age: "required"
                },
                messages: {
                    name: {
                        required: "Please enter some data",
                        minlength: "Your data must be at least 8 characters"
                    },
                    age: "Please provide some data"
                }
            });
        });
    </script>

</body>

</html>