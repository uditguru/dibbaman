var map;
jQuery(document).ready(function(){

    map = new GMaps({
        div: '#map',
        lat: 22.6861341,
        lng: 75.8677397,
    });
    map.addMarker({
        lat: 22.6861341,
        lng: 75.8677397,
        title: 'Address',      
        infoWindow: {
            content: '<h5 class="title">Dibbaman</h5><p><span class="region">Adarsh Gram</span><br><span class="postal-code">Postcode</span><br><span class="country-name">Country</span></p>'
        }
        
    });

});