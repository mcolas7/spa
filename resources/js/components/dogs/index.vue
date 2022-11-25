<template>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <td>Image</td>
                    <td>Name</td>
                    <td>Sex</td>
                    <td>Size</td>
                    <td>Breed</td>
                    <td>Color</td>
                    <td>Adopted</td>
                    <td>Created at</td>
                </tr>
            </thead>
            <tbody>
                <tr v-for="dog in dogs.data" :key="dog.id">
                    <td>{{ dog.image }}</td>
                    <td>{{ dog.name }}</td>
                    <td>{{ dog.sexName }}</td>
                    <td>{{ dog.sizeName }}</td>
                    <td>{{ dog.breed }}</td>
                    <td>{{ dog.color }}</td>
                    <td>{{ dog.adopted }}</td>
                    <td>{{ dog.created_at }}</td>
                </tr>
            </tbody>
        </table>

        <pagination :data="dogs" @pagination-change-page="getResults"></pagination>
    </div>
</template>

<script>
export default {
    data() {
        return {
            dogs: {}
        }
    },
    mounted() {
        this.getResults();
        
    },
    methods: {
        // Our method to Get results from a Laravel endpoint
        getResults(page = 1) {
            axios.get('/api/dogs?page=' + page)
                    .then(response => {
                            this.dogs = response.data;
                    });
        }
    }
}
</script>