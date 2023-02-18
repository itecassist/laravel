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

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
window.addEventListener('modal', event => {
    $('#' + event.detail.modal).modal(event.detail.action);
});

window.addEventListener('alert', ({ detail: { type, message } }) => {
    Toast.fire({
        icon: type,
        title: message
    })
});

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


