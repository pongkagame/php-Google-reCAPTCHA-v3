const site_key = document.querySelector('#my-submit').getAttribute('data-sitekey');
var onloadCallback = function() {  
    grecaptcha.render('my-captcha', {
        'sitekey'  : site_key,
        'theme'    : 'dark'
    });
}

var form = document.querySelector("#my-form");

document.querySelector('#my-submit').addEventListener("click", function () {
        e.preventDefault();
        grecaptcha.ready(function() {
            grecaptcha.execute(site_key, {action: 'submit'}).then(function(token) {
                console.log(token);
                document.getElementById('token').value = token;
                form.submit();
            });
    });
});
