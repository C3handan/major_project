<?php include('partials/loginheader.php') ?>
<!--



-->
    <form action="validation.php" method="post">

      <div class="form-group">



        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control"  placeholder="Enter username" name="username" required>
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="passord" required>
         
        </div>

        <br>
        <div class="middle">
          <button type="submit" class="btn btn-primary" value="submit">sing in</button>

          <a href="siggnup.php">
            <h6>New user ..? </h6>
          </a>


        </div>

       
    </form>










  </div>

</body>

</html>
