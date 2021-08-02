
<?php include('partials/loginheader.php') ?>
<!--

-->

              <form action="registation.php" method="post">

                     <div class="form-group">
                            <label for="fname"> Name :</label>
                            <input type="text" class="form-control" placeholder="Entre your First Name " name="name"
                                   required>
                     </div>
                     <div class="form-group">
                            <label for="username"> username :</label>
                            <input type="text" class="form-control" placeholder="username should be unique " name="username"
                                   required>
                     </div>

                     <div class="form-group">
                            <label for="lname">College name: </label>
                            <input type="text" class="form-control" id="" placeholder="Enter last name" name="colname"
                                   required>
                     </div>
                     <div class="form-group">
                            <label for="lname">Branch :</label>
                            <input type="text" class="form-control" id="" placeholder="Ex- ECE" name="branch" required>
                     </div>

                     <div class="form-group">
                            <label for="email">Email:</label> <br>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="emal"
                                   required>
                     </div>
                     <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password"
                                   name="passord" required>
                     </div>

                     <div class="form-group">
                            <label for="pwd">Conform Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="re-Enter your password"
                                   name="pass" required>
                     </div>

                     <br>
                     <div class="middle">
                            <input type="reset" value="reset">
                            <button type="submit" class="btn btn-primary" value="submit"> <strong>
                                          Signup</strong></button>

                            <a href="loggin.php"> singin</a>
                     </div>


              </form>










       </div>

</body>

</html>