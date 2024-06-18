$(document).ready(function() {
    $('#apply-filters').on('click', function() {
        filterVehicles();
    });

    function filterVehicles() {
      // récupérer les marques sélectionnées
        var selectedBrands = [];
        $('.filter-checkbox:checked').each(function() {
        selectedBrands.push($(this).val());
        });

      // montrer ou cacher les marques
        $('.vehicle-card').each(function() {
        var vehicleBrand = $(this).data('marque');
        if (selectedBrands.length === 0 || selectedBrands.includes(vehicleBrand)) {
            $(this).show();
        } else {
            $(this).hide();
        }
        });
    }
  });