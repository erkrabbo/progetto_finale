<template>
  <div class=""></div>
</template>

<script>
export default {
    name: 'IndexPage',
    created(){
        Axios.get(`${window.location.origin}/api/houses`)
        .then(response => {
            console.log(response)
        })
    }
}
</script>

<style>

</style>

