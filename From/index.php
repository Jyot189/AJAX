<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asynchronous JavaScript And XML</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-success text-center">AJAX Asynchronous JavaScript And XML</h3>
                <form>
                    <div class="form-group">
                        <label for="user">Username:</label>
                        <input type="text" class="form-control" id="user" name="">
                    </div>
                    <div class="form-group">
                        <label for="Password">Password:</label>
                        <input type="text" class="form-control" id="Password" name="">
                    </div>
                    <div class="form-group">
                        <label>Choose State:</label>
                        <select class="form-control" onchange="myfun(this.value)">
                            <option>Select State</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="UP">UP</option>
                            <option value="Bihar">Bihar</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Choose City:</label>
                        <select class="form-control" id="city">
                            <option>Select City</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function myfun(data){
            var req=new XMLHttpRequest();
            req.open('GET',"http://localhost/AJAX/From/response.php?datavalue="+data,true);
            req.send();

            req.onreadystatechange = function(){
                if(req.readyState==4 && req.status==200){
                    document.getElementById("city").innerHTML=req.responseText;
                }
            }
        }
    </script>
</body>

</html>