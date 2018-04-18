<!DOCTYPE html>
<html>
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-97863180-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-97863180-2');
    </script>

    <meta charset="UTF-8">
    <title>UNIADA 2018 | International Student Sports Competition</title>
    <link rel="shortcut icon" type="image/png" href="img/FAVICON.png"/>
    <link rel="apple-touch-icon" sizes="76x76" href="img/FAVICON.png">

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
    <script src='https://www.google.com/recaptcha/api.js?hl=en'></script>
  </head>
  <body>
      <div class="counter"></div>
      <div class="content-holder">
          <div id="burger-container">
            <div id="burger" class="volunteer">
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
              <li><a class="navigation__link " href="index.php#section3">SPORTS</a></li>
              <li><a class="navigation__link" href="index.php#section4">E-SPORT</a></li>
              <li><a class="navigation__link" href="index.php#section5">APPLY</a></li>
              <li><a class="navigation__link" href="index.php#section6">GALLERY</a></li>
              <li><a class="navigation__link" href="index.php#section7">CONTACT</a></li>
              <li><a class="volunteer sportact" href="volunteer.php">VOLUNTEER</a></li>
            </ul>
            <ul class="socialicons">
              <li><a href="https://www.facebook.com/UNIADAOFFICIAL/" target="_blank"><img src="img/if_06-facebook_104498.png" alt="fb" /></a></li>
              <li><a href="https://www.instagram.com/uniada" target="_blank"><img src="img/if_38-instagram_1161953.png" alt="instagram" /></a></li>
              <li><a href="https://www.youtube.com/channel/UCpx8Jz5rFhHx3GG0hYZI7lQ" target="_blank"><img src="img/if_18-youtube_104482.png" alt="youtube" /></a></li>
            </ul>
          </nav>
          <div class="section">
            <section class="page-section volunteer" id="volunteer">
                <div class="about">
                      <form>
                          <input type="text" id="ime" name="ime" placeholder="Ime" required onfocus="this.placeholder = ''">
                          <p id="volunteer_name_error"></p>
                          <input type="text" id="prezime" name="prezime" placeholder="Prezime" required onfocus="this.placeholder = ''">
                          <p id="volunteer_lastname_error"></p>
                          <select id="zanimanje" required>
                            <option value="student">Student</option>
                            <option value="srednjoskolac">Srednjoškolac</option>
                            <option value="zaposlen">Zaposlen</option>
                          </select>
                          <p id="volunteer_profession_error"></p>
                          <input type="email" id="email" name="email" placeholder="Email" required onfocus="this.placeholder = ''">
                          <p id="volunteer_email_error"></p>
                          <input type="tel" id="telefon" name="telefon" placeholder="Telefon" required onfocus="this.placeholder = ''">
                          <p id="volunteer_tel_error"></p>
                          <select id="sektor" required>
                            <option value="media">Media - foto, video, izveštavanje</option>
                            <option value="general">General - koordinacija i organizacija događaja</option>
                            <option value="esport">E-sport - administracija i koordinacija učesnika</option>
                          </select>
                          <p id="volunteer_sector_error"></p>
                          <select id="engleski" required>
                            <option value="osnovni">Znanje engleskog - Osnovni nivo</option>
                            <option value="srednji">Znanje engleskog - Srednji nivo</option>
                            <option value="napredni">Znanje engleskog - Napredni nivo</option>
                          </select>
                          <p id="volunteer_eng_error"></p>
                          <textarea rows="4" cols="50" placeholder="Describe yourself here..." id="cv" required onfocus="this.placeholder = ''"></textarea>
                          <p id="volunteer_cv_error"></p>
                          <div class="g-recaptcha" data-sitekey="6LdAJ00UAAAAAElof1s8xKLC5YCgR2ICHupC-ymf" data-callback="recaptchaCallback"></div>
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
        var prezime = document.getElementById("prezime").value;
        var zanimanje = document.getElementById("zanimanje");
        var zan = zanimanje.options[zanimanje.selectedIndex].value;
        var email =  document.getElementById("email").value;
        var telefon =  document.getElementById("telefon").value;

        var sektor = document.getElementById("sektor");
        var sek = sektor.options[sektor.selectedIndex].value;
        var engleski = document.getElementById("engleski");
        var eng = engleski.options[engleski.selectedIndex].value;

        var cv =  document.getElementById("cv").value;



               var ind=0;
        if (ime===null || ime===''){
          document.getElementById("volunteer_name_error").innerHTML = "Molimo vas popunite polje.";
          ind=1;
        }
                if (prezime===null || prezime===''){
          document.getElementById("volunteer_lastname_error").innerHTML = "Molimo vas popunite polje.";
          ind=1;
        }
                if(zan===null || zan===''){
          document.getElementById("volunteer_profession_error").innerHTML = "Molimo vas popunite polje.";
          ind=1;
        }

if(email===null || email===''){
document.getElementById("volunteer_email_error").innerHTML = "Molimo vas popunite polje.";
ind=1;
}
if(telefon===null || telefon===''){
document.getElementById("volunteer_tel_error").innerHTML = "Molimo vas popunite polje.";
ind=1;
}
if(sek===null || sek===''){
document.getElementById("volunteer_profession_error").innerHTML = "Molimo vas popunite polje.";
ind=1;
}
if(eng===null || eng===''){
document.getElementById("volunteer_eng_error").innerHTML = "Molimo vas popunite polje.";
ind=1;
}
if(cv===null || cv===''){
document.getElementById("volunteer_cv_error").innerHTML = "Molimo vas popunite polje.";
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
        /*  var ime = document.getElementById("ime").value;
          //var ime_slavljenik = document.getElementById("ime_slavljenik").value;
          var email =  document.getElementById("email").value;
          //var datum = $(".datum:checked").val();
          var pitanje =  document.getElementById("pitanje").value;
*/
          $.ajax({

            type:"post",
            url: "upis-voluteer.php",
            cashe: false,
            //data: dataString,

            data: {ime:ime,prezime:prezime,zan:zan,email:email,telefon:telefon,sek:sek,eng:eng,cv:cv,captcha:grecaptcha.getResponse()},

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

        }
        return false;
    }


    </script>

  </body>
</html>
