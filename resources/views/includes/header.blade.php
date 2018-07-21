<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Vero1</title>
    <link rel="stylesheet" href="{{ URL::to("css/style.css") }}" />
    <link rel="stylesheet" href="{{ URL::to("css/bootstrap.css") }}" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="/js/npm.js"></script><script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>


<link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <!-- JS -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.3/dist/loadingoverlay.min.js
"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyDZ6v5rVNIY_XwJfCdIntpT1jNj0wLVReY&libraries=places"></script>

    <link rel="shortcut icon" href="{{ URL::to("favicon/12.png") }}" type="image/png">
    <link rel="icon" href="{{ URL::to("favicon/12.png") }}" type="image/png">

    <script>
        var placeSearch, autocomplete;
        var componentForm = {
            /*street_number: 'short_name',*/
           /* route: 'long_name',*/
            locality: 'long_name',
            administrative_area_level_1: 'short_name',
            country: 'long_name',
            postal_code: 'short_name'
        };



        function initAutocomplete(){

            var input = document.getElementById('home_address');
            var searchBox = new google.maps.places.SearchBox(input);
            //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

            // Bias the SearchBox results towards current map's viewport.
          /*  map.addListener('bounds_changed', function() {
                searchBox.setBounds(map.getBounds());
            });
*/
            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */(document.getElementById('home_address')),
                {types: ['geocode']});
            autocomplete.addListener('place_changed', fillInAddress);

            // Get each component of the address from the place details
            // and fill the corresponding field on the form.
            /*for (var i = 0; i < place.address_components.length; i++) {
                var addressType = place.address_components[i].types[0];
                if (componentForm[addressType]) {
                    var val = place.address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                }
            }*/

        }


        function fillInAddress() {

            // Get the place details from the autocomplete object.
            var place = autocomplete.getPlace();

            for (var component in componentForm) {
                document.getElementById(component).value = '';
                document.getElementById(component).disabled = false;
            }

            // Get each component of the address from the place details
            // and fill the corresponding field on the form.
            for (var i = 0; i < place.address_components.length; i++) {
                var addressType = place.address_components[i].types[0];
                if (componentForm[addressType]) {
                    var val = place.address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                }
            }
        }

        google.maps.event.addDomListener(window, 'load', initAutocomplete);
    </script>
</head>
<body>

{{--
<table id="address">
    <tr>
        <td class="label">Street address</td>
        <td class="slimField"><input class="field" id="street_number"
                                     disabled="true"></input></td>
        <td class="wideField" colspan="2"><input class="field" id="route"
                                                 disabled="true"></input></td>
    </tr>
    <tr>
        <td class="label">City</td>
        <!-- Note: Selection of address components in this example is typical.
             You may need to adjust it for the locations relevant to your app. See
             https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete-addressform
        -->
        <td class="wideField" colspan="3"><input class="field" id="locality"
                                                 disabled="true"></input></td>
    </tr>
    <tr>
        <td class="label">State</td>
        <td class="slimField"><input class="field"
                                     id="administrative_area_level_1" disabled="true"></input></td>
        <td class="label">Zip code</td>
        <td class="wideField"><input class="field" id="postal_code"
                                     disabled="true"></input></td>
    </tr>
    <tr>
        <td class="label">Country</td>
        <td class="wideField" colspan="3"><input class="field"
                                                 id="country" disabled="true"></input></td>
    </tr>
</table>--}}
