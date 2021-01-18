$(document).on('click','#show_data',function(e){
load();

});

function load(){
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
}

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

                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Your work has been saved',
                    showConfirmButton: false,
                    timer: 1500
                })
                $("#myModal").hide();


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
                // window.location.reload();
                load();
            },
            error : function(request,error)
            {
                alert("Request: "+JSON.stringify(request));
            }
        })
    }
}

// get data to getUserDetails function
// set recived data to modal
// show modal
// make changes to data
// create a click event to modal update button
// collect new data within that click event
// send collected data through AJAX
// execute mysql query in backend file

function getUserDetails(id, first_name, last_name, contact_number, email, password, confirm_password){
    // alert("hello");

    $("#update_user").show();

    document.getElementById('update_id').value=id
    document.getElementById('update_first_name').value=first_name;
    document.getElementById('update_last_name').value=last_name;
    document.getElementById('update_contact_number').value=contact_number;
    document.getElementById('update_email').value=email;
    document.getElementById('update_password').value=password;
    document.getElementById('update_confirm_password').value=confirm_password;

}

$( "#updateUser" ).click(function() {
    var update_id =document.getElementById('update_id')
    var update_first_name = document.getElementById('update_first_name').value;
    var update_last_name = document.getElementById('update_last_name').value;
    var update_contact_number = document.getElementById('update_contact_number').value;
    var update_email = document.getElementById('update_email').value;
    var update_password = document.getElementById('update_password').value;
    var update_confirm_password = document.getElementById('update_confirm_password').value;

    var id = "update";
    var dt ={
        id:id,
        update_id:update_id,
        update_first_name: update_first_name,
        update_last_name: update_last_name,
        update_contact_number: update_contact_number,
        update_email: update_email,
        update_password: update_password,
        update_confirm_password: update_confirm_password
    }
    // alert(JSON.stringify(dt));
    alert( dt );

    $.ajax({
        url:'../php/backend.php',
        method:'post',
        data:dt,
        success:function (msg){
            alert(msg);
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
            })
        },
        error : function(request,error)
        {
            alert("Request: "+JSON.stringify(request));
        }
    })

});



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

