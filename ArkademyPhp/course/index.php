<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" >
    <link redel="stylesheet" href="http://localhost/arkademyPHp/course/assets/css/master.css">
  </head>
  <body>

      <nav>
        <div class="mobile">
            <a onclick="showMenu()" href="#">Menu</a>
        </div>
        <ul id="menu">
          <li><a href="#">Home</a></li>
          <li><a href="#">Product</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="#">News</a></li>
          <li><a href="#">My Inventory</a></li>
        </ul>
      </nav>

    <?php
    include "koneksi.php";

    $sql = "SELECT * FROM user";
    $res = $koneksi->query($sql);
    foreach($res as $r){
    ?>

  <section class="card" id="box-profile">

      <div class="img-profile">
        <div class="thumb" style="background-image:urL('http://localhost/arkademyPHp/course/assets/img/profile.jpg');"></div>
      </div>

      <div class="description">
        <h1 id="pName"><?php echo $r['nama']?></h1>
        <p id="pRole"><?php echo $r['role']?></p>
        <a href="#input-form" class="btn bg-green" onclick="editData()">Edit</a>
        <a href="#" class="btn border-blue">Resume</a>
      </div>


    <div class="information">
      <div class="data">
        <p class="field"><b>Availability</b></p>
        <p id="pAva" class="text-gray"><?php echo $r['availability']?></p>
      </div>

      <div class="data">
        <p class="field"><b>Age</b></p>
        <p id="pAge" class="text-gray"><?php echo $r['age']?></p>
      </div>

      <div class="data">
        <p class="field"><b>Location</b></p>
        <p id="pLocation" class="text-gray"><?php echo $r['location']?></p>
      </div>

      <div class="data">
        <p class="field"><b>Year Experience</b></p>
        <p id="pExp" class="text-gray"><?php echo $r['years_experience']?></p>
      </div>

      <div class="data">
        <p class="field"><b>Email</b></p>
        <p id="pEmail" class="text-gray"><?php echo $r['email']?></p>
      </div>
    </div>

</section>

    <?php }?>

    <section class="card" id="input-form">
      <!-- <form action="01.html" method="post"> -->
        <div class="form-group">
          <label for="name">Name</label>
          <input id="inputName" type="text" name="name">
        </div>

        <div class="form-group">
          <label for="role">Role</label>
          <input id="inputRole" type="text" name="role">
        </div>

        <div class="form-group">
          <label for="Availability">Availability</label>
          <input id="inputAva" type="text" name="Availability">
        </div>

        <div class="form-group">
          <label for="age">Age</label>
          <input id="inputAge" type="text" name="age">
        </div>

        <div class="form-group">
          <label for="Location">Location</label>
          <input id="inputLocation" type="text" name="Location">
        </div>

        <div class="form-group">
          <label for="exp">Experience</label>
          <input id="inputExp" type="text" name="exp">
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input id="inputEmail" type="email" name="email">
        </div>

        <div class="form-group">
          <input id="submitBtn" onclick="saveData()" type="submit" name="submit" class="btn bg-green">
        </div>
      <!-- </form> -->
    </section>

</div>

<script>

// // global variable

  var inputForm = document.getElementById("input-form");
  inputForm.style.display= "none";

    function editData() {
      if (inputForm.style.display === "none") {
        inputForm.style.display = "block";
      } else {
        inputForm.style.display = "none";
      }

      // Displayed data
      var disName = document.getElementById("pName").innerHTML;
      var disRole = document.getElementById("pRole").innerHTML;
      var disAva = document.getElementById("pAva").innerHTML;
      var disAge = document.getElementById("pAge").innerHTML;
      var disLocation = document.getElementById("pLocation").innerHTML;
      var disExp = document.getElementById("pExp").innerHTML;
      var disEmail = document.getElementById("pEmail").innerHTML;


      // inputed data

      document.getElementById("inputName").value = disName;
      document.getElementById("inputRole").value = disRole;
      document.getElementById("inputAva").value = disAva;
      document.getElementById("inputAge").value = disAge;
      document.getElementById("inputLocation").value = disLocation;
      document.getElementById("inputExp").value = disExp;
      document.getElementById("inputEmail").value = disEmail;
      // inputed data

    }

    function saveData(){
      inputForm.style.display = "none";

            // inputed data
      var name = document.getElementById("inputName").value;
      var role = document.getElementById("inputRole").value;
      var ava = document.getElementById("inputAva").value;
      var age = document.getElementById("inputAge").value;
      var location = document.getElementById("inputLocation").value;
      var exp = document.getElementById("inputExp").value;
      var email = document.getElementById("inputEmail").value;

      // inputed data

      document.getElementById("pName").innerHTML = name;
      document.getElementById("pRole").innerHTML = role;
      document.getElementById("pAva").innerHTML = ava;
      document.getElementById("pAge").innerHTML = age;
      document.getElementById("pLocation").innerHTML = location;
      document.getElementById("pExp").innerHTML = exp;
      document.getElementById("pEmail").innerHTML = email;

    }


  function showMenu() {
    var menu = document.getElementById("menu");
    var box = document.getElementById("box-profile");

    if(menu.style.display === "block"){
      menu.style.display = "none";
      box.style.paddingTop = "0px"; 
    }else{
      menu.style.display = "block";
      box.style.paddingTop = "125px";
    }
  }






  
</script>

  </body>
</html>
