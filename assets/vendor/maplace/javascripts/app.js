
  $(document).ready(function() {
    //Tabs Example
    var tabs = new Maplace({
      map_div: '#gmap-5',
      controls_div: '#controls-5',
      start: 1,
      controls_type: 'list',
      controls_on_map: false,
      show_infowindows: false,
      view_all: false,
      locations: LocsB,
      afterShow: function(index, location, marker) {
        $('#info').html(location.html);
      }
    });

    $('#dtabs').one('inview', function(event, isInView) {
      if (isInView) {
        tabs.Load();
      } 
    }); 

  });//ready
