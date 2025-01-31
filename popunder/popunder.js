<script type="text/javascript">
var puShown = false;

function doOpen(url) {
    if ( puShown == true ) {
        return true;
    }
    win = window.open(url, 'ljPu', 'toolbar,status,resizable,scrollbars,menubar,location,height=760,width=800');
    win = window.open(url, 'ljPu', 'height=680,width=790');
    if ( win ) {
        win.blur();
        puShown = true;
    }
    return win;
}

function setCookie(name, value, time) {
    var expires = new Date();
    expires.setTime(expires.getTime() + time);
    document.cookie = name + '=' + value + '; expires=' + expires.toGMTString();
}

function getCookie(name) {
    var cookies = document.cookie.toString().split('; ');
    var cookie, c_name, c_value;
    for (var n = 0; n < cookies.length; n++) {
        cookie = cookies[n].split('=');
        c_name = cookie[0];
        c_value = cookie[1];
        if ( c_name == name ) {
            return c_value;
        }
    }
    return null;
}

function initPu() {
    if ( document.attachEvent ) {
        document.attachEvent('onclick', checkTarget);
    } else if ( document.addEventListener ) {
        document.addEventListener('click', checkTarget, false);
    }
}

function checkTarget(e) {
    // Çerezi kontrol et
    if (!getCookie('popundr')) {
        var win = doOpen('Yönlendirilecek URL');
        // 30 dakika (30 * 60 * 1000 ms) çerezi ayarla
        setCookie('popundr', 1, 30 * 60 * 1000); // Çerez 30 dakika sonra sona erer
    }
}

initPu();
</script>