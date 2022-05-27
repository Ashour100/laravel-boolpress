<template>
    <div>
    <h1 class="mt-3 ml-3">Latest Posts</h1>
        <PostList/>
    </div>
</template>

<script>
import PostList from '../components/PostList.vue'
export default {
    name:'Posts',
    components:{
        PostList
    }
}
</script>

<style>

</style>