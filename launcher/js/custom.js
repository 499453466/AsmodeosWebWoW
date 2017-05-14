var password = document.getElementById("pass");
var password2= document.getElementById("pass2");

function validatePassword() {
    if(password.value != password2.value)
        password2.setCustomValidity("Passwords don't match");
    else
        password2.setCustomValidity("");
}

//password.onchange = validatePassword;
//password2.onkeyup = validatePassword;

$( "#btn_install" ).click(function() {
    var user = $('#user').val();
    var pass = $('#password').val();
    var auth = $('#authDB').val();
    var characters = $('#charactersDB').val();

    if(!user.length || !pass.length || !auth.length || !characters.length){
		alert("Please fill all the text fields.");
		return;
	}
    window.location.href = "http://127.0.0.1/launcher/index.php?user="+user+"&password="+pass+"&auth="+auth+"&characters="+characters;
});
$( "#btn_create_account" ).click(function() {
    var user = $('#user').val();
    var pass = $('#password').val();

    if(!user.length || !pass.length){
		alert("Please fill all the text fields.");
		return;
	}
    window.location.href = "http://127.0.0.1/launcher/complete.php?user="+user+"&password="+pass;
});
$('input:checkbox').change(function() {
    if($(this).prop('checked'))
        this.value = '1';
    else
        this.value = '0';
});
$('div[id^="panel_"]').hide();
$('#panel_news').show();
$('#panel_login').show();
$('li').click(function() {
    $('div[id^="panel_"]').hide();
    $('li').removeClass('active');
    $(this).addClass('active');
    $('#panel_'+this.id).show();
    
});