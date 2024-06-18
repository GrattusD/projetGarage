$(document).ready(function() {
    $('#apply-filters').on('click', function() {
        filterVehicles();
    });

    function filterVehicles() {
      // Get selected brands
        var selectedBrands = [];
        $('.filter-checkbox:checked').each(function() {
        selectedBrands.push($(this).val());
        });
  
      // Show/hide vehicle cards based on selected brands
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