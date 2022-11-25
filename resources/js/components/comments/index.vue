<template>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Breed</td>
                    <td>Color</td>
                </tr>
            </thead>
            <tbody>
                <tr v-for="dog in dogs">
                    <td>{{ dog.name }}</td>
                    <td>{{ dog.breed }}</td>
                    <td>{{ dog.color }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data(){
        return {
            dogs: []
        }
    },
    mounted(){
        axios.get('/api/dogs').then(response => {
            this.dogs = response.data.data;
        });
    }
}
</script>