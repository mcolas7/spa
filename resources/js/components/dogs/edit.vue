<template>
    <div class="container">
        <form @submit.prevent="submit_form" action="" class="needs-validation" novalidate enctype="multipart/form-data">

            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" v-model="fields.name" maxlength="20" required>
                    <div class="invalid-feedback">
                        A valid name must be added.
                    </div>
                    <div class="valid-feedback">Valid name!</div>
                    <div class="alert alert-danger" v-if="errors && errors.name">
                        {{ errors.name[0] }}
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="image" class="form-label">Image <span class="text-muted">(JPG, JPEG, PNG)</span></label>
                    <input type="file" class="form-control" id="image" @change="select_file" accept=".jpg, .jpeg, .png" required>
                    <div class="invalid-feedback">
                        A valid image must be added.
                    </div>
                    <div class="valid-feedback">Valid image!</div>
                    <div class="alert alert-danger" v-if="errors && errors.image">
                        {{ errors.image[0] }}
                    </div>
                </div>
                <div class="form-group col-md-6 mt-3">
                    <label class="form-label" for="sex_id">Sex:</label><br>
                    <select class="form-control" id="sex_id" v-model="fields.sex_id" required>
                        <option value="" selected>Choose..</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                    </select>
                    <div class="invalid-feedback">
                        A valid sex must be added.
                    </div>
                    <div class="valid-feedback">Valid sex!</div>
                    <div class="alert alert-danger" v-if="errors && errors.sex">
                        {{ errors.sex[0] }}
                    </div>
                </div>
                <div class="form-group col-md-6 mt-3">
                    <label class="form-label" for="size_id">Size:</label><br>
                    <select class="form-control" id="size_id" v-model="fields.size_id" required>
                        <option value="" selected>Choose..</option>
                        <option value="1">Small</option>
                        <option value="2">Medium</option>
                        <option value="3">Large</option>
                    </select>
                    <div class="invalid-feedback">
                        A valid size must be added.
                    </div>
                    <div class="valid-feedback">Valid size!</div>
                    <div class="alert alert-danger" v-if="errors && errors.size">
                        {{ errors.size[0] }}
                    </div>
                </div>
                <div class="col-sm-6 mt-3">
                    <label for="breed" class="form-label">Breed:</label>
                    <input type="text" class="form-control" id="breed" v-model="fields.breed" placeholder="Write the breed of the dog" value="" maxlength="50" required>
                    <div class="invalid-feedback">
                        A valid breed must be added.
                    </div>
                    <div class="valid-feedback">Valid breed!</div>
                    <div class="alert alert-danger" v-if="errors && errors.breed">
                        {{ errors.breed[0] }}
                    </div>
                </div>
                <div class="col-sm-6 mt-3">
                    <label for="color" class="form-label">Color:</label>
                    <input type="text" class="form-control" id="color" v-model="fields.color" placeholder="Enter the color of the dog" value="" maxlength="50" required>
                    <div class="invalid-feedback">
                        A valid colour must be added.
                    </div>
                    <div class="valid-feedback">Valid colour!</div>
                    <div class="alert alert-danger" v-if="errors && errors.color">
                        {{ errors.color[0] }}
                    </div>
                </div>
                <div class="container-fluid mt-3 text-center">
                    <button class="w-50 btn btn-primary btn-lg" type="submit" id="submit" :disabled="form_submitting" :value="form_submitting ? 'Saving comment...' : 'Save comment' ">NEW DOG</button>
                </div>
                
            </div>
        </form>                
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            fields: {
                'name': '',
                'image': null,
                'sex_id': '',
                'size_id': '',
                'breed': '',
                'color': ''
            },
            errors: {},
            form_submitting: false
        }
    },
    mounted() {
        axios.get('/api/dogs/'+this.$route.params.id)
        .then(respose => {
            this.fields = respose.data.data;

        });
    },
    methods: {
        select_file(event) {
            this.fields.image = event.target.files[0];
        },
        submit_form() {
            this.form_submitting = true;
            // pass image
            let fields = new FormData();
            for (let key in this.fields) {
                fields.append(key, this.fields[key]);
            }
            axios.put('/api/dogs/'+this.params.id, fields)
                .then(response => {
                    this.$swal({icon: 'success', title: 'Dog updated!'})
                    this.$router.push('/');
                    this.form_submitting = false;
                })
                .catch(error => {
                    this.$swal({icon: 'error', title: 'Error happened!'}); //Si no funciona posar dintre del if
                    if (error.response.status === 422) {
                        this.errors = error.response.data.errors;
                    }
                    this.form_submitting = false;
                });
        }
    }
}

</script>