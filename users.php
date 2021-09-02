<?php
session_start();
if(!isset($_SESSION['unique_id'])){
  header("location: login.php ");
}
?>

<?php include_once "header.php" ; ?>
<body>
  <div class="container-fluid">
    <div class="row">
        <div class="col-4 ">
          <!-- users -->
          <div class="wrapper">
            <section class="users">
            <header>
    <?php
    include_once "php/config.php";
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
    if(mysqli_num_rows($sql) > 0){
      $row = mysqli_fetch_assoc($sql);
    }
    ?>
          <div class="content">
          <img src= "php/images/<?php echo $row['img']?> " alt="">
          <div class="details">
          <span><?php  echo $row['firstname']." ".$row['lastname'] ?></span>
                <p> <?php  echo $row['status'] ?></p>
                </div>
                </div>
              <a href="php/logout.php?logout_id=<?php echo $row['unique_id'] ?>" class="logout">Logout</a>
              </header>
            <div class="search">
            <span  class="text">select user start to chat</span>
            <input type="text" placeholder="Enter name to search ......">
            <button> <i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">

            </div>
            </section>

          </div>


        </div>




        <div class="col-8 mr-1">
          <!-- chat -->
        <?php  
require_once("chat.php");
         
      ?>    
        </div>
        
    </div>
  </div>


<script src="javascript/chat.js"></script>

  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>