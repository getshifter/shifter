/**
 * Pricing Calc
 */

module.exports = function() {

  // Pricing Toggle
  $('.pricing-toggle .toggle-button').each(function() {

    var $this = $(this);

    $($this).on('click', function(event) {
      event.preventDefault();
      console.log($this.attr('data-plan'));

      $('.pricing-toggle .toggle-button.active').removeClass('active');
      $(this).addClass('active');

      $('.plans').removeClass('month year');
      $('.plans').addClass($this.attr('data-plan'));

    });
  });

};
