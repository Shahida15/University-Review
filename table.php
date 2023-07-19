<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <link rel="stylesheet" href="form.css">
 
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">UniReview</a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Review</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="forum.html">Forum</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="material.php">Study Material</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="stories.php">Success Stories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Prospectues.html">Prospectues</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registration.php">Sign up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.html">Log in</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link disabled"
            >Disabled</a
          >
        </li> -->
      </ul>
    </div>
  </div>
</nav>
<script>
  
       
     
</script>

</head>
<body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card card-registration my-4">
                <div class="row g-0">
                  <div class="col-xl-6 d-none d-xl-block">
                    <img
                      src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                      alt="Sample photo"
                      class="img-fluid"
                      style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"
                    />
                  </div>
                  <div class="col-xl-6">
                    <div class="card-body p-md-5 text-black">
                      <h3 class="mb-5 text-uppercase">User registration form</h3>
                       <form action="connect.php" id="test" name = "myForm" method="post" onsubmit="validateForm()" class="row g-3 needs-validation" novalidate>
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" id="validationCustom01" class="form-control form-control-lg" name="firstname" required />
                            <label class="form-label" for="validationCustom01">First name</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" id="validationCustom02" class="form-control form-control-lg" name="lastname" required  />
                            <label class="form-label" for="validationCustom02" value="Mark">Last name</label>
                          </div>
                        </div>
                      </div>
      
                    
      
                      <div class="form-outline mb-4">
                        <input type="text" id="validationTextarea" class="form-control form-control-lg" name="address"  required/>
                        <label class="form-label" for="validationTextarea">Address</label>
                      </div>
      
                      <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
      
                        <h6 class="mb-0 me-4" >Gender: </h6>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input
                            class="form-check-input"
                            type="radio"
                            name="gender"
                            id="femaleGender"
                            value="option1"
                            
                          />
                          <label class="form-check-label" for="femaleGender">Female</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input
                            class="form-check-input"
                            type="radio"
                            name="gender"
                            id="maleGender"
                            value="option2"
                            
                          />
                          <label class="form-check-label" for="maleGender">Male</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0">
                          <input
                            class="form-check-input"
                            type="radio"
                            name="gender"
                            id="otherGender"
                            value="option3"
                          />
                          <label class="form-check-label" for="otherGender">Other</label>
                        </div>
      
                      </div>
      
                      <div class="row">
                        <div class="col-md-6 mb-4">state
      
                          <select class="select" required>
                            <option name="state" value="1">State</option>
                            <option  name="state" value="2">Dhaka</option>
                            <option  name="state" value="3">Option 2</option>
                            <option   name="state"value="4">Option 3</option>
                          </select>
      
                        </div>
                        <div class="col-md-6 mb-4">city
      
                          <select class="select" required>
                            <option  name="city" value="1">City</option>
                            <option  name="city" value="2">Dhaka</option>
                            <option  name="city" value="3">borishal</option>
                            <option  name="city" value="4">cumilla</option>
                          </select>
      
                        </div>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example9" class="form-control form-control-lg" name="dateofbirth" required />
                        <label class="form-label" for="form3Example9">DOB</label>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example90" class="form-control form-control-lg" name="email" required/>
                        <label class="form-label" for="form3Example90">Email id</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example99" class="form-control form-control-lg" name="password" required/>
                        <label class="form-label" for="form3Example99">password</label>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example99" class="form-control form-control-lg" name="number" required/>
                        <label class="form-label" for="form3Example99">number</label>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example97" class="form-control form-control-lg" name="StudentId" required />
                        <label class="form-label" for="form3Example97">Student ID</label>
                      </div>
                     
                       
      
                      <div class="d-flex justify-content-end pt-3">
                        <!-- <button type="button" class="btn btn-light btn-lg">Reset all</button>
                        <button  type="submit" class="btn btn-warning btn-lg ms-2" value="Submit">Submit form -->
                      </div>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <script>
        
        

  

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation');

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach((form) => {
    form.addEventListener('submit', (event) => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
  function validate(form) {
    var isChecked = Array.prototype.some.call(form.querySelectorAll('input[name=gender]'), function (radio) {
        return radio.checked;
    });

    if (!isChecked) {
        alert("You must select Male or Female or either");
    }

    return isChecked;
}

document.getElementById('test').addEventListener('submit', function (evt) {
    if (!validate(evt.target)) {
        evt.preventDefault();
    }
});


        </script>
        <input type="submit" value="Submit" >
      </form>
      
      
    
</body>
</html>