// Function to format the telephone input
function formatPhoneNumber(value) {
  // Remove all non-digit characters
  const cleaned = ('' + value).replace(/\D/g, '');

  // Check if the input is of correct length
  const match = cleaned.match(/^(\d{3})(\d{3})(\d{4})$/);

  if (match) {
    return `${match[1]}-${match[2]}-${match[3]}`;
  }

  return value;
}

// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
  // Add event listener to the telephone input field
  const telInput = document.getElementById('telInput');

  if (telInput) {
    telInput.addEventListener('input', function(e) {
      e.target.value = formatPhoneNumber(e.target.value);
    });
  } else {
    console.error('Telephone input not found');
  }
});