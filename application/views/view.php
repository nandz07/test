<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>row</title>
</head>
<body>
    <form action="" method="post">
    <table border="1">
        <tr>
            <td style="background-color: plum;text-align:center">slno</td>
            <td style="background-color: plum;text-align:center">name</td>
            <td style="background-color: plum;">cource</td>
            <td style="background-color: plum;">mark</td>
            <td style="background-color: plum;">image</td>

            <td style="background-color: plum;">operations</td>
        </tr>
        

        <?php
        foreach($crud as $row)
            {
                ?>
                <tr>
                    <td>
                        <?php echo $row->id?>
                    </td>
                    <td>
                        <?php echo $row->name?>
                    </td>
                    <td>
                        <?php echo $row->cource?>
                    </td>
                    <td>
                        <?php echo $row->mark?>
                    </td>
                    <td></td>

                    <td><input type="submit" name="delete" value="delete" style="background-color:red" onClick="window.location.href='<?php echo base_url();?>student/delete';return false;"></input>
                    <input type="submit" name="update" value="update" style="background-color:blue" onClick="window.location.href='<?php echo base_url();?>student/update';return false;"></input></td>
                </tr>
              
                <?php
            }

       
       ?>
       
       
   
            
   


    </table>
    <tr>
        <td>
                 <input type="submit" name="insert" value="addnew" onClick="window.location.href='<?php echo base_url();?>student/register';return false;"> 
         
    </td>
    </tr>



    
</form> 
    
  
</body>

</html>


