/*!
 * theme custom scripts
*/

jQuery(document).ready(function ($) {

  $(function () {
    $("#budget_slider").slider({
      value: 10000,
      min: 500,
      max: 25000,
      step: 500,
      slide: function (event, ui) {
        $("#contact_budget input").val("$" + ui.value);
      }
    });
    $("#contact_budget input").val("$" + $("#budget_slider").slider("value"));


    $("#contact_startdate input").datepicker();
  });

});