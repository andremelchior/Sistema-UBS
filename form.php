<?php
  include "header.php";
?>

<div style="display: flex; width: 70%; margin: auto; justify-content: center; align-items: center;">

  
  <form action="dashboard.php" method="POST" style="margin-top: 150px;">
          <h2>Login Paciente</h2>
          <div class="mb-3" style="margin-top: 50px;">
            <label for="exampleInputEmail1" class="form-label">CNS</label>
            <input w6 class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>

          <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>