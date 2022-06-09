<template>
    <div>
        <form action="/login" method="POST" @submit.prevent = "login()">
            <input type="text" name="email" id="email" placeholder="email" v-model="userMail">
            <input type="text" name="password" id="password" placeholder="password" v-model="userPassword">
            <button type="submit">sub</button>
        </form>

        <IndexPage/>
    </div>
</template>





<script>
import IndexPage from '../components/IndexPage.vue';


export default {
    name: 'App',
    data() {
        return {
            userMail: '',
            userPassword: ''
        }
    },
    components: {
        IndexPage,
    },
    methods: {
        login() {
            Axios.get('/sanctum/csrf-cookie').then(response => {
                Axios.post('/login', {
                    email: this.userMail,
                    password: this.userPassword,
                })
                .then(response => {
                    console.log(response)
                })
            }
        )}
    }
}
</script>

<style scoped>

</style>
