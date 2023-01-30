<template>
    <main>
        <MainMenu/>
        <div id="content" class="container-fluid">
            <router-view v-slot="{ Component }">
                <transition name="fade" mode="out-in">
                    <component :is="Component" />
                </transition>
            </router-view>
        </div>
        <MainFooter/>
        <button class="btn btn-square btn-primary rounded-circle dark-light-button" @click="toggleDarkMode">🌗</button>
    </main>
</template>

<style lang="scss">
    //Halfmoon
    @use '~/bootstrap/scss/bootstrap';

    //Vue animation
    .fade-enter-active, .fade-leave-active {
        transition: opacity .25s;
    }
    .fade-enter, .fade-leave-to {
        opacity: 0;
    }

    body {
        background-repeat: no-repeat !important;
        background-position: center !important;
        background-size: cover !important;
        background-attachment: fixed !important;
        height: 100vh !important;
    }

    .dark-light-button {
        position: absolute;
        right: 2rem;
        bottom: 1rem;
    }
</style>

<script>
    import MainMenu from '@/views/partials/MainMenu.vue'
    import MainFooter from '@/views/partials/MainFooter.vue'

    export default {
        created() {
            document.body.style.backgroundImage = `url('/images/backgrounds/${Math.floor(Math.random() * 25) + 1}.jpg')`;
        },
        components: {
            MainMenu,
            MainFooter
        },
        watch: {
            $route: {
                handler: function(to, from) {
                    if(to.meta.title != null) {
                        document.title = `${to.meta.title}  | MineSocial`
                    }

                    if(this.user && this.user.notification) {
                        this.showNotification = true;
                    }
                },
                immediate: true
            }
        },
        methods: {
            toggleDarkMode() {
                window.halfmoon.toggleDarkMode()
            }
        }
    }
</script>