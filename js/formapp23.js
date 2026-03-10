document.getElementById("number").addEventListener('change', function () {
    console.log('clicked');


    var phoneNumber = document.getElementById('number').value;

    var regex = /^(0|91)?[6-9][0-9]{9}$/;
    if (!regex.test(jQuery("#number").val())) {
        document.getElementById('message').style.display = "block";
        $('#message').html('<div class="alert alert-danger" role="alert">Number is Not valid! </div>');

    }
    else {
        console.log(phoneNumber);

        $.ajax({
            type: 'GET',
            url: 'https://retrodtech.com/otp/send_otp.php',
            data: { phoneNumber: phoneNumber },
            success: function (response) {
                // Handle success
                document.getElementById('message').style.display = "block";
                $('#message').html('<div class="alert alert-success" role="alert">OTP sent to your number</div>');
                document.getElementById('otpbox').style.display = "block";
                document.getElementById('sendotp').style.display = "none";
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }
});




document.getElementById('otp').addEventListener("change", function () {

    var otp = document.getElementById('otp').value;
    var lotp = otp.toString().length;
    if (lotp != 6) {
        alert('Otp length is not valid');
    }


    $.ajax({
        type: 'GET',
        url: 'https://retrodtech.com/otp/verify_otp.php',
        data: { otp: otp },
        success: function (response) {

            if (response == 1) {
                btn = true;
                document.getElementById('message').style.display = "block";
                $('#message').html('<div class="alert alert-success" role="alert">  OTP verification successful. Mobile number is verified!</div>');
                document.getElementById('otpbox').style.display = "none";

            }
            else {
                alert("Otp is not valid");
            }
        },
        error: function (error) {
            alert('Error verifying OTP. Please try again.');
        }
    });

});

document.getElementById("submit").addEventListener('click', function (e) {
    e.preventDefault();
    console.log('clicked');
    var name = jQuery('input[name=uname]').val();
    var mail = jQuery('input[name=umail]').val();
    var phone = jQuery('input[name=uphone]').val();
    var hotelname = jQuery('input[name=hotelname]').val();
    var totalinventory = jQuery('input[name=totalinventory]').val();
    var plans = jQuery('#plan option:selected').val();


    var regex = /^(0|91)?[6-9][0-9]{9}$/;

    if (IsEmail(mail) == false) {
        document.getElementById('message').style.display = "block";
        $('#message').html('<div class="alert alert-danger" role="alert">Mail is not valid! </div>');

    }



    else if (!regex.test(jQuery("#number").val())) {
        document.getElementById('message').style.display = "block";
        $('#message').html('<div class="alert alert-danger" role="alert">Number is Not valid! </div>');

    }

    else if (name != '' && phone != '' && mail != '' && hotelname != '' && totalinventory != '' && plans != '') {
        var formData = { name: name, mail: mail, phone: phone, hotelname: hotelname, totalinventory: totalinventory, plans: plans, };

        $.ajax({
            url: "https://retrodtech.com/screen/registerProperty.php",
            type: 'GET',
            data: formData,
            success: function (response) {
                res = JSON.parse(response);
                console.log(res);
                document.getElementById('message').style.display = "block";
                $('#message').html('<div class="alert alert-success" role="alert">' + res.message + '</div>');



                if (res.success != false) {
                    jQuery('input[name=uname]').val('');
                    jQuery('input[name=umail]').val('');
                    jQuery('input[name=uphone]').val('');
                    jQuery('input[name=hotelname]').val('');
                    jQuery('input[name=totalinventory]').val('');
                    jQuery('#plan').val('');
                    $('#closemodal').click();
                    swal({
                        title: "Thank you",
                        text: "Our sales representatives will be in contact with you shortly",
                        icon: "success",
                        button: "Ok",
                        customClass: {
                            popup: 'custom-swal-width',
                          },
                      });

                }

            

            }
        });
    }
    else {
        document.getElementById('message').style.display = "block";
        $('#message').html('<div class="alert alert-danger" role="alert">Please fill all fields or verify OTP! </div>');

    }


});

function IsEmail(email) {
    var regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (!regex.test(email)) {
        return false;
    } else {
        return true;
    }
}


