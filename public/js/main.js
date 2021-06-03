
/*********************************
    Add item
*********************************/

$(document).ready(function() {

  // Display/Hide form to add item
  $('.dashboard__btn-add-item').on('click', function() {
    $('.dashboard__form-add-item').toggle();
  });


  // Form to add or edit contract : Add vehicule select
  let nbVehiculesToAdd = 1;
  const vehiculeCount = $('.data-vehicule-count').attr('data-vehicule-count');
  if (vehiculeCount > 1) {
    let nbVehiculesToAdd = vehiculeCount;
    $('.add-contrat__btn-add-vehicule').on('click', function() {
      if (nbVehiculesToAdd < 10) {
        nbVehiculesToAdd ++;
        $('.add-contrat__vehicule-'+nbVehiculesToAdd).removeClass('hidden');
      } else if(nbVehiculesToAdd >= 10) {
        $(this).addClass('cursor-not-allowed');
      }
    });
  } else {
    $('.add-contrat__btn-add-vehicule').on('click', function() {
      if (nbVehiculesToAdd < 10) {
        nbVehiculesToAdd ++;
        $('.add-contrat__vehicule-'+nbVehiculesToAdd).removeClass('hidden');
      } else if(nbVehiculesToAdd >= 10) {
        $(this).addClass('cursor-not-allowed');
      }
    });
  }

});





