@extends('template')

 {{-- ======= Custom stylesheets only for this view =========  --}}
@section('stylesheets')
    <link rel="stylesheet" href="/css/jquery-ui.css">
@endsection


@section('heading')
    <div class="row my-2" >
        <div class="col-md-6">
            <h2>{{ $heading }}</h2>   
        </div>
        <div class="col-md-6">
            <form action="index" method="POST">
                {{csrf_field()}}
                <input type="text" name="" id="" class="month_picker px-4" value="<?= date('F Y',strtotime('last month')) ?>">
                <input class="btn btn-sm btn-secondary" formaction="{{route('electricity.show')}}" type="submit" value="Go">
        </div>
    </div>
@endsection

@section('content')    
    @foreach ($flats as $flat)
        <div class="row">
        <div class="col-md-4">
            <hr class="d-none d-md-block">
            <p> <strong>Flat: {{$flat->name}}</strong></p>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="form-group col">
                            <label for="" class="">Month-start reading</label>
                            <input class="form-control" type="number" name="start[$flat->id]" placeholder="Flat {{$flat->name}} month-start reading">
                        </div>
                        <div class="form-group col">
                            <label for="" class="">Month-end reading</label>
                            <input class="form-control" type="number" name="end[$flat->id]" placeholder="Flat {{$flat->name}} month-end reading">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        
        <input class="btn btn-secondary my-2 px-4" name="submit" type="submit" value="Save">
    
    </form>
@endsection

 {{-- ======= Custom javascript only for this view =========  --}}
@section('scripts')
    
<script src="/js/jquery-ui.js"></script>
<script src="/js/jquery.ui.monthpicker.js"></script>
<script>
        jQuery(".month_picker").monthpicker({
            changeYear: true,
            stepYears: 2,
            showOn:     "both",
            buttonImage: "/img/calendar.png",
            buttonImageOnly: false,
            dateFormat: 'MM, yy',
            showButtonPanel: true
		});
    </script>
@endsection
