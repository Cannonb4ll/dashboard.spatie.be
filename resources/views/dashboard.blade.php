@extends('layouts/master')

@section('content')

@javascript(compact('pusherKey', 'pusherCluster', 'usingNodeServer'))

<dashboard id="dashboard" columns="4" rows="4">
    <twitter :initial-tweets="{{ json_encode($initialTweets) }}" position="a1:a4"></twitter>
    <time-weather position="d1" date-format="ddd DD/MM" time-zone="Europe/Amsterdam" weather-city="Nijkerk"></time-weather>

    <crypto-coin coin="ethereum" title="Ethereum" icon="cf-eth" position="b1"></crypto-coin>
    <crypto-coin coin="bitcoin" title="Bitcoin" icon="cf-btc" position="c1"></crypto-coin>
    <crypto-coin coin="neo" title="Neo" icon="cf-neos" position="b2"></crypto-coin>
    <crypto-coin coin="litecoin" title="Litecoin" icon="cf-ltc" position="c2"></crypto-coin>
    <crypto-coin coin="ripple" title="Ripple" icon="cf-xrp" position="b3"></crypto-coin>

    <internet-connection></internet-connection>
</dashboard>

@endsection
