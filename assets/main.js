function toast(type, msg, sec)
{
    $('body').append('<div class="toast toast-top toast-end"><div class="alert alert-' + type + '"><div><span style="color: #fff;">' + msg +'</span></div></div></div>');
    $('.toast').fadeOut(sec);
}