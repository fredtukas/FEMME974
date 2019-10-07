<div class="bg-blanc">

<h2 class="text-center" style="color:#c10000;">Contact</h2>

<form action="send.php" method="post">
  
  <div class="row">
    <div class="col m-2">
      <input type="text" class="form-control" name="nom" placeholder="Nom">
    </div>
    <div class="col m-2">
      <input type="text" class="form-control" name="prenom" placeholder="Prenom">
    </div>
  </div>
  <div class="form-group m-2">
    <label for="exampleInputEmail1"></label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Votre email">
  </div>

  <div class="form-group m-2">
    <label for="exampleFormControlTextarea1"></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" placeholder="Votre message"></textarea>
  </div>

  <p class="text-center"><button type="submit" name="submit" class="btn btn-red">Envoyer</button></p>
</form>

</div>

