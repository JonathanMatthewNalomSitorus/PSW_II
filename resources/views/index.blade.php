@extends('layout.template')

@section('title', 'National Badminton Court')

@section('active-home', 'active')

@section('content-header')	
    <center>
    <div class="banner">
        <div style="background-color: white;">
            <h2 style="color: black;">Lapangan Nasional</h2>
        </div>
        <div class="now">
            <a href="{{ route('booking') }}" style="background-color: white; color: black; padding: 13px; margin-top: 20px;">Pesan Sekarang</a>
            <div class="clearfix"> </div>
        </div>
    </div>
    </center>
@endsection

@section('content')
    <div class="sap_tabs">
        <div class="container">

            <div style="margin-bottom: 10px; display: flex; justify-content: center; align-items:center;">

                <img src="{{ asset('assets2/images/th.jpeg') }}" class="img-responsive" style="width: 500px; height:300px;" alt="error" />
                
            </div>
            <p style="text-align: center; text-transform: uppercase; font-size: 20px; font-weight: 600;">Lapangan 1</p>
            
            <div style="margin-bottom: 10px; display: flex; justify-content: center; align-items:center;">
                
                <img src="{{ asset('assets2/images/lap2.jpeg') }}" class="img-responsive" style="width: 500px; height:300px;" alt="" />
                
            </div>
            <p style="text-align: center; text-transform: uppercase; font-size: 20px; font-weight: 600;">Lapangan 2</p>
            
           

        </div>
    </div>


@endsection