function formatPhoneNumber() {
  const phoneNumber = document.getElementById('phone-number');
  const formattedPhoneNumber = phoneNumber.value.replace(/(\d{3})(\d{3})(\d{4})/, '($1) $2-$3');
  phoneNumber.value = formattedPhoneNumber;
}
