<template>
    <tile :position="position">
        <section class="time-weather">
            <time class="time-weather__content">
                <span class="time-weather__weather">
                    <span class="time-weather__weather__description">
                        <i class="cf" v-bind:class="icon"></i>
                    </span>
                </span>
                <span class="time-weather__date">{{ title }}</span>
                <span class="time-weather__time">{{ value.price_usd | currency }}</span>
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

        props: ['position', 'coin', 'title', 'icon'],

        data() {
            return {
                value: {
                    price_usd: 0
                },
            };
        },


        created() {
            this.fetchCoin();
            setInterval(this.fetchCoin, 10 * 30 * 1000);
        },

        methods: {
            async fetchCoin() {
                const coin = await crypto.coinData(this.coin);

                this.value = coin;
            },
        },
    };
</script>
