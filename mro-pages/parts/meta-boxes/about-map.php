<?php
/*
Title: Mapa
Post Type: page
Context: normal
Priority: high
Order: 4
Template: page-templates/template-about-us
*/

piklist('field',array(
    'type'=>'html',
    'label' => 'Map',
    'value' => '<div id="project_map" style="height:500px;"></div>',

));

piklist('field',array(
    'type'=>'hidden',
    'field'=>'latLang'

));

?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script>

    var map;
    var marker
    var latLangField = jQuery('#_post_meta_latLang_0');
    var zoom = 15;
    var latLang = latLangField.val();
    if(latLang == '') {
        latLang = "9.9343711, -84.053";
        zoom = 17;
    }
    latLang = latLang.split(',');


    function initialize() {


        var mapOptions = {
            zoom:zoom,
            center: new google.maps.LatLng(latLang[0],latLang[1])
        }
        map = new google.maps.Map(document.getElementById('project_map'),mapOptions);

        marker = new google.maps.Marker({
            draggable: true,
            position: new google.maps.LatLng(latLang[0],latLang[1]),
            map: map,
            title: "Your location"
        });

        google.maps.event.addListener(marker, 'dragend', function (event) {
            var lat = this.getPosition().lat();
            var lang = this.getPosition().lng();
            latLangField.val(lat+','+lang);
        });

    }
    google.maps.event.addDomListener(window, 'load', initialize);



</script>
<?php