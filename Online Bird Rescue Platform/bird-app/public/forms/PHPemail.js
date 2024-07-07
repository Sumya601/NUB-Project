const contactForm = document.querySelector('#contact-form');
const sentMessage = document.querySelector('.sent-message');
const errorMessage = document.querySelector('.error-message');
const loadingMessage = document.querySelector('.loading');

// add event listener to form
contactForm.addEventListener('submit', (event) => {
  event.preventDefault();
  const formData = new FormData(contactForm);
  
  // show loading message
  loadingMessage.style.display = 'block';

  $.ajax({
    url: 'forms/send_message.php',
    type: 'POST',
    dataType: 'json',
    data: formData,
    processData: false,
    contentType: false,
    success: function (response) {
      if (response === 'success') {
        loadingMessage.style.display = 'none';
        sentMessage.innerHTML = 'Message sent';
        sentMessage.style.display = 'block';
        errorMessage.style.display = 'none';
        contactForm.reset(); // reset the form
        setTimeout(function() {
          sentMessage.style.display = 'none';
          document.getElementById('id02').style.display = 'none';
          document.querySelector('body').style.overflow = 'auto';
      }, 5000);
      } else {
        loadingMessage.style.display = 'none';
        errorMessage.innerHTML = 'Message sending failed';
        errorMessage.style.display = 'block';
        sentMessage.style.display = 'none';
        setTimeout(function() {
          errorMessage.style.display = 'none';
      }, 5000);
      }
    },
    error: function (xhr, textStatus, errorThrown) {
      console.log('Error:', errorThrown);
    }
  });

});
