@extends('layouts.app')
@section('content')
    <script>
        fetch('/api/regions')
            .then(response => response.json())
            .then(data => {

                data.forEach(element => {
                    var elemDiv = document.createElement('div');
                    elemDiv.innerHTML = '<h2>' + element.name + '</h2>';
                    document.body.appendChild(elemDiv);

                });

            })
            .catch(error => {
                console.log(error)
            });
    </script>
@endsection
