<template>
    <div>
        <ul v-for="holiday in holidays" class="list">
            <li>{{ holiday.hours_requested }}</li>
            <li>{{ holidayid }}</li>
            <li>{{ holidayprebooked }}</li>
        </ul>
    </div>
</template>

<script>

    export default {

        data() {
            return {
                holidays: []
            }
        },

        mounted() {
            
            axios.get('/holidays').then(response => this.holidays = response.data);

        }

    }
        
</script>