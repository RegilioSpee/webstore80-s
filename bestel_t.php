<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="css/stijl.css">
      <title></title>
   </head>
   <body>
      <?php require 'nav.php'; ?>
      <main>
         <div class="info">
            <label>
               <h1 class="titel">UW BESTELLING EN AANPASSINGEN.</h1
               <br>
               <input type = "text" name="tekst" placeholder="vul uw custom tekst in" required="verplicht" autofocus />
            </label>
            <label>
            <br>
            <label>
               <h1 class="aanpassingen">UW MAAT</h1>
               <br>
               <select name="SIZE" >
                  <option value="selecteer uw maat"  required="verplicht" selected>selecteer uw maat</option>
                  <option value="MG1A">S</option>
                  <option value="MG1B">M</option>
                  <option value="MG1C">L</option>
                  <option value="MG1D">XL</option>
               </select>
            </label>
            <div class="kleur">
               <h1>SELECT DE KLEUR</h1>
               <button class="een" id="grijs"></button>
               <button class="twee" id="geel"></button>
               <button class="drie" id="groen"></button>
               <button class="vier" id="rood"></button>
            </div>

            <div>
            <a href="http://localhost/tpr/bedankt.php"><button class="bestel">Ga Door</button></a>
            </div>

         </div>
         <div class="foto">
            <img class="grijst" id="shirt" src="img/turtle/grijst.png" height="400px" width="360px" alt="grijs shirt met ronde nek"></img>
            <p>op voorraad</p>
         </div>
      </main>
      <br> <br> <br> <br>
      <footer class="voet">
         <p>Contact us</p>
         <div class="zwart">
            <p>test</p>
         </div>
      </footer>

      <script src="script/scriptt.js"></script>
   </body>
</html>