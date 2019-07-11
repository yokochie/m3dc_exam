@extends('layouts.layoutindex')

@section('content')

	<div class="container">
		<div class="container-component">

        	<div class="pageWrap">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">{{ $config['M3DC_SEMINAR_TITLE'] }} </div>
                    <div class="panel-body">
                        <pre class="list-unstyled ">
{{ $config['VIEW_INFO_DATE'] }}
{{ $config['VIEW_INFO_TITLE'] }}
{{ $config['VIEW_INFO_PROF'] }}</pre>

                        <div>
                            <iframe class="center-block" width="500" height="550" srcdoc="<img src=&quot;img/m3dc_logo.png&quot;>"></iframe>
                        </div>

                    </div>
                    <div class="panel-footer">
                        <p class="glyphicon glyphicon-warning-sign text-danger">　PCでご視聴の場合はVPNを切断しご覧ください</p>
                    </div>
                </div>

                <div class="col-sm-12 contactBox">
                	<a target="_blank" href="{{ $config['INQUIRY_URL'] }}">接続に関する技術的な質問等ございましたら、こちらからお問い合わせ下さい。</a>
            	</div>
	        </div>

        </div>
    </div>

@endsection
