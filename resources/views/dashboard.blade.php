@extends('layouts/master')

@section('content')

@javascript(compact('pusherKey', 'pusherCluster', 'usingNodeServer'))

<dashboard id="dashboard" columns="3" rows="3">
    <twitter :initial-tweets="{{ json_encode($initialTweets) }}" position="a1:a3"></twitter>
    <time-weather position="c1" date-format="ddd DD/MM" time-zone="Europe/Amsterdam" weather-city="Nijkerk"></time-weather>

    <crypto-coin coin="ethereum" title="Ethereum" position="b1"></crypto-coin>
    <crypto-coin coin="bitcoin" title="Bitcoin" position="b2"></crypto-coin>

    <internet-connection></internet-connection>
</dashboard>

@endsection
