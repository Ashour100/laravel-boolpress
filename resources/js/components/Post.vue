<template>
    <div class="card mb-2" style="width: 18rem;" @click="redirect">
        <img :src="post.image_url" class="card-img-top" :alt="post.title">
        <div class="card-body">
            <h5 class="card-title">{{ post.title }}</h5>
            <p class="card-text">{{ post.content }}</p>
        </div>
    </div>
</template>

<script>
export default {
    name:"Post",
    props:['post'],
    methods:{
        redirect(){
            window.location.href = 'http://127.0.0.1:8000/admin/posts/'+this.post.id;
        },
    }
}
</script>

<style>

</style>