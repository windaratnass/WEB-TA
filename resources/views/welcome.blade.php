@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <div id="map"></div>
  
                        <script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
                        <script>
                            var map = L.map('map').setView([-6.219184, 106.8016267], 13);
                            var osmMap = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { 
                            attribution: 'OpenStreetMap',
                            minZoom: 0,
                            maxZoom: 20,
                            }).addTo(map);
                        </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
