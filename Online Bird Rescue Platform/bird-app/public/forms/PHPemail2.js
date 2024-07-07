const contactForm2 = document.querySelector('#contact-form2');
const sentMessage2 = document.querySelector('#sent-message');
const errorMessage2 = document.querySelector('#error-message');
const loadingMessage2 = document.querySelector('#loading');

// add event listener to form
contactForm2.addEventListener('submit', (event) => {
  event.preventDefault();
  const formData2 = new FormData(contactForm2);
  
  // show loading message
  loadingMessage2.style.display = 'block';

  $.ajax({
    url: 'forms/send_message2.php',
    type: 'POST',
    dataType: 'json',
    data: formData2,
    processData: false,
    contentType: false,
    success: function (response) {
      if (response === 'success') {
        loadingMessage2.style.display = 'none';
        sentMessage2.innerHTML = 'Feedback sent';
        sentMessage2.style.display = 'block';
        errorMessage2.style.display = 'none';
        contactForm2.reset(); // reset the form
        setTimeout(function() {
          sentMessage2.style.display = 'none';
          document.getElementById('id02').style.display = 'none';
          document.querySelector('body').style.overflow = 'auto';
      }, 5000);
      } else {
        loadingMessage2.style.display = 'none';
        errorMessage2.innerHTML = 'Feedback sending failed';
        errorMessage2.style.display = 'block';
        sentMessage2.style.display = 'none';
        setTimeout(function() {
          errorMessage2.style.display = 'none';
      }, 5000);
      }
    },
    error: function (xhr, textStatus, errorThrown) {
      console.log('Error:', errorThrown);
    }
  });

});
