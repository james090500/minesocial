<template>
    <div class="row justify-content-center mt-3">
        <div class="col-sm-4 col-lg-3 col-xl-2">
            <div class="profile text-center mt-1 p-3 bg-body">
                <ProfileImage/>
                <h4><NameView :profile="user"/></h4>
                <GameView/>
            </div>
        </div>
        <div class="col-sm-6">
            <NewPost/>
            <transition name="fade" mode="out-in">
                <ShowPost/>
            </transition>
            <p class="text-center mt-3 p-3 mx-auto d-block post">¯\_(ツ)_/¯ You're all caught up!</p>
        </div>
    </div>
</template>

<style scoped>
    .profileimg {
        margin-bottom: 2vh;
        box-shadow: 0px 0px 20px 4px rgba(0, 0, 0, 0.25);
    }
</style>

<script>
    import { mapState } from 'vuex';

    import ProfileImage from '@/views/partials/user/ProfileImage.vue'
    import NameView from '@/views/partials/user/NameView.vue';
    import GameView from '@/views/partials/user/GameView.vue';
    import NewPost from '@/views/partials/post/NewPost.vue';
    import ShowPost from '@/views/partials/post/ShowPost.vue';

    export default {
        computed: mapState(['user']),
        components: {
            ProfileImage,
            NameView,
            GameView,
            NewPost,
            ShowPost
        }
    }
</script>
