<?php
session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="student login">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="DEEPAK">
    <!--bootstrap css ---->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <!--external css-->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
</head>
<body>
    <div class="container shadow">
        <h2 class="text-center">WELCOME STUDENT</h2>
        <div class="card col-lg-6 m-auto border-primary ">
            <div class="card-header bg-primary text-center text-white">
                <h3>STUDENT LOGIN</h3>
            </div>
            <div class="card-body">
            <div class="alert alert-success alert-dismissible fade show" id="success-alert"  role="alert">
  <strong>Yeah!!</strong>You have registred successfully
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class="alert alert-warning alert-dismissible fade show" id="warning-alert"  role="alert">
  <strong>hmm!</strong>Already you have registred kindly login
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class="alert alert-danger alert-dismissible fade show" id="danger-alert"  role="alert">
  <strong>Haha!!</strong>Enter Correct captcha code
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
      <form class="col-lg-6 m-auto" id="log">
                    <div class="form-group">
                        <input type="hidden" name="token">
                        <label class="form-label" for="username">Username</label>
                        <input class="form-control" type="text" id="username" name="username" required
                            placeholder="username">
                    </div>
                    <div class="form-group mb-2">
                        <label class="form-label" for="password">Password</label>
                        <input class="form-control" id="password" type="password" name="pass" required
                            placeholder="password">
                    </div>
                    <div class="form-group captcha">
                        <img src="../assets/captcha/captcha.php" id="captcha_image" alt="captcha"><span>
                            <img src="../assets/images/re.png" class="refresh" width="30px" height="30px"
                                alt="refresh image">
                        </span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="captcha">Captcha</label>
                        <input class="form-control" type="text" id="captcha" name="captcha" required
                            placeholder="captcha">
                    </div>

                    <div class="form-group mt-3">
                        <button id="login" class="btn btn-success">Login</button>
                        <button type="reset" class="btn btn-warning text-white float-end">Reset</button>
                    </div>

                    <p>Forgot password??  <a href='' data-bs-toggle="modal" class="btn-sm btn-danger" data-bs-target="#forgotmodal">click here</a></p>
                </form>
            </div>
        </div>
    </div>


    <!----forgot password modal--->

    <div class="modal fade" id="forgotmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Reset Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
      <div class="alert alert-success alert-dismissible fade show" id="esuccess-alert"  role="alert">
  <strong>Yeah!!</strong>Password changed successfully
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class="alert alert-danger alert-dismissible fade show" id="edanger-alert"  role="alert">
  <strong>Haha!!</strong>hmm password does not match
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
      <form class="col-lg-8 m-auto" id="forgotform">
  

              <div class="from-group">
                  <label for="email">Email</label>
                  <input type="email" name="femail" id='femail' class="form-control" required/>
              </div>
                  <button class="btn-sm btn-info mt-2"  id="changeemail" >Change email</button>
              <div class="form-group mt-2">
                  <button id="validate" class="btn-sm btn-primary">Validate</button>
                  <div class="spinner-border text-success" id="spinner" role="status">
  <span class="visually-hidden"></span>
</div>
              </div>
              <div class="from-group">
                  <label for="password">New password</label>
                  <input type="password"  name="fpass" id='fpass' class="form-control" disabled required/>
              </div>
              <div class="from-group">
                  <label for="confirm password">confirm password</label>
                  <input type="password" name="cfpass" id='cfpass' class="form-control" disabled required/>
              </div>
              <div class="form-group">
                  <p class="error"></p>
              </div>
              <div class="from-group mt-3">
              <button type="submit" id="changepass" class="btn btn-danger">Change password</button>
        <button type="reset"  class="btn btn-warning float-end">Reset</button>
      </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    <!--bootstrap js--->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js" async defer></script>
    <script>
        $(document).ready(function () {
            $('#spinner').hide();
            $('#success-alert').hide();
            $('#warning-alert').hide();
            $('#danger-alert').hide();
            $('#changeemail').hide()
            $('#edanger-alert').hide();
            $('#esuccess-alert').hide();

            $('#login').click(function () {
                var username = $('#username').val();
                var pass = $('#password').val();
                var captcha = $('#captcha').val();

                if (username == '') {
                    alert('Enter username!!');
                    $('#username').focus();
                    return false
                } else if (pass == '') {
                    alert('Enter password!!');
                    $('#password').focus();
                    return false

                } else if (captcha == '') {
                    alert('Enter captcha !!')
                    $('#captcha').focus();
                }

            })

            //registration data last made changes
            $('#log').on('submit',function (event) {
                event.preventDefault();
                var data = $('#log').serialize();
                $.ajax({
                    url: 'validation.php',
                    type: 'POST',
                    data: data,
                    success: function (data) {
                        if(data==1){

                            $('#warning-alert').show();
                            $("#warning-alert").fadeTo(3000, 500).slideUp(500, function() {
                            $("#warning-alert").slideUp(500);
                            });
                            return false;

                        }
                        else if(data==2){

                            $('#success-alert').show();
                            $("#success-alert").fadeTo(3000, 500).slideUp(500, function() {
                            $("#success-alert").slideUp(500);
                            })
                        }
                        else{
                            $('#danger-alert').show();
                            $("#danger-alert").fadeTo(3000, 500).slideUp(500, function() {
                            $("#danger-alert").slideUp(500);
                            })
                        }
                    }
                })
            })
            //refresh the data images 


            $(".refresh").click(function () {
                $("#captcha_image").attr('src', '../assets/captcha/captcha.php');
                return false
            })
            //forgot passaword data 

            $('#validate').click(function(e){
                e.preventDefault();
                var valemail=$('#femail').val();
                if(valemail==''){
                    alert('Enter email to proceed to change the password')
                    return false;

                }
                else{
                    $.ajax({
                        url:'cpass.php',
                        type:'POST',
                        data:{email:valemail},
                        beforeSend: function() { 
                       $("#spinner").show();
                   },
                        success:function(resp){

                            if(resp==1){
                                alert('Email verifed sucessfully');
                                $('#fpass').removeAttr('disabled');
                                $('#cfpass').removeAttr('disabled');
                                $('#spinner').hide();
                                $('#validate').hide();
                                $('#femail').attr("disabled", "disabled");
                                $('#changeemail').show()
                            }
                            else{
                                alert('Email  not found In our database');
                                $("#spinner").hide();
                            }
                            // alert(resp)
                        }

                    })
                }
            })

            $('#cfpass').keyup(function(){
                var fpass=$('#fpass').val();
                var cfpass=$('#cfpass').val();
                if(cfpass!=fpass){
                    $('.error').html('Password not match');

                }
                else{
                    $('.error').html('')
                }
            })

            $('#changeemail').click(function(e){
                e.preventDefault();
                $('#femail').removeAttr('disabled');
                $('#validate').show();
                $('#fpass').attr('disabled','disabled');
                $('#cfpass').attr('disabled','disabled');

            })

            $('#changepass').click(function(e){
                e.preventDefault();
            var femail=$('#femail').val();
            var cpass1=$('#fpass').val();
            var cpass2=$('#cfpass').val();

            if(cpass1=='')
            {
                alert('password cant be empty');
            }
            else if(cpass2=='')
            {
                alert('confirm password is required');
            }
            else{
            //alert(cpass1);
                $.ajax({
                    url:'changepass.php',
                    type:'POST',
                    data:{email:femail,npass:cpass1,cnpass:cpass2},
                    success:function(data){
                        if(data=='1'){

                            $('#edanger-alert').show();
                            $("#edanger-alert").fadeTo(3000, 500).slideUp(500, function() {
                            $("#edanger-alert").slideUp(500);
                            });

                        }
                        else{

                            $('#esuccess-alert').show();
                            $("#esuccess-alert").fadeTo(3000, 500).slideUp(500, function() {
                            $("#esuccess-alert").slideUp(500);
                            $('#forgotform')[0].reset();
                            $('#femail').removeAttr('disabled');
                            $('#validate').show();
                            $('#changeemail').hide();
                            $('#fpass').attr("disabled", "disabled");
                            $('#cfpass').attr("disabled", "disabled");

                            });

                        }
                    }
                })
            }
            })

        });
    </script>
</body>

</html>