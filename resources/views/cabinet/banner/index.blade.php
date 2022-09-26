@extends('cabinet.layouts.app')

@section('cabinet-content')
    <div class="content">
        <div class="container-fluid">
            <div class="cardfon">
                <div class="row row-deck row-cards">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body" align="center">
                                <label class="form-label">Banner 728x90px</label><br><br>
                                <img src="{{ asset('assets/banners/bn_2_Zz5Kw.gif') }}" style="width: 728px;"><br><br>
                                <textarea class="form-control" style="text-align: center;" onClick="select()" readonly>
          <a href="{{ route('referral',['username' => auth()->user()->name]) }}" target="_blank"><img src="{{ asset('assets/banners/bn_2_Zz5Kw.gif') }}"/></a>
        </textarea>
                                <br>
                                <label class="form-label">Banner 468x60px</label><br><br>
                                <img src="{{ asset('assets/banners/bn_1_XUaIL.gif') }}" style="width: 468px;"><br><br>
                                <textarea class="form-control" style="text-align: center;" onClick="select()" readonly>
          <a href="{{ route('referral',['username' => auth()->user()->name]) }}" target="_blank"><img src="{{ asset('assets/banners/bn_1_XUaIL.gif') }}"/></a>
        </textarea>
                                <br>
                                <label class="form-label">Banner 125x125px</label><br><br>
                                <img src="{{ asset('assets/banners/bn_3_ZQgQp.gif') }}" style="width: 125px;"><br><br>
                                <textarea class="form-control" style="text-align: center;" onClick="select()" readonly>
          <a href="{{ route('referral',['username' => auth()->user()->name]) }}" target="_blank"><img src="{{ asset('assets/banners/bn_3_ZQgQp.gif') }}"/></a>
        </textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
