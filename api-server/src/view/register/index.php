<css><link rel="stylesheet" href="static/css/style-login.css"></css>
<!-- Register Form -->
<div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom">
            <h2 class="p-3">Inscription</h2>
          </div>
          <?php if($error): ?>         
            <div class="errors">
              <span class="alert alert-danger" ><?=$error?></span>
            </div>
          <?php endif; ?>            
          <div class="card-body">
            <form action="register" method="POST" >
                <div class="mb-4">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" id="nom" />
              </div>
              <div class="mb-4">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" class="form-control" name="prenom" id="prenom" />
              </div>              
              <div class="mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email" />
              </div>                              
              <div class="mb-4">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" name="password" id="password" />
              </div>
              <div class="d-grid">
                <button type="submit" class="btn text-light main-bg">Inscription</button>
              </div>
            </form>   
          </div>
        </div>
      </div>
    </div>
  </div>