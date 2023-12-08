$('form').submit(function(e) {
    e.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
      url: 'https://script.google.com/macros/s/AKfycbw1hifUWYD-KT6zwSO3C6lk2mH1HqM8zVgQxfARbuQVjLJCd3w04b-mjz3kwNT_Aw3cTw/exec',
      method: 'post',
      data: formData,
      success: function(response) {
        // Handle success
        console.log('Form data submitted successfully');
      },
      error: function(err) {
        // Handle error
        console.error('Error submitting form data');
      }
    });
  });
  