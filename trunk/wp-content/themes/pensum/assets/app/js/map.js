$(function() {

   //$("#map-view-wr").hide();


  	// Map Options
    var maps_options = {
      zoom: Modernizr.touch ? 11 : 12,
      //center: new google.maps.LatLng(19.346341, -81.266851),
      center: new google.maps.LatLng(19.342453, -81.240926),
      scrollwheel: false,
      mapTypeControl: true,
      mapTypeControlOptions: {
          style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
          position: google.maps.ControlPosition.BOTTOM_CENTER
      },
      mapTypeControl: false,
      panControl: false,
      zoomControl: true,
      zoomControlOptions: {
          style: google.maps.ZoomControlStyle.LARGE,
          position: google.maps.ControlPosition.LEFT_CENTER
      },
      scaleControl: true,
      streetViewControl: false,
        styles: [{"stylers":[{"saturation":0}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":200},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"simplified"},{"saturation":45}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"simplified"},{"saturation":-45}]},{"featureType":"water","elementType":"geometry","stylers":[{"visibility":"simplified"},{"saturation":45}]},{"featureType":"landscape","elementType":"labels","stylers":[{"visibility":"simplified"},{"saturation":45}]},{"featureType":"transit","elementType":"labels","stylers":[{"visibility":"simplified"},{"saturation":45}]}]
    }

    generateMap();

    function generateMap(){

        var map = new google.maps.Map(document.getElementById('map-view'), maps_options);


    // Infobox Options
   var infobox = new InfoBox({
     content: showInfoBox(),
     disableAutoPan: false,
     pixelOffset: new google.maps.Size(-223, 0),
     zIndex: null,
     boxStyle: {
        width: "520px"
    },
      closeBoxMargin: "14px 6px 0 0",
      closeBoxURL: assetsurl + "assets/images/ui/close.gif",
      infoBoxClearance: new google.maps.Size(1, 1)
    });

    var marker, i;
    var markers = new Array();

    var icon1 =  {
                path: fontawesome.markers.MAP_MARKER,
                scale: 0.4,
                strokeWeight: 0,
                strokeColor: 'none',
                strokeOpacity: 0,
                fillColor: '#B49B5A',
                fillOpacity: 1,
            };

    var icon2 =  {
                path: fontawesome.markers.MAP_MARKER,
                scale: 0.4,
                strokeWeight: 0,
                strokeColor: 'none',
                strokeOpacity: 0,
                fillColor: '#28659D',
                fillOpacity: 1,
            };
    // //
    // // $.each(properties_json, function(i, item) {
    // //
    // //  // console.log(properties_json);
    // //   //final position for marker, could be updated if another marker already exists in same position
    // //   var latlng = new google.maps.LatLng(item.latitude,item.longitude);
    // //   var finalLatLng = latlng;
    // //
    // //   //check to see if any of the existing markers match the latlng of the new marker
    // //
    // //       for (i=0; i < properties_json.length; i++) {
    // //
    // //           var existingMarker = properties_json[i];
    // //           var pos = new google.maps.LatLng(existingMarker.latitude, existingMarker.longitude)
    // //
    // //          // if a marker already exists in the same position as this marker
    // //           if (latlng.equals(pos)) {
    // //             //console.log('same');
    // //               //update the position of the coincident marker by applying a small multipler to its coordinates
    // //               var newLat = latlng.lat() + (Math.random() -.5) / 1500;// * (Math.random() * (max - min) + min);
    // //               var newLng = latlng.lng() + (Math.random() -.5) / 1000;// * (Math.random() * (max - min) + min);
    // //               finalLatLng = new google.maps.LatLng(newLat,newLng);
    // //           }
    // //       }
    // //
    // //
    // //
    // //     marker = new google.maps.Marker({
    // //     position: finalLatLng,
    // //     map: map,
    // //     data: item,
    // //     //  Customize Icon
    // //         icon: icon1,
    // //   });
    // //
    // //   markers.push(marker);
    //
    // });

  }



  function showInfoBox(){

    return document.getElementById("infobox");

  }


	//var markerCluster = new MarkerClusterer(map, markers);

});
