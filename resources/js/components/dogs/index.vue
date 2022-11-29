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
                    <td>Date</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                <tr v-for="dog in dogs.data" :key="dog.dog_id" v-if="dogs.data.length > 0">
                    <td><img class="img-fluid" :src="ourImage(dog.image)" style="height: 60px;"></td>
                    <td>{{ dog.name }}</td>
                    <td>{{ dog.sexName }}</td>
                    <td>{{ dog.sizeName }}</td>
                    <td>{{ dog.breed }}</td>
                    <td>{{ dog.color }}</td>
                    <td v-if="dog.adopted === 1"> Yes</td>
                    <td v-else>No</td>
                    <td>{{ dog.created_at }}</td>
                    <td>
                        <router-link class="btn btn-info btn-sm" :to="{ name: 'dogs.edit', params: { id:dog.dog_id }}">Edit</router-link>
                        <button @click="deleteDog(dog.dog_id)" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <pagination :data="dogs" @pagination-change-page="getResults"></pagination>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            dogs: {
                // image:''
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
        },
        deleteDog(dog_id) {
            this.$swal({
                title: 'Are you sure?',
                text: 'You won’t be able to revert this',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it'
            }).then((result) => {
                if(result.value) {
                    axios.delete('/api/dogs/'+dog_id)
                        .then(response => {
                            this.$swal({icon: 'success', title: 'Deleted successfully!'});
                            this.getResults();
                        })
                        .catch(error => {
                        this.$swal({icon: 'error', title: 'Error happened!'});
                        });
                }
            })
            
        }

    }
}
</script>