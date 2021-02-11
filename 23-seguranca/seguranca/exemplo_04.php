<html>

  <head>

    <title>reCAPTCHA demo: Simple page</title>

     <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  </head>

  <body>

    <form action="cadastrar.php" method="POST">

      <!-- essa div eh onde vai aparecer -->

      <div class="g-recaptcha" data-sitekey="6LdVP68ZAAAAABeQ5PSZX8ioWprBKJjmakU7Gqwp"></div>

      <br/>

      <input type="email" name="inputEmail">

      <button type="submit">Enviar</button>

    </form>

  </body>

</html>



 