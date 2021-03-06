function initialize() {
var mapOptions = {
    zoom: 6,
    center: new google.maps.LatLng(48,2),
    mapTypeId: google.maps.MapTypeId.ROADMAP
}
var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
var features = [
      {position: new google.maps.LatLng(48.692054,6.184417), title: 'Nancy', content: '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h3 id="firstHeading" class="firstHeading">HOTEL SIMPLON NANCY</h3>'+
      '<div id="bodyContent">'+
      '<p><img src="hotel.jpeg">bla bla bla bla bla bla '+
      'bla bla bla.</p>'+
      '<p>bla bla bla<a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">site web de l hôtel</a></p>'+
      '</div>'+
      '</div>'},
      {position: new google.maps.LatLng(48.856614,2.352222), title: 'Paris'},
      {position: new google.maps.LatLng(50.95129,1.858686), title: 'Calais'},
      {position: new google.maps.LatLng(49.762085,4.726096),title: 'Charleville-Mezieres', content:'<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h3 id="firstHeading" class="firstHeading">HOTEL SIMPLON CHARLEVILLE</h3>'+
      '<div id="bodyContent">'+
      '<p><img src="hotel.jpeg">bla bla bla bla bla bla '+
      'bla bla bla.</p>'+
      '<p>bla bla bla<a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">site web de l hôtel</a></p>'+
      '</div>'+
      '</div>'},
      {position: new google.maps.LatLng(48.117266,-1.677793), title: 'Rennes'},
      {position: new google.maps.LatLng(47.658236,-2.760847), title: 'Vannes'},
      {position: new google.maps.LatLng(45.26565,1.771697), title: 'Tulle', content:'<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h3 id="firstHeading" class="firstHeading">HOTEL SIMPLON TULLE</h3>'+
      '<div id="bodyContent">'+
      '<p><img src="hotel.jpeg">bla bla bla bla bla bla '+
      'bla bla bla.</p>'+
      '<p>bla bla bla<a href="https://www.simplon.co">site web de l hôtel</a></p>'+
      '</div>'+
      '</div>'},
      {position: new google.maps.LatLng(43.2951,-0.370797), title: 'Pau'},
      {position: new google.maps.LatLng(43.212161,2.353663), title: 'Carcassonne'},
      {position: new google.maps.LatLng(43.184277,3.003078), title: 'Narbonne'},
      {position: new google.maps.LatLng(43.610769,3.876716), title: 'Montpellier'},
      {position: new google.maps.LatLng(44.127204,4.083352), title: 'Ales'},
      {position: new google.maps.LatLng(43.296482,5.36978), title: 'Marseille'},
      {position: new google.maps.LatLng(43.552847,7.017369), title: 'Cannes'},
      {position: new google.maps.LatLng(46.568059,3.334417), title: 'Moulins'},
      {position: new google.maps.LatLng(44.349389,2.575986), title: 'Rodez'},
      {position: new google.maps.LatLng(46.034432,4.072695), title: 'Roanne'},
      {position: new google.maps.LatLng(48.172402,6.449403), title: 'Epinal'}
];
features.forEach(function(feature) {
      var infowindow = new google.maps.InfoWindow({
     maxWidth:250 ,
    content: feature.content
  });

  var marker = new google.maps.Marker({
    position: feature.position,
    title:feature.title,
    icon: 'markerlogo.png',
    map: map
  });

  marker.addListener('click', function() {
    infowindow.open(map, marker);
    
  });

    });


}
