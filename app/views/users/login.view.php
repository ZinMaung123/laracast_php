<?php include $_SERVER['DOCUMENT_ROOT'] . "/app/views/partials/head.php" ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card card-body bg-light mt-5">
                    <h2>Login Here</h2>
                    <form action="/login" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name='password' class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>    
                </div>
            </div>
        </div>
    </div>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/app/views/footer.php"?>