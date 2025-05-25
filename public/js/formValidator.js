// Function to remove alert messages from page
$(document).on('click', '.alert-close', function () {
    $(this).parent().remove();
});

// Function to change the styling of input fields on error

// Function to validate input fields

$(document).on('submit', '#contact-form', function (e) {
    e.preventDefault();
    console.log('submit button clicked');
    e.submit();
})