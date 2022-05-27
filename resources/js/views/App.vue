<template>
<div class="wrapper">
    <h1 class="mt-3 ml-3">Latest Posts</h1>
    <PostList/>
</div>
</template>

<script>
import PostList from '../components/PostList';
export default {
    name:"root",
    components:{
        PostList
    },
}
</script>

<style lang="scss" scoped>
@import'~bootstrap/dist/css/bootstrap.css'
</style>