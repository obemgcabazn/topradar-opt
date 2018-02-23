;(function($){
      $(function () {

        var sendData = true;

        // передача емайла между формами
        var lightboxLink = $('.open-lightbox');
        lightboxLink.click(function(){
          $('#modalInputEmail').val($('#InputEmail1').val());
        });

        var data = [];
        data['name'] = '';
        data['phone'] = '';
        data['email'] = '';
        data['pavilion'] = '';
        
        $('.form-control').on('focus', function(){
          var name = $(this).attr('name').toString();
          $(this).keypress(function(e){
            data[name] += String.fromCharCode(e.which.toString());
          })
        });

        $('#fake-form').submit(function(e){
            e.preventDefault();
          });

        // Валидация формы
        $('#modal-form button[type="submit"]').click(function(){
          $('.form-control').each(function(){
            if( $(this).val() == '' ){
              $(this).addClass('invalid')
            }
          });
        });

        // Отправка формы
        $('#modal-form').submit(function(e){
            e.preventDefault();
            var m_method=$(this).attr('method');
            var m_action=$(this).attr('action');
            var m_data=$(this).serialize();
            
            $.ajax({
                type: m_method,
                url: m_action,
                data: m_data,
                success: function(result){
                    $('.modal-header, .modal-footer, .modal-title, .modal .form-group').css("display", "none");
                    $('.modal-result').css("display", "block");
                    sendData = false;
                }
            });

            // Отправка корректной заявки в Handler
            $.post('/handler.php?complete=true', m_data, function(result){ console.log("отправлено в handler") });
        });

        window.addEventListener('beforeunload', function (e) {
          if(sendData && (data['name'] != '' || data['phone'] != '' || data['email'] != '' || data['pavilion'] != '')){
            var xhr = new XMLHttpRequest();
              xhr.open('POST', 'handler.php', true);
              xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
              xhr.send( 'name=' + encodeURIComponent(data['name']) + '&email=' + encodeURIComponent(data['email']) + '&phone=' + encodeURIComponent(data['phone']) + '&pavilion=' + encodeURIComponent(data['pavilion']) );
            
              e.preventDefault();
              var confirmationMessage = "";
              (e || window.event).returnValue = confirmationMessage;
              return confirmationMessage;
          }

        }, false);

      })
    })(jQuery)