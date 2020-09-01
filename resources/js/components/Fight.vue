<template>
    <b-container fluid class="p-0 m-0">
        <div :class="[isMainEvent, isEven, 'fight-card']">
            <b-row class="justify-content-md-center">
                <span class="category font-weight-bold">{{ category }}</span>
            </b-row>
            <b-row class="justify-content-md-center">
                <b-col col lg="4" class="text-right">
                    <b-row>
                        <b-col>
                            <span>{{ fighter1 }}</span>
                        </b-col>
                    </b-row>
                    <b-row>
                        <b-col class="cartel">
                            <small>[ {{ cartel1 }} ]</small>
                        </b-col>
                    </b-row>
                </b-col>
                <b-col cols="12" md="auto">vs</b-col>
                <b-col col lg="4" class="text-left">
                    <b-row>
                        <b-col>
                            <span>{{ fighter2 }}</span>
                        </b-col>
                    </b-row>
                    <b-row>
                        <b-col class="cartel">
                            <small>[ {{ cartel2 }} ]</small>
                        </b-col>
                    </b-row>
                </b-col>
            </b-row>
        </div>
    </b-container>
</template>

<script>
export default {
    name: "Fight",
    props: {
        category: {
            type: String,
            required: true
        },
        fighter1: {
            type: String,
            required: true
        },
        fighter2: {
            type: String,
            required: true
        },
        cartel1: {
            type: String,
            required: true
        },
        cartel2: {
            type: String,
            required: true
        },
        order: {
            type: Number,
            required: true
        },
        rank: {
            type: [Number, String],
            required: true
        },
        human: {
            type: [Number, String],
            required: true
        }
    },
    computed: {
        isMainEvent(){
            return (this.order == 1) ? 'main-event' : '';
        },
        isEven(){
            return (this.order % 2 == 0) ? 'even' : '';
        }
    },

}
</script>

<style lang="scss">
    .fight-card{
        padding: 15px 0;
        background-color: #545454;
        height: 75px;
    }

    .category{
        font-family: RobotoBold;
        line-height: 3px;
        font-size: .8rem;
    }

    .main-event{
        font-size: 1.3rem;
        background-color: #333333;
    }

    .cartel{
        line-height: 6px;
    }

    .even{
        background-color: #494949;
    }

</style>
