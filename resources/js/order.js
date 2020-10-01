
$(function () {

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
      'Accept': 'application/json',
      //'Authorization': 'Bearer sOr8lChGbXn1t1vn70hqqVXfCGFxo3Hfr6nUKN5rSn8t5IflhTRoiskHPztG'
    }
  });
  var today = new Date().toISOString().split('T')[0];
  $("#schedule-date").attr('min', today);
});
  (function () {
    'use strict';
    window.addEventListener('load', function () {
      var forms = document.getElementsByClassName('order-form');
      var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener('submit', function (event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          } else {
            var jqxhr = $.ajax({
              method: "POST",
              url: "/api/order",
              data: $("#order-form").serialize()
            })
              .done(function (data) {
                $("#response-text").text(data);
                $('#add_data_modal').modal({
                  backdrop: false,
                  keyboard: false
                });
              })
          }
          form.classList.add('was-validated');

        }, false);
      });
    }, false);

  })();

  $(function(){
    $(".delete-row").on("click", function(e){
      $("#delete-confirm").attr("href", "/order/"+$(this).attr("data-id"));
      $('#delete_data_modal').modal({
        backdrop: true,
        keyboard: false
      });

    });
  });


