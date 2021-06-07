<template>
    <div class="row justify-content-center mt-3">
        <div class="col-sm-4 col-lg-3 col-xl-2">
            <div class="profile text-center mt-10 p-20 bg-white bg-very-dark-dm">
                <img :src="`https://minecraftapi.net/api/v1/profile/james090500/avatar?size=256&overlay=true`" class="profileimg img-fluid"/>
                <h4><NameView/></h4>
                <GameView/>
            </div>
        </div>
        <div class="col-sm-6 pl-10">
            <NewPost/>
            <transition name="fade">
                <ShowPost/>
            </transition>
            <p class="text-center mt-3 p-3 mx-auto d-block post" id="noMorePosts">¯\_(ツ)_/¯ You're all caught up!</p>
        </div>
    </div>
</template>

<style scoped>
    .profileimg {
        margin-bottom: 2vh;
        /* border: 10px solid white; */
        box-shadow: 0px 0px 20px 4px rgba(0, 0, 0, 0.25);
    }
</style>

<script>
    import NameView from '@/partials/user/NameView.vue';
    import GameView from '@/partials/user/GameView.vue';
    import NewPost from '@/partials/post/NewPost.vue';
    import ShowPost from '@/partials/post/ShowPost.vue';

    export default {
        components: {
            NameView,
            GameView,
            NewPost,
            ShowPost
        }
    }
</script>
