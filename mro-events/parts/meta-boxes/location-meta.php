<?php
/*
Title: Location
Post Type: mro-event
Context: normal
Priority: high
Order: 4
*/

  piklist('field', array(
    'type' => 'radio'
    ,'field' => 'mro_event_location'
    ,'label' => __('Location: choose', 'piklist-demo')
    ,'choices' => array(
      'mandir' => 'Yoga Mandir'
      ,'other' => __('Other', 'piklist-demo')
    )
    ,'value' => 'mandir'
  ));

  piklist('field', array(
    'type' => 'text'
    ,'field' => 'mro_event_location_name'
    ,'label' => __('Venue name', 'piklist-demo')
    ,'conditions' => array(
      array(
        'field' => 'mro_event_location'
        ,'value' => 'other'
      )
    )
  ));

  piklist('field',array(
    'type'=>'html',
    'label' =>  __('Move marker to venue location', 'piklist-demo'),
    'value' => '<div id="project_map" style="height:400px;"></div>',
    'conditions' => array(
      array(
        'field' => 'mro_event_location'
        ,'value' => 'other'
      )
    )

));

piklist('field',array(
    'type'=>'text',
    'label' => 'Latitude & Longitude',
    'description' => __('Don\'t use unless you know what you\'re doing.', 'piklist-demo'),
    'field'=>'mro_event_latlong2',
    'conditions' => array(
      array(
        'field' => 'mro_event_location'
        ,'value' => 'other'
      )
    )
));


//Ref to add search: https://developers.google.com/maps/documentation/javascript/examples/places-searchbox
?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script>

    var map;
    var marker
    var latLangField = jQuery('#_post_meta_mro_event_latlong2_0');
    var zoom = 16;
    var latLang = latLangField.val();
    if(latLang == '') {
        latLang = "9.934361, -84.050562";
        zoom = 16;
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