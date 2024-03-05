<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
    // Map initialization
    var map = L.map('map').setView([14.0860746, 100.608406], 6);

    //osm layer
    var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    });
    osm.addTo(map);

    if(!navigator.geolocation) {
        console.log("Your browser doesn't support geolocation feature!")
    } else {
        setInterval(() => {
            navigator.geolocation.getCurrentPosition(getPosition)
        }, 5000);
    }

    var marker;

    function getPosition(position){
        // console.log(position)
        var lat = position.coords.latitude
        var long = position.coords.longitude
        var accuracy = position.coords.accuracy

        if(marker) {
            map.removeLayer(marker)
        }

        marker = L.marker([lat, long])
        circle = L.circle([lat, long], {radius: accuracy})

        var featureGroup = L.featureGroup([marker]).addTo(map)

        map.fitBounds(featureGroup.getBounds())

        console.log(lat + " " +long)
        console.log(accuracy)
    }
</script>
