/*!
 * theme custom scripts
*/

jQuery(document).ready(function ($) {

  $(function () {
    const form = $("#contact_form");
    const slider = $("#budget_slider");
    const input = $("#contact_budget input");

    const min = form.data("min") || 500;
    const max = form.data("max") || 25000;
    const step = form.data("increment") || 500;
    const value = form.data("default") || 10000;

    slider.slider({
      value, min, max, step,
      slide: function (event, ui) {
        input.val("$" + ui.value);
      }
    });
    input.val("$" + slider.slider("value"));


    $("#contact_startdate input").datepicker();
  });

});