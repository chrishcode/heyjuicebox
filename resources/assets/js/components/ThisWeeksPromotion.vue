<template>
    <promotion :promotion="promotion" :key="promotion.link"></promotion>
</template>

<script>
    export default {
        mounted() {
        },
        data() {
            return {
                promotion: 
                {
                    dates: {
                        startDate: '2017-06-19 12:00:00',
                        endDate: '2017-06-25 11:59:59'
                    },
                    link: 'https://www.materialui.co/colors',
                    brand: {
                        name: 'Finn cold press',
                        description: 'At FINN COLD PRESS, we have created an honest range of organic, cold-pressed juices and smoothies, with a focus on taste and genuine health benefits. Our range comprises a rainbow of beautiful, organic products, flooding your body with pure liquid nutrition.',
                        image: 'http://cdn2.bigcommerce.com/server5900/1ds7tb/product_images/logo.jpg'
                    }
                }
            }
        },
        methods: {
            
        }
    }
</script>
