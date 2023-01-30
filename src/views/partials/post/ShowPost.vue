<template>
    <section class="bg-white bg-very-dark-dm">
        <div class="p-15 pb-0">
            <div class="row">
                <div class="col-2 col-sm-1">
                    <ProfileImage :profile="post.author.username"/>
                </div>
                <div class="ml-10">
                    <strong class="d-block">
                        <router-link :to="`/profile/${post.author.uuid}`">
                            <NameView :profile="post.author"/>
                        </router-link>
                    </strong>
                    <small>{{Date.now() | formatDate}}</small>
                </div>
            </div>
            <p class="mt-1 text-wrap">lol</p>
        </div>
        <div class="row px-15 py-10 border-top">
            <div class="col">
                <h5 class="m-0 like-button">
                    <div>
                        <font-awesome-icon class="text-danger" icon="heart" v-if="post.likes.currentUser"/>
                        <font-awesome-icon class="text-danger" :icon="['far', 'heart']" v-else/>
                        <span>{{ post.likes.total }}</span>
                    </div>
                </h5>
            </div>
            <div class="col text-right">
                <button class="btn btn-danger btn-sm btn-outline text-dark-lm" v-if="post.author.uuid == user.uuid" v-on:click="deletePost()"><font-awesome-icon icon="trash-alt"/></button>
                <button class="btn btn-danger btn-sm" v-else v-on:click="flagPost()"><font-awesome-icon icon="flag"/></button>
            </div>
        </div>
    </section>
</template>

<style lang="scss">
    .like-button {
        cursor: pointer;
    }

    .youtube-vid {
        width: 480px;
        height: 270px;
    }

    @media(max-width: 567px) {
        .youtube-vid {
            width: 100%;
            height: 200px;
        }
    }
</style>

<script>
    import { mapState } from 'vuex'
    import ProfileImage from '@/views/partials/user/ProfileImage.vue'
    import NameView from '@/views/partials/user/NameView.vue'

    export default {
        data() {
            return {
                post: {
                    author: {
                        username: "james090500",
                        uuid: "ba4161c03a42496c8ae07d13372f3371"
                    },
                    likes: {
                        currentUser: true,
                        total: 100
                    }
                }
            }
        },
        computed: mapState(['user']),
        components: {
            ProfileImage,
            NameView
        }
    }
</script>