
/*********************************
    Add item
*********************************/

$(document).ready(function() {

  // Display/Hide form to add item
  $('.dashboard__btn-add-item').on('click', function() {
    $('.dashboard__form-add-item').toggle();
  });

  // Form to add contract : Add vehicule select
  let nbVehiculesToAdd = 1;
  $('.add-contrat__btn-add-vehicule').on('click', function() {
    if (nbVehiculesToAdd < 10) {
      nbVehiculesToAdd ++;
      $('.add-contrat__vehicule-'+nbVehiculesToAdd).removeClass('hidden');
    } else if(nbVehiculesToAdd >= 10) {
      $(this).addClass('cursor-not-allowed');
    }
  });

});





