<template>
<div class="wrapper">
    <Header/>
    <Main/>
</div>
</template>

<script>
import Header from '../components/Header';
import Main from '../components/Main';

export default {
    name:"root",
    components:{
        Header,
        Main
    },
}
</script>

<style lang="scss" scoped>
@import'~bootstrap/dist/css/bootstrap.css'
</style>