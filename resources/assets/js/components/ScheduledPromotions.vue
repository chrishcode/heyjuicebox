<template>
    <div>
        <promotion v-for="(promotion, index) in promotions" :promotion="promotion" :index="index" :key="promotion.link" :deletePromotionParent="deletePromotion" :sortPromotionsParent="sortPromotions"></promotion>
        <div class="signup-form">
            <button class="btn btn-primary" v-on:click="addPromotion">
                SCHEDULE A NEW PROMOTION
            </button>
        </div>
    </div>
</template>

<script>
    import moment from 'moment'
    export default {
        mounted() {
        },
        data() {
            return {
                promotions: []
            }
        },
        methods: {
            addPromotion() {
                this.promotions.push(
                    {
                        dates: {
                            startDate: moment().add(this.promotions.length + 1, 'weeks').startOf('isoWeek').format('Y-MM-DD hh:mm:ss'),
                            endDate: moment().add(this.promotions.length + 1, 'weeks').endOf('isoWeek').format('Y-MM-DD hh:mm:ss')
                        },
                        link: 'http://sv.lipsum.com/feed/html',
                        brand: {
                            name: 'Lorem ipsum',
                            description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at rhoncus nulla. Praesent placerat nibh sed neque aliquam, non feugiat enim condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at rhoncus nulla. Praesent placerat nibh sed neque aliquam, non feugiat enim condimentum.',
                            image: 'http://sv.lipsum.com/feed/html'
                        }
                    }
                )
            },
            deletePromotion(promotion) {
                this.promotions.splice(promotion, 1)
            },
            sortPromotions() {
                this.promotions.sort( (a, b) => {
                    return new Date(a.dates.startDate) - new Date(b.dates.startDate)
                })
            }
        }
    }
</script>
