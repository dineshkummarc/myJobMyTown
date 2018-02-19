function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
//document.getElementById("defaultOpen").click();



//login

$(document).ready(function () {
    $(".lgalert").click(function () {
        $(".lgtoggle").show();
        $(".sutoggle").hide();
        
    });
});
//sign up

$(document).ready(function () {
    $(".sualert").click(function () {
        $(".sutoggle").show();
        $(".lgtoggle").hide();
    });
});


//facebook
(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


function openLg() {
    document.getElementById("lg").style.width = "100%";
}

function closeLg() {
    document.getElementById("lg").style.width = "0%";
}

function openSu() {
    document.getElementById("su").style.width = "100%";
}

function closeSu() {
    document.getElementById("su").style.width = "0%";
}

