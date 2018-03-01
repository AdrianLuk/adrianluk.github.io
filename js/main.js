$(document).ready(function() {

    $('#main-content').load('home.php');
    $('#home').addClass('selected');
    $('#homebottom').addClass('selected');
    $('body').css({
        'background': '#2a2a2a',
        'color': '#fff'
    });

    $('#homescreen').click(function(){
        $('#homescreen').css({
            'display': 'none'
        });
    });

    $(window).scroll(function() {
    var winTop = $(window).scrollTop();
    if (winTop >= 30) {
      $("body").addClass("sticky-shrinknav-wrapper");
    } else{
      $("body").removeClass("sticky-shrinknav-wrapper");
    }
  });

      $('#home').click(function(event){
          event.preventDefault();
          $('#home').removeClass('selected');
          $('#projects').removeClass('selected');
          $(this).addClass('selected');
          $('#main-content').empty();

         $.ajax({
            url: 'home.php',
            dataType: 'html',
            success: function(home){
                $('#main-content').html(home);
                $('body').css({
                    'background': '#2a2a2a',
                    'color': '#fff'
                });
            }
         });
      });
      $('#projects').click(function(e){
          e.preventDefault();
          $('#home').removeClass('selected');
          $('#projects').removeClass('selected');
          $(this).addClass('selected');
          $('#main-content').empty();

         $.ajax({
            url: 'modules/assignments.php',
            dataType: 'html',
            success: function(projects){
                $('#main-content').html(projects);
                $('body').css({
                    'background': '#fff',
                    'color': '#000'
                });
                $('.fotorama').fotorama();
            }
         });
      });
      $('#homebottom').click(function(event){
          event.preventDefault();
          $('#homebottom').removeClass('selected');
          $('#projectsbottom').removeClass('selected');
          $(this).addClass('selected');
          $('#main-content').empty();

         $.ajax({
            url: 'home.php',
            dataType: 'html',
            success: function(homebottom){
                $('#main-content').html(homebottom);
                $('body').css({
                    'background': '#2a2a2a',
                    'color': '#fff'
                });
            }
         });
      });
      $('#projectsbottom').click(function(e){
          e.preventDefault();
          $('#homebottom').removeClass('selected');
          $('#projectsbottom').removeClass('selected');
          $(this).addClass('selected');
          $('#main-content').empty();

         $.ajax({
            url: 'modules/assignments.php',
            dataType: 'html',
            success: function(projectsbottom){
                $('#main-content').html(projectsbottom);
                $('body').css({
                    'background': '#fff',
                    'color': '#000'
                });
                $('.fotorama').fotorama();
            }
         });
      });
});
