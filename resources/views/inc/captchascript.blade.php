<script>
  var total;

  function getRandomNumber() {
    return Math.ceil(Math.random()* 20);
  }

  function getSumofRandom(){
    var randomNum1 = getRandomNumber();
    var randomNum2 = getRandomNumber();

    total = randomNum1 + randomNum2;

    $('#question_captcha').text(randomNum1 + " + " + randomNum2 + " = ");
    $('#captcha_answer').val(total);
  }

  function checkCaptchaInput() {
		var captcha_response = $('#captcha_response').val();
    var captcha_answer = $('#captcha_answer').val();
  	var slideSpeed = 200;

    if(captcha_answer == captcha_response) {
      $('#btn_send_message').prop('disabled', false);
    }
    else {
      $('#btn_send_message').prop('disabled', true);
    }
  }


  $(document).ready(function() {
    //get initial sum of random numbers(captcha)
    getSumofRandom();

    // On "reset button" click, generate new random sum
    // $('button[type=reset]').on('click', getSumofRandom);

    // On user input, check value
    // $('#captcha_answer').on('keyup', checkCaptchaInput);


    $('#btn_send_message').on('click', function() {
      if($.trim($('#full_name_sms').val()).length == 0) {
        $('#full_name_sms').trigger('focus');
      }
      else if($.trim($('#company_sms').val()).length == 0) {
        $('#company_sms').trigger('focus');
      }
      else if($.trim($('#position_sms').val()).length == 0) {
        $('#position_sms').trigger('focus');
      }
      else if($.trim($('#contact_number_sms').val()).length == 0) {
        $('#contact_number_sms').trigger('focus');
      }
      else if($.trim($('#email_sms').val()).length == 0) {
        $('#email_sms').trigger('focus');
      }
      else if($.trim($('#message_sms').val()).length == 0) {
        $('#message_sms').trigger('focus');
      }
      else if($('#captcha_response').val() != $('#captcha_answer').val()) {
        $('#captcha_response').trigger('focus');
      }
      else {
        var full_name = $('#full_name_sms').val();
        var company = $('#company_sms').val();
        var position = $('#position_sms').val();
        var contact_number = $('#contact_number_sms').val();
        var email = $('#email_sms').val();
        var message = $('#message_sms').val();
        var captcha_response = $('#captcha_response').val();

        sendmessagedetails(full_name, company, position, contact_number, email, message, captcha_response);
      }
    });

    function sendmessagedetails(full_name, company, position, contact_number, email, message, captcha_response) {
      var dataLists = { 'full_name': full_name, 'company': company, 'position': position, 'contact_number': contact_number, 'email': email, 'message': message, 'captcha_response': captcha_response };

      $.ajax({
        url: '/sendmessage',
        type: 'POST',
        data: dataLists,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'JSON',
        success: function(result) {
          console.log(result);
          clearsendingform();
          location.reload();

          // if(result == true) {
          //   toastr.success("You've sent a message.", "Success");
          //   clearsendingform();
          //   window.location.reload();
          // }
          // else {
          //   toastr.error("Your message has failed.", "Error");
          //
          // }
        },
        error:function(err) {
          console.log(err);
        }
      });



    }


    function clearsendingform() {
      $('#full_name_sms').val(null);
      $('#company_sms').val(null);
      $('#position_sms').val(null);
      $('#contact_number_sms').val(null);
      $('#email_sms').val(null);
      $('#message_sms').val(null);
      $('#captcha_response').val(null);

      window.location.href = "/";
    }


  });
</script>
