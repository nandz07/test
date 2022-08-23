<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajaxcruid</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('/js/jquery-3.6.0.min.js'); ?>"></script>

</head>

<body>

<div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">student data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="form-group">
        <label for="">name</label><span id="error_name" class="text-danger ms-3"></span>
        <input type="text" class="form-control name" id="name" placeholder="">
       </div>
     
      <div class="form-group">
        <label for="">phonenumber</label><span id="error_phonenumber" class="text-danger ms-3"></span>
        <input type="text" class="form-control phonenumber" id="phonenumber">
       </div>
     
      <div class="form-group">
        <label for="">genter</label><span id="error_genter" class="text-danger ms-3"></span>
        <input type="text" class="form-control" id="genter">
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary ajaxstudent-save" onclick="savedata()" >Save </button>
      </div>
    </div>
  </div>
</div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    data
                    <a href="#" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#studentModal">add</a>
                </h4>
                <div class="card-body">

                </div>
            </div>
            <table class="table table-borderd">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>phone</th>
                        <th>gender</th>
                    </tr>
                </thead>
                <tbody class="studentdata">

                </tbody>
            </table>
        </div>
    </div>

    <script>
         $(document).ready(function(){
            loadStudent();
         });
        function loadStudent(){
            $.ajax({
                method:"GET",
                url:"getData",
                success:function(response){
                    console.log(response.students);
                    // $.each(response.students,function(key,value){
                    //     console.log(value['name']);
                    // });
                }
            });
        }
    </script>

    <script >
        
        function savedata(){
            var name =$("#name").val();//data get by id
            var phonenumber =$("#phonenumber").val();
            var genter =$("#genter").val();

            if(name.length == 0){
                error_name = 'please enter full name..!';
                $('#error_name').text(error_name);//pass error to span by span id
            }else{
                error_name = '';
                $('#error_name').text(error_name);  
            }
            if(phonenumber.length == 0){
                error_phonenumber = 'please enter phonenumber..!';
                $('#error_phonenumber').text(error_phonenumber);//pass error to span by span id
            }else{
                error_phonenumber = '';
                $('#error_phonenumber').text(error_phonenumber);  
            }
            if(genter.length == 0){
                error_genter = 'please enter gender..!';
                $('#error_genter').text(error_genter);//pass error to span by span id
            }else{
                error_genter = '';
                $('#error_genter').text(error_genter);  
            }

            if(error_name !='' || error_phonenumber != '' || error_genter!='')
            {
                return false
            }else
            {
                var DataJSON={
                name:name,
                phonenumber:phonenumber,
                genter:genter
            };
            // alert(JSON.stringify(DataJSON));
           
            $.ajax({
                method:"post",
                url:"savedata",
                data:DataJSON,
                success:function(response){
                    $('#studentModal').modal('hide');
                    $('#studentModal').find('input').val('');

                    // alertify.set('notifier','position','top-right')
                    // alertify.success(response.status);
                    //alert.success(response.status);

                    // if(response.status == true){
                    //     alert("done");
                    // }
                }
            })

            }


            

            

           

        }
    </script>

</body>

</html>