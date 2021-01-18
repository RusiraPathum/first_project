<?php
include '../db.php';
$db = new db();
?>

<?php
if($_POST['id'] == "insert") {

    $errors = array();

    if(isset($_POST['submit'])){

    }

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $contact_number = $_POST['contact_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $query = "INSERT INTO user (first_name ,last_name ,contact_number ,email ,password ,confirm_password)
                VALUES ('$first_name', '$last_name', '$contact_number', '$email', '$password', '$confirm_password')";

    $db->IUD($query);
}
?>
<?php
if($_POST['id'] == "load"){
    $output = "";

    $output.= "
        <table class=\"table table-hover table-bordered\" >
        <thead class=\"thead-dark\">
        <tr>
            <th>User Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Contact Number</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
    
    ";



    $query = "SELECT * FROM user order by id";
    $rs = $db->Search($query);
    while($row = $rs->fetch(2)) {
        $id = $row['id'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $contact_number = $row['contact_number'];
        $email = $row['email'];
//        $password = $row['password'];
//        $confirm_password = $row['confirm_password'];

        $output.= "
            <p id='alert'></p>
            <tr>
                <td>$id</td>
                <td>$first_name</td>
                <td>$last_name</td>
                <td>$contact_number</td>
                <td>$email</td>
                <td class='text-center'><button onclick='getUserDetails($id)'  title='Update Record' class='btn btn-warning' data-target='#update_user' data-toggle='modal'><span><i class=\"fa fa-edit\"></i></span></button></td>

                <td class='text-center'><button onclick='delete_user($id)' class=\"btn btn-danger\"><span><i class=\"fa fa-trash-o\"></i></span></span></button></td>
            </tr>
        ";
    }

    $output.= "
        </tbody>
    </table>
    ";

    echo $output;
}

if($_POST['id'] == "delete"){

    $id = $_POST['idUser'];

    $query = "DELETE from user where id='$id'";

    $db->IUD($query);
}

if($_POST['id'] == "update"){

    $id = $_POST['idUser'];

    $update_first_name = $_POST['first_name'];
    $update_last_name = $_POST['last_name'];
    $update_contact_number = $_POST['contact_number'];
    $update_email = $_POST['email'];
    $update_password = $_POST['password'];
    $update_confirm_password = $_POST['confirm_password'];

    $query = "UPDATE `user` SET `id`='$id',`first_name`='$update_first_name',`last_name`= '$update_last_name',`contact_number`= '$update_contact_number',
                  `email`= '$update_email',`password`= '$update_password',`confirm_password`= '$update_confirm_password' WHERE id=$id";

    $db ->IUD($query);
}

if (isset($_POST['action']) && $_POST['action'] == 'login'){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user  WHERE email='$email' AND password='$password'";

    $row = mysqli_num_rows($query);

    if($row<=0){
        echo 0;
    }else{
        echo 1;
    }
}


http_response_code(200);
?>
