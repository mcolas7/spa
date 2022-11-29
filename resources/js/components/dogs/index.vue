<template>
    <div class="table-responsive mt-2">
        <table class="table table-bordered table-hover caption-top align-middle">
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
                <tr v-for="dog in dogs.data" :key="dog.id" v-if="dogs.data.length > 0">
                    <td><img class="img-fluid" :src="ourImage(dog.image)" style="height: 60px;"></td>
                    <td>{{ dog.name }}</td>
                    <td>{{ dog.sexName }}</td>
                    <td>{{ dog.sizeName }}</td>
                    <td>{{ dog.breed }}</td>
                    <td>{{ dog.color }}</td>
                    <td v-if="dog.adopted === 1"> Yes</td>
                    <td v-else>No</td>
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
            dogs: {
                image:''
            }
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
        },
        ourImage(img) {
            return "/images/"+img;
        }

    }
}
</script>