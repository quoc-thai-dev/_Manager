$(function() {
    $.ajaxSetup({
        headers:
        { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });
    $('label.required').append(' <span style="color:red">*</span>');

});

function showNotify(res) {
    let r=JSON.parse(res);
    if(r?._stats_n+""=="1"){
        $.notify('<i class="fa fa-check-circle-o" aria-hidden="true"></i>'+r?._stats+'</strong> : '+r?._msg, {
            type: 'succ',
            allow_dismiss: true,
            delay: 2000,
            showProgressbar: true,
            timer: 300,
            animate:{
                enter:'animated fadeInDown',
                exit:'animated fadeOutUp'
            }
        });
    }else{
        $.notify('<i class="fa fa-times-circle" aria-hidden="true"></i><strong>'+r?._stats+'</strong> : '+r?._msg, {
            type: 'fail',
            allow_dismiss: true,
            delay: 2000,
            showProgressbar: true,
            timer: 300,
            animate:{
                enter:'animated fadeInDown',
                exit:'animated fadeOutUp'
            }
        });
    }
}
