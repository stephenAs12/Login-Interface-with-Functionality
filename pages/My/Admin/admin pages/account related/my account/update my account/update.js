
jQuery(document).ready(function(){
    var userPhone = jQuery('#user_phone_id').val();
    var userEmail = jQuery('#user_email_id').val();
    var fileVal = jQuery('#imgupload').val();
    jQuery('#update_user_form').validate({ 
        rules: {
            'user_phone_name': {
                // required: true,
                minlength: 10,
                maxlength: 10,
            },
            'user_email_name': {
                // required: true,
                minlength: 1
            },
            'file': {
                // required: true,
                minlength: 3
            }
        },
        submitHandler: function () {
            var formData = new FormData(document.getElementById("update_user_form"));
            jQuery.ajax({
                type: 'POST',
                url: 'update.php',
                data: formData,
                processData: false,
                contentType: false,
                // beforeSend:function(){
                //     jQuery('#submit').attr('disabled', 'disabled');
                //     jQuery('#submit').val('Creating...');
                // },
                success: function (data) {
                    if (parseInt(data) === parseInt(1)) {
                        console.log("data inserted");
                        let timerInterval
                        Swal.fire({
                            title: 'your data successfully registered!',
                            html: 'milliseconds.',
                            position: 'top-end',
                            icon: 'success',
                            timer: 1000,
                            timerProgressBar: true,
                            didOpen: () => {
                                Swal.showLoading()
                                const b = Swal.getHtmlContainer().querySelector('b')
                                timerInterval = setInterval(() => {
                                    b.textContent = Swal.getTimerLeft()
                                }, 100)
                            },
                            willClose: () => {
                                clearInterval(timerInterval)
                            }
                        }).then((result) => {
                            /* Read more about handling dismissals below */
                            if (result.dismiss === Swal.DismissReason.timer) {
                                console.log('I was closed by the timer')
                            }
                        })
                        // setInterval('location.reload()', 1000);
                    }
                    if (data) {
                        jQuery('[userphone="userPhone"]').val('');
                        jQuery('[useremail="userEmail"]').val('');
                        jQuery('[file="fileVal"]').val('');
                    }
                    if (parseInt(data) !== parseInt(1)) {
                        console.log(data)
                        let timerInterval
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops, error occurred!',
                            text: data,
                            // html: '<b></b>milliseconds.',
                            position: 'top-end',
                            timer: 3000,
                            showCancelButton: true,
                            timerProgressBar: true,
                            didOpen: () => {
                                Swal.showLoading()
                                const b = Swal.getHtmlContainer().querySelector('b')
                                timerInterval = setInterval(() => {
                                    b.textContent = Swal.getTimerLeft()
                                }, 100)
                            },
                            willClose: () => {
                                clearInterval(timerInterval)
                            }
                        }).then((result) => {
                            /* Read more about handling dismissals below */
                            if (result.dismiss === Swal.DismissReason.timer) {
                                console.log('I was closed by the timer')
                            }
                        })
                    }
                    setTimeout(function () {
                        location.reload(true);
                      }, 1000);
                },
                error: function (err) {
                    let timerInterval
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops, error occurred!',
                        text: data,
                        // html: '<b></b>milliseconds.',
                        position: 'top-end',
                        timer: 3000,
                        showCancelButton: true,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading()
                            const b = Swal.getHtmlContainer().querySelector('b')
                            timerInterval = setInterval(() => {
                                b.textContent = Swal.getTimerLeft()
                            }, 100)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                        }
                    }).then((result) => {
                        /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {
                            console.log('I was closed by the timer')
                        }
                    })
                }
            });
        }
    });
});
