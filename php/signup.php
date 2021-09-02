 <?php
session_start();
include_once "config.php";
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = mysqli_real_escape_string($conn, $_POST['pass']);
 

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($pass)){

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $sql = mysqli_query($conn, "SELECT email FROM users WHERE email ='{$email}'");
        if(mysqli_num_rows($sql) > 0){
            echo "an email already exist";
        } else{

            if(isset($_FILES['image'])){
                $img_name = $_FILES['image']['name'];
                $tmp_name = $_FILES['image']['tmp_name'];

  
                $img_explode = explode('.', $img_name);
                $img_ext = end($img_explode);
 
                $extensions = ['png','jpeg','jpg'];
                if(in_array($img_ext, $extensions) === true){
                    $time = time();


                    $new_img_name = $time.$img_name;
                    if(move_uploaded_file($tmp_name, "images/".$new_img_name)){
                  $random_id = rand(time(), 10000000);
                  $status='active now';

                  $sql2 = mysqli_query($conn,"INSERT INTO `users`(`user_id`,`unique_id`,`firstname`,`lastname`,`email`,`password`,`img`,`status`) VALUES ( null,$random_id,'$fname','$lname','$email','$pass','$new_img_name','$status')");

                            if($sql2){
                                $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email ='{$email}'");
                                if(mysqli_num_rows($sql3) > 0){

                                $raw = mysqli_fetch_assoc($sql3);
                                $_SESSION['unique_id'] = $raw['unique_id'];
                                echo "success";

                                }

                            }
                            else{
                                echo " data are not inserted";
                            }
                }
                }
                else {
                    echo " select image in png jpeg jpg";
                }
            }
            else{
                echo "Please select image !!!";
            }
        }

    }// if email is valid
    else {
       echo "email does not valid"; 
    }
}// IF fields are not empty
else
{
    echo "All inputs are required!";
}

?> 