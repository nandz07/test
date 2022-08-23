<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <form action="<?= base_url('student/add')?>" mehtod="post">
         
    <table border="2">
        <tr>
            <td>name</td>

            <td><input type="text" name="name"></td>

        </tr>
        <tr>
            <td>cource</td>

            <td><input type="text" name="cource"></td>

        </tr>
        <tr>
            <td>mark</td>

            <td><input type="text" name="mark"></td>

        </tr>
        <tr><td>
            <input type="submit" name="add" value="insert" onClick="window.location.href='<?php echo base_url();?>student/add';return false;"/>
            </td></tr>

    </table>
    </form>
</body>
</html>