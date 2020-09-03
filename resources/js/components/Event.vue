<template>
    <SidebarOption :schema="schema" :model="model" :options="formOptions"></SidebarOption>
</template>

<script>
import SidebarOption from "./SidebarOption";
export default {
    name: "Event",
    components: { SidebarOption },
    data() {
        return {
            model: {
                title: '',
                subtitle: '',
                number_fights: ''
            },
            schema: {
                groups: [{
                    legend: 'New Event',
                    fields: [{
                        type: 'input',
                        inputType: 'text',
                        label: 'Event name:',
                        model: 'title',
                        required: true,
                        placeholder: "UFC 222",
                        validator: "string"
                    }, {
                        type: 'input',
                        inputType: 'text',
                        label: 'Subtitle:',
                        model: 'subtitle',
                        placeholder: "Fight Night"
                    }, {
                        type: "select",
                        model: 'number_fights',
                        label: "Number of Fights:",
                        required: true,
                        values: [8, 10, 12],
                        validator: "number"
                    }, {
                        type: "submit",
                        buttonText: 'Save',
                        classes: "btn-location",
                        validateBeforeSubmit: true,
                        onSubmit: this.formSubmit
                    }]
                }],
            },
            formOptions: {
                validateAfterLoad: true,
                validateAfterChanged: true,
                validateAsync: true
            }
        };
    },
    methods: {
        formSubmit(){
            axios.post('/api/events', { data : this.model })
                .then( (response) => {
                    if(response.data.status == true){
                        this.cleanForm();
                    }else{

                    }
                }).catch( (response) =>{
                console.log(response);
            });
        },
        cleanForm(){
            this.model.title = '';
            this.model.subtitle = '';
            this.model.number_fights = '';
        }
    },
}
</script>

<style scoped>

</style>
