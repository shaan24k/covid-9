var imageData = "";

$(function() {
 
    getSummary();
    getStateDataList();
    getStateHelplineList();

    $('#form_validation').validate({
        rules: {
            'checkbox': {
                required: true
            },
            'select': {
                required: true
            }
        },
        highlight: function (input) {
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.form-group').append(error);
        }
    });

    Webcam.set({
        width: 240,
        height: 320,
        image_format: 'jpeg',
        jpeg_quality: 90,
        constraints: {
            width: {
                exact: 240
            },
            height: {
                exact: 320
            }
        }
    });
    Webcam.attach('#my_camera');

});

$(".takephoto").click(function() {
    imageType = $(this).attr("id")
    $(".camera-frame").show()
})


function take_snapshot() {

    $('.clickbtn').removeClass('show')
    $('.clickbtn').addClass('hide')
    $('#my_camera').removeClass('show')
    $('#my_camera').addClass('hide')
    $('.my_result').removeClass('hide')
    $('.my_result').addClass('show')
    $('.savebtn').removeClass('hide')
    $('.savebtn').addClass('show')
    Webcam.snap(function(data_uri) {
       
        imageData = data_uri

        var html = '<img src="' + data_uri + '"/>';
        $('.my_result').html(html)
    });
}



function reset() {

    imageData = ""

    $('.my_result').removeClass('show')
    $('.my_result').addClass('hide')
    $('#my_camera').removeClass('hide')
    $('#my_camera').addClass('show')
    $('.my_result').html("");
    $('.savebtn').removeClass('show')
    $('.savebtn').addClass('hide')
    $('.clickbtn').removeClass('hide')
    $('.clickbtn').addClass('show')
}


function saveImage() {

    $('#imagePreview').attr('src', imageData);
    $('#imagePreview').attr('width', '88px');
    $('#imagePreview').attr('height', '117px');

    $(".camera-frame").hide()
    $('.my_result').removeClass('show')
    $('.my_result').addClass('hide')
    $('#my_camera').removeClass('hide')
    $('#my_camera').addClass('show')
    $('.my_result').html("");
    $('.savebtn').removeClass('show')
    $('.savebtn').addClass('hide')
    $('.clickbtn').removeClass('hide')
    $('.clickbtn').addClass('show')
}

function hideOverlay() {
    $(".camera-frame").hide()
    $('.my_result').removeClass('show')
    $('.my_result').addClass('hide')
    $('#my_camera').removeClass('hide')
    $('#my_camera').addClass('show')
    $('.my_result').html("");
    $('.savebtn').removeClass('show')
    $('.savebtn').addClass('hide')
    $('.clickbtn').removeClass('hide')
    $('.clickbtn').addClass('show')
}


const divInstall = document.getElementById('installContainer');
const butInstall = document.getElementById('butInstall');

/* Put code here */

let deferredPrompt;

window.addEventListener('beforeinstallprompt', (e) => {
  // Prevent the mini-infobar from appearing on mobile
  e.preventDefault();
  // Stash the event so it can be triggered later.
  deferredPrompt = e;
  // Update UI notify the user they can install the PWA
  showInstallPromotion();
});

function showInstallPromotion() {

    $('.installContainer').removeClass('hidden')
}


butInstall.addEventListener('click', (e) => {
    // Hide the app provided install promotion
    hideMyInstallPromotion();
    // Show the install prompt
    deferredPrompt.prompt();
    // Wait for the user to respond to the prompt
    deferredPrompt.userChoice.then((choiceResult) => {
      if (choiceResult.outcome === 'accepted') {
        console.log('User accepted the install prompt');
      } else {
        console.log('User dismissed the install prompt');
      }
    })
  });

  window.addEventListener('load', () => {
    if (navigator.standalone) {
      console.log('Launched: Installed (iOS)');
    } else if (matchMedia('(display-mode: standalone)').matches) {
      console.log('Launched: Installed');
    } else {
      console.log('Launched: Browser Tab');
    }
  });

/* Only register a service worker if it's supported */
if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('assets/js/service-worker.js');
}

/**
 * Warn the page must be served over HTTPS
 * The `beforeinstallprompt` event won't fire if the page is served over HTTP.
 * Installability requires a service worker with a fetch event handler, and
 * if the page isn't served over HTTPS, the service worker won't load.
 */
if (window.location.protocol === 'http:') {
  const requireHTTPS = document.getElementById('requireHTTPS');
  const link = requireHTTPS.querySelector('a');
  link.href = window.location.href.replace('http://', 'https://');
  requireHTTPS.classList.remove('hidden');
}


    function numberWithCommas(x) {

        return x.toString().split('.')[0].length > 3 ? x.toString().substring(0,x.toString().split('.')[0].length-3).replace(/\B(?=(\d{2})+(?!\d))/g, ",") + "," + x.toString().substring(x.toString().split('.')[0].length-3): x.toString();
    
    }

    function getSummary() {

        $.ajax({
        type: 'GET',
        url: "./server.php?type=1",
        contentType: false,
        processData: false,
        success: function(response) {

            if (response) {
            
                $("#india_total_cases").html(response.data_eng[0].Confirmed);
                $("#india_active_cases").html(response.data_eng[0].Active);
                $("#india_total_recovered").html(response.data_eng[0].Recovered);
                $("#india_total_deaths").html(response.data_eng[0].Deaths);

                $("#total_cases").html(response.data_eng[1].Confirmed);
                $("#active_cases").html(response.data_eng[1].Active);
                $("#total_recovered").html(response.data_eng[1].Recovered);
                $("#total_deaths").html(response.data_eng[1].Deaths);
                

            } else {
                console.log("Data not found")
            }

        },
        error: onAjaxError
    });


    }


    function getStateDataList() {

        $.ajax({
        type: 'GET',
        url: "./server.php?type=2",
        contentType: false,
        processData: false,
        success: function(response) {

            if (response) {
                
                var html = ``;

               for(var i=0; i < response.length; i++) {

                    html+=`<tr>`;
                    html+=`<td>`+response[i].state_name+`</td>`;
                    html+=`<td><span class="conform_cases">`+response[i].positive+`</span></td>`;
                    html+=`<td><span class="cured_cases">`+response[i].cured+`</span></td>`;
                    html+=`<td><span class="deaths_field">`+response[i].death+`</span></td>`;
                    html+=`</tr><tr>`;
               }

                html+=`<tr><td align="center" style="text-align:center;" colspan="4"><strong>*Data Source <a href="https://www.mohfw.gov.in/" target="_blank">www.mohfw.gov.in</a></strong></td></tr>`;
                html+=`<tr><td align="center" style="text-align:center;" colspan="4">This Website is only for knowledge purposes. The above data may be very from the real one. All data is taken from www.mohfw.gov.in and www.livemint.com.</td></tr>`;
                
                $(".covid19-state-list tbody").html(html);

            } else {
                console.log("Data not found")
            }

        },
        error: onAjaxError
        });


    }


    function getStateHelplineList() {

        $.ajax({
        type: 'GET',
        url: "./helpline.json",
        contentType: false,
        processData: false,
        success: function(response) {

            if (response) {
                
                var html = ``;

            for(var i=0; i < response.length; i++) {

                    html+=`<tr>`;
                    html+=`<td>`+response[i].state_name+`</td>`;
                    html+=`<td>`+response[i].number+` &nbsp; <a href="tel:+`+response[i].call+`" class="cured_cases">Call</a></td>`;
                    html+=`</tr><tr>`;
            }

            html+=`<tr><td align="center" style="text-align:center;" colspan="4"><strong>*Data Source <a href="https://www.mohfw.gov.in/" target="_blank">www.mohfw.gov.in</a></strong></td></tr>`;
  
              $(".state-helpline-list tbody").html(html);

            } else {
                console.log("Data not found")
            }

        },
        error: onAjaxError
        });

    }



    setInterval(function(){ getSummary() }, 8000);
    
    function onAjaxError(jqXHR, exception) {
        var msg = "";
        if (jqXHR.status === 0) {
            msg = "INTERNET_DISCONNECTED Verify Network.";
        } else if (jqXHR.status == 404) {
            msg = "Requested page not found. [404]";
        } else if (jqXHR.status == 500) {
            msg = "Internal Server Error [500].";
        } else if (exception === "parsererror") {
            msg = "Requested JSON parse failed.";
        } else if (exception === "timeout") {
            msg = "Time out error.";
        } else if (exception === "abort") {
            msg = "Ajax request aborted.";
        } else {
            msg = "Uncaught Error.\n" + jqXHR.responseText;
        }
        $('#errorBox').html('Error:' + msg);
        console.log("error:" + msg);
    }

    $("select").formSelect();
