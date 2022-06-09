<template>
    <div>
        <Login/>
        <IndexPage/>
    </div>
</template>





<script>
import IndexPage from '../components/IndexPage.vue';
import Login from '../components/Login.vue';


export default {
    name: 'App',
    data() {
        return {
            user: window.auth_user,
        }
    },
    components: {
        IndexPage,
        Login
    },
}
</script>

<style scoped>

</style>
