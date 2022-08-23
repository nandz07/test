<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <span id="success_message"></span>
                <form action="" method="POST" id="ccontact_form">
                    <div class="form-group">
                        <input type="text" name="name" id="name" class="form-control">
                        <span id="name_error" class="text-danger"></span>
                    </div>

                    <div class="form-group">
                        <input type="text" name="phonenumber" id="phonenumber" class="form-control">
                        <span id="phonenumber_error" class="text-danger"></span>
                    </div>

                    <div class="form-group">
                        <input type="text" name="genter" id="genter" class="form-control">
                        <span id="genter_error" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="contact" id="contact" class="btn btn-info">
                    </div>

                </form>
            </div>
        </div>
        
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('#contact_form').on('submit',function(event){
                event.preventDefault();//stop to submit form data to server
                alert("hai");
                // var DataJSON={
                // name:name,
                // phonenumber:phonenumber,
                // genter:genter
                // };
                
                $.ajax({
                    method:"POST",
                    url:"validation",
                    data:$(this).serialize(),
                    dataType:"json",
                    beforeSend:function(){
                        $('#contact').attr('disabled','disabled');//disable submit button
                    },
                    success:function(data){
                        if(data.error){
                            if(data.name_error != ''){
                                $('#name_error').html(data.name_error);
                            }else{
                                $('name_error').html('');
                            }
                            if(data.phonenumber_error != ''){
                                $('#phonenumber_error').html(data.phonenumber_error);
                            }else{
                                $('phonenumber_error').html('');
                            }
                            if(data.gender_error != ''){
                                $('#gender_error').html(data.gender_error);
                            }else{
                                $('gender_error').html('');
                            }
                        }
                        if(data.success){
                            $('#success_message').html(data.success);
                            $('#name_error').html('');
                            $('#phonenumber_error').html('');
                            $('#gender_error').html('');
                        }
                        $('#contact').attr('disabled',false);
                    }

                })
            });
        });
    </script>
</body>

</html>