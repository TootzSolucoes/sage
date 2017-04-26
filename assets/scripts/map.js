function initMap() {
  var iconPath = "http://cienciasaplicadas.com.br/wp-content/themes/ciencias-aplicadas-theme/assets/images/pin.png";
  console.log(iconPath);
  $('[data-toggle="map"]').each(function () {
    $this = $(this);

    if ($this.attr('data-map-lat') && $this.attr('data-map-lng')) {
      var latLng = {
        lat: parseFloat($this.attr('data-map-lat')),
        lng: parseFloat($this.attr('data-map-lng'))
      };

      var map = new google.maps.Map($this[0], {
        center: latLng,
        scrollwheel: false,
        zoom: 16,
        mapTypeControlOptions: {
          mapTypeIds: [google.maps.MapTypeId.ROADMAP]
        },
      });
      var marker = new google.maps.Marker({
        map: map,
        position: latLng,
        icon: iconPath,
        title: $this.attr('data-map-marker-title')
      });
    }
  });
}
