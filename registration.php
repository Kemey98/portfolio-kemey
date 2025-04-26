
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       
    </head>
    <body>

<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center gradient-custom-3">
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px; margin-top:35px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action="submit.php" method="post">

              <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form3Example1cg">User ID</label>  
                <input type="text" id="form3Example1cg" name="id" class="form-control form-control-lg" />
                  
                </div>  
              
              <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form3Example1cg">Your Name</label>  
                <input type="text" id="form3Example1cg" name="name" class="form-control form-control-lg" />
                  
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form3Example4cdg">Age</label>  
                <input type="number" name="age" id="form3Example4cdg" class="form-control form-control-lg" />
                 
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form3Example3cg">Your Email</label> 
                <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" />
                  
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form3Example4cdg">Phone Number</label>  
                
                <input type="tel" name="pnum" placeholder="0148251292" id="pnum" maxlength="11" id="form3Example4cdg" class="form-control form-control-lg" required>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form3Example4cg">Password</label>  
                <input type="password" name="pass" id="form3Example4cg" class="form-control form-control-lg" />
                  
                </div>

                <input type="submit" name="register"  class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" value="REGISTER" href="#"> 

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="loginone.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<script>
document.getElementById('pnum').addEventListener('input', function () {
  this.value = this.value.replace(/\D/g, '');
});
</script>
</body>
</html>