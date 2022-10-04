  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
  </head>

  <body>


      <form action="/thanks.php" method="POST">
          <div>
              <label for="nom">Nom :</label>
              <input type="text" id="nom" name="user_name">
          </div>
          <div>
              <label for="prenom">Prénom :</label>
              <input type="text" id="prenom" name="user_firstname">
          </div>
          <div>
              <label for="courriel">Courriel :</label>
              <input type="email" id="courriel" name="user_email">
          </div>
          <div>
              <label for="telephone">Téléphone :</label>
              <input type="telephone" id="telephone" name="user_phone">
          </div>
          <div> <label for="sujet">Sujet :</label>
              <select id=subject name="sujets">
                  <option value="Reclamation">Reclamation</option>
                  <option value="Avis">Avis </option>
                  <option value="Questions"> Questions </option>
                  <option value="SAV"> SAV </option>
              </select>

              <div>
                  <label for="message">Message :</label>
                  <textarea id="message" name="user_message"></textarea>
              </div>
              <div class="button">
                  <button type="submit">Envoyer votre message</button>
              </div>

          </div>
      </form>
  </body>

  </html>