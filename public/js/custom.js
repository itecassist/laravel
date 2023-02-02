function isNumberKey(evt, obj) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    var value = obj.value;
    var dotcontains = value.indexOf(".") != -1;
    if (dotcontains)
        if (charCode == 46) return false;
    if (charCode == 46) return true;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
function ucwords(str) {
    str = str.replace(/_/g, ' ');
    return (str + '').replace(/^([a-z])|\s+([a-z])/g, function ($1) {
        return $1.toUpperCase();
    });
}
function convertToSlug(Text) {
    return Text
        .toLowerCase()
        .replace(/ /g, '-')
        .replace(/[^\w-]+/g, '');
}
function convertToKeyword(Text) {
    return Text
        .toLowerCase()
        .replace(/ /g, ', ');
}
function notice(type, title, message = '', time = 1500) {
    if (type === 'error') {
        time = 2500;
    }
    Swal.fire({
        position: 'top-end',
        toast: true,
        title: title,
        html: message,
        icon: type,
        showCloseButton: true, showConfirmButton: false,
        timer: time
    });
}
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
window.addEventListener('modal', event => {
    $('#' + event.detail.modal).modal(event.detail.action);
});
const Toast = Swal.mixin({
    toast: true,
    position: 'top-right',
    showConfirmButton: false,
    showCloseButton: true,
    timer: 2200,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});

window.addEventListener('alert', ({ detail: { type, message } }) => {
    Toast.fire({
        icon: type,
        title: message
    })
});
$('.select').select2();
function openNav(val) {
    if(isNaN(val)){
        val = 350;
    }
    document.getElementById("mySidenav").style.width = val+"px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
$('.modal').on('shown.bs.modal', function (e) {
    $(this).find('.select').select2({
        dropdownParent: $(this).find('.modal-content'),
    });
})


