<html>
<head>
<title>insert</title>
</head>

<body>

<table border="1">
    <thead>
    <tr>
        <th>id</th>
        <th>nama</th>
        <th>role</th>
        <th>availability</th>
        <th>age</th>
        <th>location</th>
        <th>Year experience</th>
        <th>email</th>
    </tr>
    </thead>
    <tbody>
    <?php
    include "koneksi.php";

    $sql = "SELECT * FROM user";
    $res = $koneksi->query($sql);
    foreach($res as $r){
    ?>
        <tr>
            <td><?php echo $r['id']?></td>
            <td><?php echo $r['nama']?></td>
            <td><?php echo $r['role']?></td>
            <td><?php echo $r['availability']?></td>
            <td><?php echo $r['age']?></td>
            <td><?php echo $r['location']?></td>
            <td><?php echo $r['years_experience']?></td>
            <td><?php echo $r['email']?></td>
        </tr>
    <?php }?>
    </tbody>

</table>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <div>
            <label for="id">id</label>
            <input type="text" name="id">
        </div>
        <div>
            <label for="name">name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="role">role</label>
            <input type="text" name="role">
        </div>
        <div>
            <label for="ava">availability</label>
            <input type="text" name="ava">
        </div>                
        <div>
            <label for="age">age</label>
            <input type="text" name="age">
        </div>
        <div>
            <label for="location">location</label>
            <input type="text" name="location">
        </div>    
         <div>
            <label for="exp">year Experience</label>
            <input type="text" name="exp">
        </div> 
        <div>
            <label for="email">email</label>
            <input type="email" name="email">
        </div>

        <div>
            <button name="submit">Submit</button>
        </div>
                          
    </form>
</body>
</html>

<?php


if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $role = $_POST['role'];
    $ava = $_POST['ava'];
    $age= $_POST['age'];
    $l = $_POST['location'];
    $exp = $_POST['exp'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `user` 
    (`id`, `nama`, `role`, `availability`, `age`, `location`, `years_experience`, `email`) 
    VALUE (
        '".$id."',
        '".$name."',
        '".$role."',
        '".$ava."',
        '".$age."',
        '".$l."',
        '".$exp."',
        '".$email."'
        ) ";



    if($koneksi->query($sql) == true){
        echo "berhasil";
    }else{
        echo "gagal";
    }

}

?>