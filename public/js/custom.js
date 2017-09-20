// The following code is based off a toggle menu by @Bradcomp
// source: https://gist.github.com/Bradcomp/a9ef2ef322a8e8017443b626208999c1
(function() {
    var burger = document.querySelector('.nav-toggle');
    var menu = document.querySelector('.nav-menu');
    burger.addEventListener('click', function() {
        burger.classList.toggle('is-active');
        menu.classList.toggle('is-active');

    });
})();

function fillComfirm() {
  $('#confirm-modal').addClass('animated fadeIn');
  $('#confirm-modal').addClass('is-active');
    var arr = $('#gForm').serializeArray();
    for (var i = 0; i < arr.length-3; i++) {
        var id = 'c' + arr[i].name.substring(3);
        //console.log(id);
        var l = document.getElementById(id);
        l.innerText = arr[i].value;
    }
}

// Load Webcam
Webcam.set({
  width: 500,
  height: 375,
  image_format: 'jpeg',
  jpeg_quality: 100
});
//Webcam.attach( '#my_camera' );

function preview_snapshot() {
  // freeze camera so user can preview pic
  Webcam.freeze();
  // swap button sets
  document.getElementById('pre_take_buttons').style.display = 'none';
  document.getElementById('post_take_buttons').style.display = '';
}

function cancel_preview() {
  // cancel preview freeze and return to live camera feed
  Webcam.unfreeze();

  // swap buttons back
  document.getElementById('pre_take_buttons').style.display = '';
  document.getElementById('post_take_buttons').style.display = 'none';
}

function save_photo() {
  // actually snap photo (from preview freeze) and display it
  Webcam.snap( function(data_uri) {
    // display results in page
    var img = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');
    document.getElementById('imgdata').value = img;
    document.getElementById('cImg').setAttribute('src',data_uri);
    Webcam.reset();
    //console.log(img);
    $('#photo-modal').removeClass('is-active');
    document.getElementById('submitbtn').disabled = false;
    document.getElementById('nophoto_notification').style.display = 'none';
    // swap buttons back
    document.getElementById('pre_take_buttons').style.display = '';
    document.getElementById('post_take_buttons').style.display = 'none';
  } );
}
function submitForm(){
  $('#submitbtn').addClass('is-loading');
  document.getElementById("gForm").submit();

}

jQuery(document).ready(function ($) {

  var $toggle = $('#nav-toggle');
  var $menu = $('#nav-menu');

  $toggle.click(function() {
    $(this).toggleClass('is-active');
    $menu.toggleClass('is-active');
  });

  $('.modal-button').click(function() {
    var target = $(this).data('target');
    $(target).addClass('is-active');
    Webcam.attach( '#my_camera' );
    //$('.modal-box').removeClass('animated fadeOut');
    $('.modal').addClass('animated fadeIn');
  });

  $('.modal-background, .modal-close, .closebtn').click(function() {
    //$('.modal-box').addClass('animated fadeOut');
    $('.modal-box').removeClass('animated fadeIn');
    $('.modal').removeClass('is-active');
  });

  $('.modal-card-head .delete, .modal-card-foot .button').click(function() {
    $('html').removeClass('is-clipped');
    $('#modal-ter').removeClass('is-active');
  });


});
