<script setup>
import {reactive, ref} from "vue";
import axios from "axios";

const fullName = ref('')
const phone = ref()
const message = ref('')

const create = async () => {
    const form = reactive({
        full_name: fullName,
        phone: phone,
        message: message
    });

    try {
        await axios.post('/api/response-form', form)
        location.reload()
    }
    catch (error) {
        console.log(error.response.data)
    }
}
</script>

<template>
    <div class="container">
        <form @submit.prevent="create">
            <div class="mb-3">
                <label for="exampleInputFullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="exampleInputFullName" v-model="fullName" placeholder="Full Name" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPhone" class="form-label">Phone</label>
                <input type="number" class="form-control" id="exampleInputPhone" v-model="phone" placeholder="87007007070" required>
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" v-model="message" required></textarea>
                    <label for="floatingTextarea2">Your Message</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</template>

<style scoped>

</style>
