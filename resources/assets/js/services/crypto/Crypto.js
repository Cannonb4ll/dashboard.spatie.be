import axios from 'axios';

class Crypto {

    async coinData(coin) {
        const response = await this.performQuery(coin);

        return response.data[0];
    }

    async performQuery(coin) {
        const endpoint = `https://api.coinmarketcap.com/v1/ticker/${coin}/`;

        return await axios.get(endpoint);
    }
}

export default new Crypto();
