$(document).on('click','#show_data',function(e){

    var id = "load";

    $.ajax({
        url: "./php/backend.php",
        type: "POST",
        cache: false,
        data: {id:id},
        success: function(data){

            $('#table').html(data);
        },
        error : function(request,error)
        {
            alert("Request: "+JSON.stringify(request));
        }
    });
});

function check(){

    var first_name = document.getElementById('first_name').value;
    var last_name = document.getElementById('last_name').value;
    var contact_number = document.getElementById('contact_number').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirm_password = document.getElementById('confirm_password').value;

    function checkPasswordMatch() {
        var password = $("#password").val();
        var confirmPassword = $("#confirm_password").val();
        if (password != confirmPassword)
            $("#CheckPasswordMatch").html("Passwords does not match!");
        else
            $("#CheckPasswordMatch").html("Passwords match.");
    }
    $(document).ready(function () {
        $("#txtConfirmPassword").keyup(checkPasswordMatch);
    });

    var id = "insert";
    var dt ={
        id:id,
        first_name: first_name,
        last_name: last_name,
        contact_number: contact_number,
        email: email,
        password: password,
        confirm_password: confirm_password
    }
    // alert(JSON.stringify(dt));

    if (first_name!= "" && last_name!= "" && contact_number!= "" && email!= "", password!="", confirm_password!=""){
        $.ajax({
            url: './php/backend.php',
            method: 'POST',
            data: dt,
            success: function (msg) {

                swal({
                    icon: "successful",
                });


            },
            error : function(request,error)
            {
                alert("Request: "+JSON.stringify(request));
            }
        });
    }else
        alert('Please Fill All The Field');
}

function delete_user(idUser){

    var conf = confirm("Are you sure");
    var id = "delete";
    if (conf == true){
        $.ajax({
            url: './php/backend.php',
            type: 'post',
            data: {id:id, idUser: idUser},
            success:function (data,status){
                // alert(data);
                $('#alert').html("<p>Delete Successfully!</p>");
                window.location.reload();
            }
        })
    }
}

function getUserDetails(idUser){
    $('#hidden_user_id').val(idUser);

    var id = "update";

    $.ajax(
        "./php/backend.php")
}



$(document).ready(function (){
    $('#login').click(function() {
        var email = $('#email').val();
        var password = $('#password').val();

        if ($.trim(email).length > 0 && $.trim(password).length >0 ){

            $.ajax({
                url: './php/backend.php',
                method: 'POST',
                data: {email:email, password:password},
                cache: false,
                success: function (msg){
                    if (msg == 0){
                        result.html('<span class="error">Incorrect Email or Password</span>');
                    }else if (msg == 1){
                        window.location="register.php";
                    }else{
                        alert('Error in sql query');
                    }
               }
            });
        }
        return false;
    });
});

