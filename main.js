$("#show_hide_password a").on('click', function (event) {
  event.preventDefault();
  if ($('#show_hide_password input').attr("type") == "text") {
      $('#show_hide_password input').attr('type', 'password');
      $('#show_hide_password i').addClass("fa-eye-slash");
      $('#show_hide_password i').removeClass("fa-eye");
  } else if ($('#show_hide_password input').attr("type") == "password") {
      $('#show_hide_password input').attr('type', 'text');
      $('#show_hide_password i').removeClass("fa-eye-slash");
      $('#show_hide_password i').addClass("fa-eye");
  }
});
$("#show_hide_password_cpass a").on('click', function (event) {
  event.preventDefault();
  if ($('#show_hide_password_cpass input').attr("type") == "text") {
      $('#show_hide_password_cpass input').attr('type', 'password');
      $('#show_hide_password_cpass i').addClass("fa-eye-slash");
      $('#show_hide_password_cpass i').removeClass("fa-eye");
  } else if ($('#show_hide_password_cpass input').attr("type") == "password") {
      $('#show_hide_password_cpass input').attr('type', 'text');
      $('#show_hide_password_cpass i').removeClass("fa-eye-slash");
      $('#show_hide_password_cpass i').addClass("fa-eye");
  }
});


$(document).ready(function(){
  $('#login').submit(function(e){
    e.preventDefault();
    $('.loginresult').html('');
    var d = {
        un : $('.uname').val(),
        pass : $('.upass').val()
    }
    console.log(d);
    $.ajax({
        url  : 'actions/php/login.php',
        type    : 'POST',
        dataType: 'json',
        data    : d,
        success : function(res){
            if (res.total > 0){
                $(document).ready(function(){
                    $('.loginresult').append('<div class="alert alert-success text-success">User granted!</div>');   
                    window.location.href = "/ecomerce/";
                })
            }else{
                $(document).ready(function(){
                    $('.loginresult').append('<div class="alert alert-danger text-success">User name or password incorrect!</div>');
                })
            }
        }, error  : function(e){console.log(e);}
        });
  });

  $("#register").submit(function(e) {
      e.preventDefault();
      var data = {
          uname:$(".uname").val(),
          pass:$(".upass").val(),
          cpass:$(".cpass").val(),
          fullname : $(".fullname").val(),
          number:$(".number").val(),
          email:$(".email").val(),
          body: "Hi " + $(".fullname").val() + ", Please click this link to activate your account <a href='" + window.location.origin + "/ecomerce/actions/php/activateaccount.php?id=id_no'>activate my account</a>",
          subject : "Activation Link"
      }

      if (data.pass != data.cpass){
          swal("Mismatch password","please confirm the password","warning");
          $(".cpass").focus();
      }else{
          $.ajax({
              url  : 'actions/php/register.php',
              type  : 'POST',
              dataType: 'text',
              data    : data,
              success : function(res){
                  res = res.replace(/(\r\n|\n|\r)/gm, "");
                  if (res == "success"){
                      $(".uname").val();
                      $(".upass").val();
                      $(".cpass").val();
                      $(".fullname").val();
                      $(".number").val();
                      $(".email").val();
                      swal({
                        title: "Registered successfull!",
                        text: "Please go to your email to check the activation link!",
                        type: "success",
                        showCancelButton: false,
                        confirmButtonColor: "#3390b9",
                        confirmButtonText: "Login",
                        cancelButtonText: "No",
                      }).then((isConfirm) => {
                          if (isConfirm) {
                              window.location.href = "login.php";
                          }
                      });
                  }else if (res == "exists"){
                      swal("Username exists","username already exists","warning");
                  }else{
                      swal("Error",res,"error");
                  }
              }, error  : function(res){
                  console.log("error: ", res)
              }
          });
      }
  });

  $("#proceedchange").submit(function(e){
    e.preventDefault();
    var date = moment(); //Get the current date
    var code = date.format("DDHHMS"); //2014-07-10
    var data = {
      subject: "Forget Password",
      email:$(".email").val(),
      body: "Hi please use this code to change change your password <b>" + code + "</b>" 
    }
    if ($(".cpass").val() !== $(".npass").val()){
       swal("Mismatch Password", "please confirm a password!", "warning");
    }else{
      $.ajax({
        url  : 'actions/php/sendemail.php',
        type    : 'POST',
        dataType: 'text',
        data    : data,
        success : function(res){
          if (res == 'success'){
            $("#proceedchange").hide();
            $("#confirmchange").show();
          }else{
            swal("Oops!", "Internet problems!", "error");
          }
        }, error  : function(e){
          swal("Oops!", "Internet problems!", "error");
        }
      });
    }
  })

  $("#confirmchange").submit(function(e){
    e.preventDefault();
    var data = {
      pass:$(".npass").val(),
      email:$(".email").val()
    }
    $.ajax({
      url  : 'actions/php/changepassword.php',
      type    : 'POST',
      dataType: 'text',
      data    : data,
      success : function(res){
        console.log(res);
        if (res == "success"){
          swal({
            title: "Password changed successfully!",
            text: "your password successfully updated!",
            type: "success",
            showCancelButton: false,
            confirmButtonColor: "#3390b9",
            confirmButtonText: "Login",
            cancelButtonText: "No",
          }).then((isConfirm) => {
              if (isConfirm) {
                  window.location.href = "login.php";
              }
          });
        }else{
          swal("Oops!", "Internet problems!", "error");
        }
      }, error  : function(e){
        console.log(e);
        swal("Oops!", "Internet problems!", "error");
      }
    });
    
  })

  $("#show_hide_password_code a").on('click', function (event) {
    event.preventDefault();
      if ($('#show_hide_password_code input').attr("type") == "text") {
          $('#show_hide_password_code input').attr('type', 'password');
          $('#show_hide_password_code i').addClass("fa-eye-slash");
          $('#show_hide_password_code i').removeClass("fa-eye");
      } else if ($('#show_hide_password_code input').attr("type") == "password") {
          $('#show_hide_password_code input').attr('type', 'text');
          $('#show_hide_password_code i').removeClass("fa-eye-slash");
          $('#show_hide_password_code i').addClass("fa-eye");
      }
  });

  $("#show_hide_password_new a").on('click', function (event) {
      event.preventDefault();
      if ($('#show_hide_password_new input').attr("type") == "text") {
          $('#show_hide_password_new input').attr('type', 'password');
          $('#show_hide_password_new i').addClass("fa-eye-slash");
          $('#show_hide_password_new i').removeClass("fa-eye");
      } else if ($('#show_hide_password_new input').attr("type") == "password") {
          $('#show_hide_password_new input').attr('type', 'text');
          $('#show_hide_password_new i').removeClass("fa-eye-slash");
          $('#show_hide_password_new i').addClass("fa-eye");
      }
  });

  $("#show_hide_password_cpassf a").on('click', function (event) {
      event.preventDefault();
      if ($('#show_hide_password_cpassf input').attr("type") == "text") {
          $('#show_hide_password_cpassf input').attr('type', 'password');
          $('#show_hide_password_cpassf i').addClass("fa-eye-slash");
          $('#show_hide_password_cpassf i').removeClass("fa-eye");
      } else if ($('#show_hide_password_cpassf input').attr("type") == "password") {
          $('#show_hide_password_cpassf input').attr('type', 'text');
          $('#show_hide_password_cpassf i').removeClass("fa-eye-slash");
          $('#show_hide_password_cpassf i').addClass("fa-eye");
      }
  });

})