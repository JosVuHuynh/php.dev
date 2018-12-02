
<?php 

$fullname=$email=$phone=$address=$password="";
$fullnameErr=$emailErr=$phoneErr=$addressErr=$passwordErr=$password_confirmErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['fullname'])){
        $fullnameErr="Full Name is required";
    }else{
        $fullname=$_POST['fullname'];
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format"; 
    }else{
        $email=$_POST['email'];
    }

    if(empty($_POST['phone'])){
        $phoneErr="Phone is required";
    }else{
        $phone=$_POST['phone'];
    }
    if(empty($_POST['address'])){
        $addressErr="Address is required";
    }else{
        $address=$_POST['address'];
    }
    if(empty($_POST['password'])){
        $passwordErr="Password is required";
    }else{
        $password=$_POST['password'];
    }
    if($_POST['password_confirm'] != $password){
        $password_confirmErr="password confirm not match";
    }
}
?>
<div class="form-register">
    <form class="form-horizontal" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2>New User</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 field-label-responsive">
                <label for="name">Full Name</label>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                        <input type="text" name="fullname" class="form-control" 
                            value="<?php echo $fullname; ?>" placeholder="John Doe">
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <?php if(!empty($passwordErr)) : ?>
                                <i class="fa fa-close"> <?php echo $fullnameErr ; ?></i>
                            <?php endif ?>
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 field-label-responsive">
                <label for="email">E-Mail Address</label>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                        <input type="text" name="email" class="form-control" 
                            value="<?php echo $email; ?>" placeholder="you@example.com" autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <?php if(!empty($emailErr)) : ?>
                                <i class="fa fa-close"> <?php echo $emailErr ; ?></i>
                            <?php endif ?>
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 field-label-responsive">
                <label for="name">Phone Number</label>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <input type="text" name="phone" class="form-control" 
                            value="<?php echo $phone; ?>"    placeholder="01695669219" autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <?php if(!empty($phoneErr)) : ?>
                                <i class="fa fa-close"> <?php echo $phoneErr ; ?></i>
                            <?php endif ?>
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 field-label-responsive">
                <label for="name">Address</label>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <input type="text" name="address" class="form-control" 
                            value="<?php echo $address; ?>"    placeholder="Ho Chi Minh City" autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <?php if(!empty($addressErr)) : ?>
                                <i class="fa fa-close"> <?php echo $addressErr ; ?></i>
                            <?php endif ?>
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 field-label-responsive">
                <label for="password">Password</label>
            </div>
            <div class="col-md-8">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                        <input type="password" name="password" class="form-control"
                            value="<?php echo $password; ?>"  placeholder="Password">
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <?php if(!empty($passwordErr)) : ?>
                                <i class="fa fa-close"> <?php echo $passwordErr ; ?></i>
                            <?php endif ?>
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 field-label-responsive">
                <label for="password">Confirm Password</label>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem">
                            <i class="fa fa-repeat"></i>
                        </div>
                        <input type="password" name="password-confirmation" class="form-control"
                                id="password-confirm" placeholder="Password">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <!-- <button type="submit" class="btn btn-success" name="submit"><i class="fa fa-user-plus"></i> Register</button> -->
                <input class="btn btn-success" name="submit" type="submit" value=" Register "/>
            </div>
        </div>
    </form>
</div>