<template>
   <form action="/login" method="POST" @submit.prevent = "login()">
        <input type="text" name="email" id="email" placeholder="email" v-model="userMail">
        <input type="text" name="password" id="password" placeholder="password" v-model="userPassword">
        <button type="submit">sub</button>
    </form>
</template>

<script>
export default {
    name: 'Login',
    data() {
        return {
            userMail: '',
            userPassword: ''
        }
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
                    window.location.reload()
                })
            }
        )}
    }
}
</script>

<style scoped lang="scss">
    form {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>
