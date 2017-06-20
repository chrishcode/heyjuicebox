@extends('layouts.app')

@section('content')
    <div class="body-section">
        <h3>THIS WEEK'S PROMOTION</h3>
        <this-weeks-promotion></this-weeks-promotion>
    </div>

    <div class="body-section">
        <h3>SCHEDULED PROMOTIONS</h3>
        <scheduled-promotions></scheduled-promotions>
    </div>
@endsection
