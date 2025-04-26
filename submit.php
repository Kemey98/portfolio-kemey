<?php
// Connect to MySQL
$con = mysqli_connect("localhost", "root", "", "phplogin");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['pnum'];
    $password = password_hash($_POST['pass'], PASSWORD_DEFAULT); // untuk security

    // Check if user already exists
    $check_sql = "SELECT * FROM phplogin WHERE id = ? OR email = ?";
    $stmt = mysqli_prepare($con, $check_sql);
    mysqli_stmt_bind_param($stmt, "ss", $id, $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) > 0){
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          User already registered.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          
        </div>
        <script>
  // Delay redirect for 5 seconds
  setTimeout(function() {
    window.location.href = "loginone.php";
  }, 5000);
</script>
        ';
    } else {

    $sql = "INSERT INTO phplogin (id,name,age,email, phone, password) VALUES (?, ?, ?, ?,?,?)";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "ssisss",$id, $name, $age, $email, $phone, $password);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_affected_rows($stmt)) 
    {
        echo "<script type='text/javascript'> 
        alert('login success');
        window.location.href = 'loginone.php';
        </script>";
    } else {
        echo "Pendaftaran gagal.";
    }
}
}
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </head>
    <body>
</body>
</html>

