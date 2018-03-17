<!DOCTYPE html>
<html>
  <head>
    <title>UNIADA 2018 | International Student Sports Competition</title>
    <link rel="shortcut icon" type="image/png" href="img/LOGO_BOJA.png"/>
    <link rel="apple-touch-icon" sizes="76x76" href="img/LOGO_BOJA.png">

    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"  content="International Student Sports Competition - UNIADA 2018 Belgrade Serbia, 22-25 October. Supported by the City of Belgrade." />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Uniada" />
    <meta property="og:description" content="International Student Sports Competition - UNIADA 2018 Belgrade Serbia, 22-25 October. Supported by the City of Belgrade." />
    <meta property="og:url" content="http://uniada.org/" />
    <meta property="og:site_name" content="UNIADA 2017" />
    <meta property="og:image" content="http://milica-pavlovic.com//uniada3.0/img/LOGO_BOJA.png" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="International Student Sports Competition - UNIADA 2018 Belgrade Serbia, 22-25 October. Supported by the City of Belgrade." />
    <meta name="twitter:title" content="Uniada" />
    <meta name="twitter:image" content="http://milica-pavlovic.com//uniada3.0/img/LOGO_BOJA.png" />

    <link rel="canonical" href="http://uniada.org/" />
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,800,900" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>
      <div class="counter"></div>
      <div class="content-holder">
          <div id="burger-container">
            <div id="burger">
              <span>&nbsp;</span>
              <span>&nbsp;</span>
              <span>&nbsp;</span>
              <span>&nbsp;</span>
            </div>
          </div>
          <nav class="navigation">
            <ul>
              <li id="changinglogo">
                <a href="index.php">
                  <img id="logo" src="img/LOGO_BOJA.png" alt="white-logo" />
                </a>
              </li>
              <li><a class="navigation__link inact" href="index.php#section1">HOME</a></li>
              <li><a class="navigation__link" href="index.php#section2">ABOUT</a></li>
              <li><a class="navigation__link sportact" href="index.php#section3">SPORTS</a></li>
              <li><a class="navigation__link" href="index.php#section4">E-SPORT</a></li>
              <li><a class="navigation__link" href="index.php#section5">APPLY</a></li>
              <li><a class="navigation__link" href="index.php#section6">CONTACT</a></li>
              <li><a class="volunteer" href="volunteer.php">VOLUNTEER</a></li>
            </ul>
          </nav>
          <div class="section">
            <section class="page-section volunteer" id="volunteer">
                <div class="about">
                      <form>
                          <input type="text" id="ime" name="ime" placeholder="Ime">
                          <input type="text" id="prezime" name="prezime" placeholder="Prezime">
                          <input type="text" id="zanimanje" name="zanimanje" placeholder="Zanimanje">

                          <input type="text" id="email" name="email" placeholder="Email">
                          <input type="tel" id="telefon" name="telefon" placeholder="Telefon">

                          <input type="checkbox" id="eng" name="eng" value="Engleski"> Poznavanje engleskog<br>
                          <input name="myFile" id="myFiel" type="file">

                          <button class="" onclick="return upis();">Pošalji</button><br><br>
                				   <div id="placefortable">
                					</div><br><br>
                    </form>
                    <img class="volunteerimg" src="img/BRINGITON.png" alt="bringiton">
                </div>
            </section>

        </div>

    </div>
    <script src="js\index-singlesport.js"></script>
    <script>
    function upis(){
        var ime = document.getElementById("ime").value;
        //var ime_slavljenik = document.getElementById("ime_slavljenik").value;
        var email =  document.getElementById("email").value;
        //var datum = $(".datum:checked").val();
        var pitanje =  document.getElementById("pitanje").value;



               var ind=0;
        if (ime===null || ime===''){
          document.getElementById("email_error").innerHTML = "Molimo vas popunite polje.";
          ind=1;
        }
                if (email===null || email===''){
          document.getElementById("telefon_error").innerHTML = "Molimo vas popunite polje.";
          ind=1;
        }
                if(pitanje===null || pitanje===''){
          document.getElementById("datum_ostavljanja_error").innerHTML = "Molimo vas popunite polje.";
          ind=1;
        }

                if(ind===1){
          return false;
          /*document.getElementById("email_error").innerHTML = email;
          document.getElementById("telefon_error").innerHTML = telefon;
          //var ime_slavljenik =  $("#ime_slavljenik:selected").val();
          document.getElementById("datum_ostavljanja_error").innerHTML = datum_ostavljanja;
          document.getElementById("vreme_dolaska_error").innerHTML = vreme_dolaska;
          document.getElementById("datum_preuzimanja_error").innerHTML = datum_preuzimanja;*/
          //window.location="./#potvrda";
        }
        else{
          var ime = document.getElementById("ime").value;
          //var ime_slavljenik = document.getElementById("ime_slavljenik").value;
          var email =  document.getElementById("email").value;
          //var datum = $(".datum:checked").val();
          var pitanje =  document.getElementById("pitanje").value;

          $.ajax({

            type:"post",
            url: "upis.php",
            cashe: false,
            //data: dataString,
            data: {ime:ime,email:email,pitanje:pitanje,captcha:grecaptcha.getResponse()},

            success: function(data){
              document.getElementById("placefortable").innerHTML = data;
             //window.location.href = "thankyou.php";
             /* window.alert(data);*/
              /*
              if(data == "Hvala na postavljenom pitanju. Očekujte odgovor u roku od 24h."){
               document.getElementById("kontaktfrmanone").style.display = "none";
               document.getElementById("placefortable").innerHTML = data;
               document.getElementById("placefortable").style.color = "#000000";
              }
              else{
                document.getElementById("placefortable").innerHTML = data;
                document.getElementById("placefortable").style.color = "#ed1a3b";
              }*/
            },
            error: function (req, status, err) {
              //alert(data),
          console.log('Something went wrong', status, err);
          }
          })
          return false;
        }

    }


    </script>

  </body>
</html>
