
<?php include_once "header.php"?>
  <body>

      <div class="wrapper">
   
        <section class="chat-area">
            <header>
            <?php
include_once "php/config.php";
$user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
if(mysqli_num_rows($sql) > 0){
  $row = mysqli_fetch_assoc($sql);
}
?>
                 
                <div class="content">
                <a href="users.php"> <i class="fas fa-arrow-left" style=""></i></a>
                <img src= "php/images/<?php echo $row['img']?> " alt="">
                <div class="details">
                <span><?php  echo $row['firstname']." ".$row['lastname'] ?></span>
                <p> <?php  echo $row['status'] ?> </p>
                </div>
         </div>
        
         </header>
   
         <div class="chat-box">
            
            </div>
         <form action="#" class="typing-area" autocomplete="off">
             <input type ="text" name ="outgoing_id" value =" <?php echo $_SESSION['unique_id']; ?>" hidden >
             <input type ="text" name ="incoming_id"value =" <?php echo $user_id; ?>" hidden>
             <input type="text" name ="message" class="input-field" placeholder="Enter your message here">
           <button><i class="fab fa-telegram-plane"></i></button>
         </form>
        </section>

      </div>
      <script src="javascript/chat.js"></script>
  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>