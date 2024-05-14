
jQuery(document).ready(function(){
    var firstName = jQuery('#first_name_id').val();
    var middleName = jQuery('#middle_name_id').val();
    var lastName = jQuery('#last_name_id').val();
    var sex = jQuery('#sex_id').val();
    var type = jQuery('#type_id').val();
    var birthDate = jQuery('#birth_date_id').val();
    var employmentPeriod = jQuery('#employment_period_id').val();
    var educationLevel = jQuery('#school_id').val();
    var department = jQuery('#department_id').val();
    var teacherLevel = jQuery('#education_level_id').val();
    var retirementNumber = jQuery('#teacher_level_id').val();
    var school = jQuery('#retirement_id').val();
    var association = jQuery('#association_id').val();
    var warranty = jQuery('#warranty_id').val();
    var salary = jQuery('#salary_id').val();
    var phone = jQuery('#phone_id').val();
    var image = jQuery('#image_id').val();
    var shelf = jQuery('#shelf_id').val();
    var kent = jQuery('#kent_id').val();
    jQuery('#teacher_add_form').validate({ 
            rules: {
                'first_name_name': {
                    required: true,
                    minlength: 2,   
                },
                'middle_name_name': {
                    required: true,
                    minlength: 2,   
                },
                'last_name_name': {
                    required: true,
                    minlength: 2,   
                },
                'm_name': {
                    required: true,
                    minlength: 6,   
                },
                'sex_name': {
                    required: true,
                },
                'img_name': {
                    required: true,
                    minlength: 1,   
                },
                'birth_day_name': {
                    required: true,
                    minlength: 10,   
                },
                'emp_period_name': {
                    required: true,
                    minlength: 10,   
                },
                'phone_name': {
                    required: true,
                    minlength: 9,   
                },
                'reduced_service_name': {
                    minlength: 8,   
                },
                'te_other_name': {
                    minlength: 8,   
                },
                'other_name': {
                    minlength: 8,   
                },
                'association_name': {
                    required: true,
                    minlength: 1,   
                },
                'school_name': {
                    required: true,
                    minlength: 1,   
                },
                'education_level_name': {
                    required: true,
                    minlength: 1,   
                },
                'teacher_level_name': {
                    required: true,
                    minlength: 1,   
                },
                'department_name': {
                    required: true,
                    minlength: 1,   
                },
                'warranty_name': {
                    required: true,
                },
                'salary_name': {
                    required: true,
                    minlength: 4,   
                },
                'retirement_name': {
                    minlength: 6,   
                },
                'shelf_name': {
                    required: true,
                    minlength: 1,   
                },
                'kent_name': {
                    required: true,
                    minlength: 1,   
                },
        },
        submitHandler: function () {
            var formData = new FormData(document.getElementById("teacher_add_form"));
            jQuery.ajax({
                type: 'POST',
                url: 'insert teacher.php',
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
                        jQuery('#sex_id').val("");
                        jQuery('#date_bd_id').val("");
                        jQuery('#mounth_bd_id').val("");
                        jQuery('#year_bd_id').val("");
                        jQuery('#image_id').val("");
                        jQuery('#phone_id').val("");
                        jQuery('#type_id').val("");
                        jQuery('#date_emp_id').val("");
                        jQuery('#mounth_emp_id').val("");
                        jQuery('#year_emp_id').val("");
                        jQuery('#service_id').val("");
                        jQuery('#te_other_id').val("");
                        jQuery('#other_id').val("");
                        jQuery('#association_id').val("");
                        jQuery('#school_id').val("");
                        jQuery('#education_level_id').val("");
                        jQuery('#department_id').val("");
                        jQuery('#teacher_level_id').val("");
                        jQuery('#warranty_id').val("");
                        jQuery('#salary_id').val("");
                        jQuery('#retirement_id').val("");
                        jQuery('#shelf_id').val("");
                        jQuery('#kent_id').val("");
                        jQuery('#jop_id').val("");
                        jQuery('#full_name_id').val("");
                        jQuery('#warranter_salary_id').val("");
                        jQuery('#warranter_image_id').val("");

                        setTimeout(function () {
                            window.location.href = "add file.php";
                        }, 1000);
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
