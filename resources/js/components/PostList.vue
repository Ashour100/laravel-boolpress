<template>
<div class="wrapper">
    <div class="d-flex flex-wrap justify-content-between p-3">
        <Post v-for="(post,index) in posts" :key="index" :post="post"/>
    </div>
    <nav aria-label="Page navigation">
        <ul class="pagination d-flex justify-content-center">
            <li class="page-item" v-if="pagination.current_page > 1" @click="getPosts(pagination.current_page - 1)">
                <a class="page-link">Previous</a>
            </li>
            <li class="page-item">
                <a class="page-link">{{pagination.current_page}}</a>
            </li>
            <li class="page-item" v-if="pagination.current_page < pagination.last_page" @click="getPosts(pagination.current_page + 1)">
                <a class="page-link">Next</a>
            </li>
        </ul>
    </nav>
</div>
</template>

<script>
import Axios from 'axios';
import Post from './Post';
export default {
    name:"postList",
    components:{
        Post,
    },
    data:function (){
        return{
            posts:[],
            pagination:{},
        }
    },
    methods:{
        getPosts(page){
            Axios.get(`http://127.0.0.1:8000/api/posts?page=${page}`)
            .then((result)=>{
                this.posts=result.data.data;
                this.pagination= result.data;
            }).catch((error)=> {
                console.error(error);
            })
        }
    },
    created(){
        this.getPosts(1);
    },
}
</script>

<style lang="scss" scoped>
    .page-item{
        cursor: pointer;
    }
</style>