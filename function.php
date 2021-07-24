<?php
session_start();
//Koneksi Database 
$conn = mysqli_connect("localhost","root","","uaspweb");

// register

if(isset($_POST['register'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password=$_POST['password'];

    $insert = mysqli_query($conn,"INSERT INTO login (firstname,lastname,email,pasword) values ('$fname','$lname','$email','$password')");
    if($insert){
        header('location:login.php');
    }
    else{
        echo'
        <script>
            alert("Register gagal");
            window.location.href="register.php";
        </script> ';
    }
}

// contact
if(isset($_POST['submitcontact'])) {
    $nama_con = $_POST['nama'];
    $email_con = $_POST['email'];
    $pesan_con = $_POST['pesan'];

    $contact = mysqli_query($conn,"INSERT INTO contact (nama,email,pesan) values ('$nama_con','$email_con','$pesan_con')");

    if($contact){
        header('location:index.php');
    }
    else{
        echo'
        <script>
            alert("Register gagal");
            window.location.href="index.php";
        </script> ';
    }
}

?>