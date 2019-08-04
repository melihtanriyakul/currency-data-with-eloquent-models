<template>
    <div class="currency-container">
        <div class="title">Currency Rates</div>
        <ul class="currencies">
            <li v-for="(rate, currency) in results.quotes">
                <label>{{currency}}</label>
                {{rate}}
            </li>
        </ul>
    </div>
</template>
<script>
    export default {
        props: ['results']
    }
</script>
<style scoped>
    * {
        box-sizing: border-box;
        outline: none;
    }

    .currencies {
        list-style: none;
    }

    .currency-container {
        width: 100%;
        max-width: 540px;
        background-color: #fff;
        box-shadow: 8px 8px 16px rgba(0, 0, 0, 0.12);
        display: table;
        margin: auto;
        border-radius: 6px;
        padding: 30px;
    }

    .currencies li {
        width: 30%;
        border: 1px solid #ccc;
        border-radius: 6px;
        padding: 6px;
        transition: all 0.3s;
        margin: 15px 25px;
        font-size: 20px;
        float:left;
        text-align: center;
    }

    .currencies label {
        font-size: 20px;
        color: #001de8;
        margin-top: 5px;
        display: block;
    }
    .title {
        font-size: 40px;
        color: #001de8;
        margin: 0 auto;
        width: 300px;
    }
</style>