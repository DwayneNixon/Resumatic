<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumatic</title>
    <link rel="stylesheet" href="../css pages/home.css">
</head>
<body>
 <main>   
<div class="header">
        <h2>Resumatic</h2>
    <nav class="nav-block">
        <!-- <a href=""class="nav-contents"><img src="images/resumatic - logo.png" alt="" class="img-logo" ></a> -->
        <a href="../php pages/home.php" class="nav-contents">Home</a>
        <a href="../php pages/resume.php" class="nav-contents">Create</a>
        <a href="" class="nav-contents">Resources</a>
        <a href="" class="nav-contents">Templates</a>
        <?php
    session_start();
    if (isset($_SESSION['user_id'])) {
        // User is logged in, show a logout button
        echo '<a href="../php pages/logout.php"><button class="nav-button">Logout</button></a>';
    } else {
        // User is not logged in, show a login button
        echo '<a href="../php pages/index.php"><button class="nav-button">Login</button></a>';
    }
    ?>
    </nav>
</div>

<section class="hero">
        <div class="row container">
          <div class="column">
            <h2>A quick and easy online Resume builder</h2>
            <p>Resumatic, the innovative online resume builder, beckons you to simply share your qualifications and personal details. In response, it crafts your professional journey into the latest and 
            most stylish resume templates, delivering an exceptional representation of your story.</p>
            <a href="../php pages/resume.php">
            <div class="button">
              <button class="btn">Start Creating</button>
            </div>
          </div>
          <div class="column">
            <img src="../images/resumatic.png" alt=" " class="logo-image" />
          </div>
        </div>
      </section>
      <!-- Hero End-->
    </main>
    <script>
      const header = document.querySelector("header");
      const menuToggler = document.querySelectorAll("#menu_toggle");
      menuToggler.forEach(toggler => {
        toggler.addEventListener("click", () => header.classList.toggle("showMenu"));
      });
    </script>
  </body>
</html>







