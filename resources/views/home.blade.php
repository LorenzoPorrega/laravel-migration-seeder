@extends('layouts.public')
@section('title', 'Home')
@section('content')
<div class="container mt-3">
  <div class="row g-4 d-flex justify-content-center">
    @foreach ($trains as $singleTrain)
      <div class="col-12 col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center">
        <div class="card h-100" style="width: 18rem;">
          <div class="card-body text-center">
            <p class="card-text"><span class="title">Company:</span> {{ $singleTrain['company'] }}</p>
            <p class="card-text"><span class="title">Departure station:</span> {{ $singleTrain['departure_station'] }}</p>
            <p class="card-text"><span class="title">Arrival station:</span> {{ $singleTrain['arrival_station'] }}</p>
            <p class="card-text"><span class="title">Departure date:</span> {{ $singleTrain['date'] }}</p>
            <p class="card-text"><span class="title">Departure time:</span> {{ $singleTrain['departure_time'] }}</p>
            <p class="card-text"><span class="title">Arrival time:</span> {{ $singleTrain['arrival_time'] }}</p>
            <p class="card-text"><span class="title">Train ID:</span> {{ $singleTrain['train_id'] }}</p>
            <p class="card-text"><span class="title">Number of Wagons:</span> {{ $singleTrain['wagons_number'] }}</p>
            @php
              $onTime = "";
            @endphp
            @if ($singleTrain['on_time'] === 1)
              @php
                $onTime = "yes";
              @endphp
            @else ()
              @php
                $onTime = "no";
              @endphp
            @endif
            <p class="card-text"><span class="title">On time:</span> @php echo $onTime @endphp</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
