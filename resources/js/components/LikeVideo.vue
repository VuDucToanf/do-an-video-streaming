<template>
<div>
    <a :class="(liked == 'active')?'like active':'like'"
        @click="controlLike">
        <i class="fas fa-thumbs-up"></i>
        {{ this.likes }}
    </a>
</div>
</template>

<script>
export default {
    name: "LikeVideo",
    props: ['user', 'video'],
    data() {
        return {
            liked: null,
            likes: 0,
            formData: {
                content: '',
                user_id: this.user.id,
                video_id: this.video.id,
            },
            likeData: {
                user_id: this.user.id,
                video_id: this.video.id,
            }
        }
    },
    created() {
        this.getLikes();
    },
    methods: {
        addLike(){
            axios.post('/like/store', this.likeData).then((response) => {
                this.likes++;
                this.liked = 'active';
            })
        },
        removeLike(){
            axios.post('/like/delete', this.likeData).then((response) => {
                this.likes--;
                this.liked = '';
            })
        },
        getLikes(){
            axios.get('/getLikes/'+ this.video.id).then((response) => {
                this.likes = response.data.likes.length;
                this.liked = response.data.liked;
            }).catch((errors) => {
                console.log(errors);
            })
        },
        controlLike(){
            if(this.liked == 'active'){
                this.removeLike();
            }
            else{
                this.addLike();
            }
        }
    }
}
</script>

<style scoped>
    .like.active i{
        color: #0000cc;
    }
    .like{
        cursor: pointer;
        font-size: 20px;
    }
</style>
