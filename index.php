
<?php include_once "header.php"; ?>
  <body>

      <div class="wrapper">
        <section class="form signup">
          <header> Real Chat App</header>
          <form action="#" enctype="multipart/form-data" autocomplete="off">
            <div class="error-text"></div>
            <div class="name-details">
              <div class="field input ">
                <label >First name</label>
                <input type="text" name ="fname" placeholder="First name" required>

              </div>
              <div class="field input">
                <label >Last name</label>
                <input type="text" name ="lname" placeholder="Last name" required>

              </div>
              <div class="field input">
                <label >Email</label>
                <input type="email" name ="email" placeholder="Enter your Email" required>

              </div>
              <div class="field input">
                <label>Password</label>
                <input type="password" name = " pass" placeholder="Enter new password" required>
                <i class="fas fa-eye"></i>
              </div>
              <div class="field Image">
                <label >Selet Image</label>
                <input type="file" name="image" required>

              </div>
              <div class="field button"> 
              <input type="submit" value="continue to chat">
              </div>
          </form>
          <div class="link">Already signed up ? <a href="login.php">Login now</a></div>
        </section>
      </div>
  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>