<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="bootstrap.min.css"/>
  <link rel="stylesheet" href="style.css"/>
  <title>Уникальное премущество</title> 
</head>
<body> 
  <div id="app">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="header text-center text-uppercase"><b>Только <span class="yellow">10 партнеров</span > получат <br class="d-desktop"> уникальное преимущество</b> для своего бизнеса</p> 
          <h1 class="text-center text-uppercase">до старта проекта осталось <span id="CDTD"></span></h1>
          <div id="CDT"></div>
          <p class="text-center desc">Оставьте ваши контакты и узнайте о предложении первым!</p>
          <div class="form-group first-form">
            <form id="fake-form">
            <input type="email" name="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Введите Ваш email" required="true"><a class="open-lightbox" data-toggle="modal" data-target="#exampleModal"><b>Отправить заявку</b></a>
            </form>
          </div>


          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-center" id="exampleModalLabel">Пожалуйста, заполниет <b>поля</b> ниже</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form id="modal-form" method="POST" action="api/mail.php">
                  <div class="modal-body">
                    <div class="modal-result">
                      <h6 class="text-center">Спасибо за заявку!</h6>
                      <p class="text-center">Еще немного и мы раскроем<br>все карты</p>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="modalName" name="name" aria-describedby="nameHelp" placeholder="Имя" required="true">
                    </div>
                    <div class="form-group">
                      <input type="phone" class="form-control" id="modalPhone" name="phone" aria-describedby="phoneHelp" placeholder="Номер телефона" required="true">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" id="modalInputEmail" name="email" aria-describedby="emailHelp" placeholder="Enter email" required="true">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="modalPavilion" name="pavilion" aria-describedby="pavilionHelp" placeholder="Номер павильона" required="true">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Отправить заявку</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>
  </div>
  <script src="https://yastatic.net/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/countdown.js"></script>
  <script src="js/script.js"></script>
  <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter47779360 = new Ya.Metrika({ id:47779360, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/47779360" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</body>
</html>