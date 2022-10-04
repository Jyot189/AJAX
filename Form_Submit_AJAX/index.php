<?php
include_once('dbconnect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container col-lg-6">
        <h2 class="text-center text-danger">Get data from database</h2>
        <form action="">
            Username: <input type="text" name="username" class="form-control"><br>
            Password: <input type="text" name="password" class="form-control"><br>
            Degree: <select class="form-control" onchange="myfunc(this.value)">
                <option>Select Any One</option>
                <?php
                            $sql="select * from degree";
                            $result=mysqli_query($conn,$sql);
                            while ($row=mysqli_fetch_array($result)){
                                ?>
                <option value="<?php echo $row['mid'];?>"><?php echo $row['degrees'];?></option>
                <?php }
                        ?>
            </select><br>

            Class: <select class="form-control" id="dataget">
                </select><br>
                     <button class="btn btn-primary">Submit</button>           
            </select><br>
        </form>
    </div>

    <script>
        function myfunc(datavalue){
            $.ajax({
                url:'class.php',
                type:'POST',
                data:{datapost:datavalue},
                success:function(result){
                    $('#dataget').html(result);
                }
            })
        }
    </script>
</body>

</html>