<template>
    <div>
        <ul class="list">
            <li>Test</li>
            <li>What a result!</li>
            <li>Yaaaaas!</li>
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