<template>
    <div class="row justify-content-center mt-3">
        <div class="col-sm-4 col-lg-3 col-xl-2">
            <div class="profile text-center mt-10 p-20 bg-white bg-very-dark-dm">
                <ProfileImage/>
                <h4><NameView :profile="user"/></h4>
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
        box-shadow: 0px 0px 20px 4px rgba(0, 0, 0, 0.25);
    }
</style>

<script>
    import { mapState } from 'vuex';

    import ProfileImage from '@/partials/user/ProfileImage'
    import NameView from '@/partials/user/NameView';
    import GameView from '@/partials/user/GameView';
    import NewPost from '@/partials/post/NewPost';
    import ShowPost from '@/partials/post/ShowPost';

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
