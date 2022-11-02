
<?php include('views/header.php');
      include_once("../includes/variables.php"); ?>

<!-- HEADER -->


      <main>
        <div class="row">
          <div class="col-sm-2" id="services"></a>Контакты</div>

          <div class="col-sm-9 col-sm-offset-1">            
            <div class="row contacts" id="UNP">
              <div class="col-sm-5">
              ИП Пышный Денис Игоревич<br>  
              УНП790836120<br>
              <br>
              Минск, пр-т Независимости, 139
              <br>
              <br>
              <strong>Телефон/Viber: <a href="tel:+375292508209">+375 (29) 250-82-09</a> <br></strong>
              <br>
              
              E-mail: pyshnyj@tut.by
              </div>
              <div class="col-sm-7 center-block img-responsive" id="map"></div>

            </div>
            <div class="row contacts">
              <div class="col-sm-12" style="padding-bottom: 10px; border-bottom: 2px solid #2BC3A7;"> Оставить заявку или написать письмо</div>
            </div>
            <div class="row" style="margin-top: 17px; font-size: 16px;">
              <div class="col-sm-4" style="margin-bottom: 10px;">Вы можете оставить заявку или связаться со мной, просто заполнив следующую форму. Укажите удобное для вас время и телефон я вам обязательно перезвоню</div>
              <div class="col-sm-8">
                <div class="row">
                  
                  <form action="contacts.php" method="post">
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-12" style="padding: 0 5px;"><input class="form-control input" style="margin-bottom: 10px;" type="text" name="name" placeholder="Имя" required="required"></div>
                        <div class="col-sm-12" style="padding: 0 5px;"><input class="form-control input" style="margin-bottom: 10px;" type="text" name="email" placeholder="Email" required="required"></div>
                        <div class="col-sm-12">
                          
  <?php                         
    
     // Variables
    @$name = trim($_POST['name']);
    @$email = trim($_POST['email']);
    @$message = trim($_POST['message']);
    
    // Email address validation - works with php 5.2+
  
    function is_email_valid($email) {
      return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    if (isset($_POST["submit"]) && !is_email_valid(($email))) {

      echo "<p style=\"color:#1B7F6D;\">Пожалуйста, введите действительный email</p>";
     
    } elseif (isset($_POST["submit"]) && is_email_valid($email) && !isset($name)) {
      
      echo "Пожалуйста, введите ваше имя";
    
    } elseif (isset($_POST["submit"]) && is_email_valid($email) && isset($name) && !isset($message)) {

      echo "Пожалуйста, введите ваше сообщение";

    } elseif (isset($_POST["submit"]) && is_email_valid($email) && isset($name) && isset($message)) {
     
      // Avoid Email Injection and Mail Form Script Hijacking
        $pattern = "/(content-type|bcc:|cc:|to:)/i";
        if( preg_match($pattern, $name) || preg_match($pattern, $email) || preg_match($pattern, $message)) {
          exit;
        }
        
          // Email will be send
        $to = "pyshnyj@tut.by";  // Change with your email address
        $subject = "From domsosvetom.by"; // If you want a default subject

        // HTML Elements for Email Body
        $body = <<<EOD
        <strong>Имя:</strong> $name <br>
        <strong>Email:</strong> $email <br> <br>
        <strong>Сообщение:</strong> $message <br>
EOD;
          //Must end on first column
        
        $headers = "From: $name <$email>\r\n";
        $headers .= 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // PHP email sender
        mail($to, $subject, $body, $headers);
        
        echo "<p style=\"color:#1B7F6D;\">Ваше сообщение успешно отправлено!</p>";

    }
  
  ?>

                        </div>
                      </div>                        
                    </div>                    
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-12" style="padding: 0 5px;">
                          <textarea class="form-control input" style="resize: none; height: 78px;" rows="3" name="message" placeholder="Сообщение" required="required"></textarea>
                        </div>
                        <div class="col-sm-12 text-right">
                          <button class="form_submission" type="submit" name="submit">Отправить</button>
                        </div>
                      </div>                        
                    </div>                    
                  </form>
                  
                </div>
              </div>
            </div>
          </div>

        </div>

      </main>

      <footer>
        <div class="row">
          <div class="col-sm-3 col-sm-offset-9 text-right">ИП Денис Игоревич Пышный <br>
                                                УНП 790836120 <br>
                                                Тел.: <a href="tel:+375292508209">+375 (29) 250-82-09</a>
          </div>
          <div class="col-sm-12 text-center" style="margin-top: 20px;"><i>Copyright © Балабушко Д. А. </i><!--LiveInternet counter--><script type="text/javascript">
                                                                                                            document.write("<a href='//www.liveinternet.ru/click' "+
                                                                                                            "target=_blank><img src='//counter.yadro.ru/hit?t44.3;r"+
                                                                                                            escape(document.referrer)+((typeof(screen)=="undefined")?"":
                                                                                                            ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
                                                                                                            screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
                                                                                                            ";h"+escape(document.title.substring(0,150))+";"+Math.random()+
                                                                                                            "' alt='' title='LiveInternet' "+
                                                                                                            "border='0' width='31' height='31'><\/a>")
                                                                                                            </script><!--/LiveInternet-->
          </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <i><small>По вопросам приобритения сайтов: </small> +37529-5541261</i>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <i>Email: balabushko@lenta.ru</i>
            </div>
        </div>
      </footer>

    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    
    <script>
      function initMap() {
        var uluru = {lat: 53.904708, lng: 27.561613};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMln49KOHeBR_-0j-xJcec33-N4tYGU60&callback=initMap">
    </script>

    <script src="js/active_item.js"></script>
    <script src="js/menu.js"></script>
  </body>
</html>