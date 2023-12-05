$("input[name='phone-number']").keyup(function() {
  $(this).val($(this).val().replace(/^(\d{3})(\d{3})(\d+)$/, "($1)$2-$3"));
});