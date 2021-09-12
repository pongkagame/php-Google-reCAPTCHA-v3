const site_key = document.querySelector('#my-submit').getAttribute('data-sitekey');
//Display inline reCAPTCHA on spesific element
var onloadCallback = function() {  
    grecaptcha.render('my-captcha', {
        'sitekey'  : site_key,
        'theme'    : 'dark'
    });
}

//Process token CAPTCHA on event submit
var form = document.querySelector("#my-form");

document.querySelector('#my-submit').addEventListener("click", function () {
        e.preventDefault();
        grecaptcha.ready(function() {
            grecaptcha.execute(site_key, {action: 'submit'}).then(function(token) {
                document.getElementById('token').value = token;
                form.submit();
            });
    });
});
