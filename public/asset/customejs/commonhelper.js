// $(document).ready(function () { //this is now deprecated
$(function () { //same as above work this
    $(document).on('change', '#state', function (e) {
        e.preventDefault();

        var stateId = $(this).val();
        var districtSelect = $('#district');

        $.ajax({
            type: 'GET',
            url: 'get-district',
            data: {
                state_id: stateId
            },
            success: function (response) {

                if (response.status == 'success') {
                    var optionsHTML = '<option hidden value="">Select District</option>';
                    response.districts.forEach(function (district) {
                        optionsHTML += '<option value="' + district.id + '">' +
                            district.name + '</option>';
                    });
                } else {
                    var optionsHTML = '<option hidden value="">District not found</option>';
                }

                districtSelect.html(optionsHTML);
            },
            error: function () {
                console.error('An error occurred during the AJAX request.');
            }
        });
    });

    $(document).on('change', '#district', function (e) {
        var DistrictId = $(this).val();
        var city = $('#city');

        $.ajax({
            type: 'GET',
            url: 'get-city',
            data: {
                district_id: DistrictId
            },
            success: function (response) {

                if (response.status == 'success') {
                    var optionsHTML = '<option hidden value="">Select City</option>';
                    response.cities.forEach(function (list) {
                        optionsHTML += '<option value="' + list.id + '">' +
                            list.name + '</option>';
                    });
                } else {
                    var optionsHTML = '<option hidden value="">City not found</option>';
                }
                city.html(optionsHTML);
            },
            error: function () {
                console.error('An error occurred during the AJAX request.');
            }
        });
    });

});
