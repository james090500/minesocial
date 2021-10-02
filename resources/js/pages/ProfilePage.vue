<template>
    <div class="row justify-content-center mt-3">
        <div class="col-sm-8" v-if="profile">
            <section class="profile-head bg-dark-dm bg-white">
                <img class="profile-header-image img-fluid" src="https://placekitten.com/g/1920/512">
                <div class="row px-15 pb-15">
                    <div class="col-2">
                        <div class="bg-white bg-dark-dm profile-image">
                            <ProfileImage class="p-10" :profile="profile.uuid"/>
                        </div>
                    </div>
                    <div class="col-2 mb-10">
                        <div class="ml-10">
                            <h3 class="mb-0"><NameView :profile="profile"/></h3>
                            <GameView/>
                        </div>
                    </div>
                    <div class="col">
                        <ProfileButton :profile="profile" class="profile-buttons"/>
                    </div>
                </div>
            </section>
        </div>
    </div>
</template>

<style>
    .profile-head {
        box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.32);
        margin: 2vh 0;
    }

    .profile-image {
        position: absolute;
        bottom: 0;
        box-shadow: 0px 0px 20px 4px rgba(0, 0, 0, 0.25);
    }

    .profile-buttons {
        right: 0;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }
</style>

<script>
    import ProfileImage from '@/partials/user/ProfileImage'
    import NameView from '@/partials/user/NameView'
    import GameView from '@/partials/user/GameView'
    import ProfileButton from '@/partials/profile/ProfileButton'

    export default {
        watch: {
            '$route.params.uuid': {
                handler: function() {
                    this.getProfile();
                },
                immediate: true
            }
        },
        data() {
            return {
                uuid: null,
                profile: null
            }
        },
        created() {
            this.getProfile();
        },
        methods: {
            getProfile() {
                this.profile = null;
                this.uuid = this.$route.params.uuid;

                axios.get(`/api/profile/${this.uuid}`).then((response) => {
                    this.profile = response.data
                    document.title = `${this.profile.username}  | MineSocial`
                })
            }
        },
        components: {
            ProfileImage,
            NameView,
            GameView,
            ProfileButton
        }
    }
</script>