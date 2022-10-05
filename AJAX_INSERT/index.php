<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX_INSERT</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Inset data using AJAX PHP and MYSQLI</h1><br>

        <div class="col-lg-8 m-auto">
            <form id="myform" action="insert.php" method="post">
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="text" name="password" class="form-control">
                </div>
                <input type="text" name="submit" id="submit" value="Submit" class="btn btn-success">
            </form>
        </div>

        <div>
            <br><br>
            <h1 class="text-center bg-primary text-white">Display Data using AJAX</h1>
            <br>
            <button id="displaydata" class="btn btn-danger">Diaplay</button>
            <br><br>
            <table class="table table-striped table-bordered text-center">
                <thread>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Password</th>
                </thread>
                <tbody id="response">

                </tbody>
                
            </table>
        </div>

    </div>
    <!-- $==jquery -->
    <script>
        $(document).ready(function() {
            const form=$('#myform');
            $('#submit').click(function(){
                $.ajax({
                    url:form.attr("action"),
                    type: 'POST',
                    data:$("#myform input").serialize(),
                    success:function(data){
                        console.log(data);
                    }
                })
            })
        })

        $('#displaydata').click(function(){
            $.ajax({
                url:'display.php',
                type: 'POST',
                success:function(data){
                    $('#response').html(data);
                }
            })
        })
    </script>
</body>
</html>