
<?php
include_once "Header.php";
?>
  <body>

      <div class="wrapper">
        <section class="form login">
          <header> Real Chat App</header>
          <form action="#" enctype="multipart/form-data" autocomplete="off">
            <div class="error-text"></div>
            <div class="name-details">
              <div class="field input ">
                <label >Email address</label>
                <input type="text" name ="email" placeholder="Enter your Email">

              </div>

              <div class="field input">
                <label >Password</label>
                <input type="password" name="pass" placeholder="Enter new password">
                <i class="fas fa-eye"></i>
              </div>
             
              <div class="field button"> 
              <input type="submit" value="continue to chat">
              </div>
              </div>
          </form>
          <div class="link">Not signed up ? <a href="index.php">signup now</a></div>
        
        </section>
</div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>
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