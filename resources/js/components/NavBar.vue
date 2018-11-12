<template>
    
</template>

<script>

    export default {

        data() {
            return {
                
            }
        },

        mounted() {
            
            axios.get('/holidays').then(response => this.holidays = response.data);

        }

    }
        
</script>