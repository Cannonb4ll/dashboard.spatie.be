<template>
    <tile :position="position">
        <section class="time-weather">
            <time class="time-weather__content">
                <span class="time-weather__weather">
                    <span class="time-weather__weather__description">
                        <i class="fa fa-money fa-3x"></i>
                    </span>
                </span>
                <span class="time-weather__date">{{ title }}</span>
                <span class="time-weather__time">${{ value.price_usd }}</span>
            </time>
        </section>
    </tile>
</template>

<script>
    import Tile from './atoms/Tile';
    import crypto from '../services/crypto/Crypto';

    export default {

        components: {
            Tile,
        },

        props: ['position', 'coin', 'title'],

        data() {
            return {
                value: {
                    price_usd: 0
                },
            };
        },


        created() {
            this.fetchCoin();
            setInterval(this.fetchCoin, 15 * 60 * 1000);
        },

        methods: {
            async fetchCoin() {
                const coin = await crypto.coinData(this.coin);

                this.value = coin;
            },
        },
    };
</script>
