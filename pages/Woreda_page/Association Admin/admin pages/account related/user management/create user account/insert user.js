
jQuery(document).ready(function(){
    var firstName = jQuery('#first_name_id').val();
    var middleName = jQuery('#middle_name_id').val();
    var lastName = jQuery('#last_name_id').val();
    var userPhone = jQuery('#user_phone_id').val();
    jQuery('#add_user_form').validate({ 
        rules: {
            'first_name_name': {
                required: true,
                minlength: 3,   
            },
            'middle_name_name': {
                required: true,
                minlength: 3
            },
            'last_name_name': {
                required: true,
                minlength: 3
            },
            'user_phone_name': {
                required: true,
                minlength: 10,
                maxlength: 10,
            },
            'user_email_name': {
                required: true,
                minlength: 1
            },
            // 'user_password_name': {
            //     required: true,
            //     minlength: 5,
            // },
            // 'confirm_password_name': {
            //     required: true,
            //     minlength: 5,
            //     equalTo : "#user_password_id",
            // },
        },
        submitHandler: function () {
            var formData = new FormData(document.getElementById("add_user_form"));
            jQuery.ajax({
                type: 'POST',
                url: 'insert user.php',
                data: formData,
                processData: false,
                contentType: false,
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
                        jQuery('#first_name_id').val("");
                        jQuery('#middle_name_id').val("");
                        jQuery('#last_name_id').val("");
                        jQuery('#user_email_id').val("");
                        jQuery('#user_phone_id').val("");
                    }
                    if (parseInt(data) !== parseInt(1)) {
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
