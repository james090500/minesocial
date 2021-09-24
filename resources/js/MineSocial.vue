<template>
    <main>
        <div class="page-wrapper with-navbar">
            <MainMenu/>
            <div class="content-wrapper">
                <transition name="fade" mode="out-in">
                    <router-view/>
                </transition>
                <MainFooter/>
                <button class="btn btn-square btn-primary rounded-circle dark-light-button" @click="toggleDarkMode">🌗</button>
            </div>
        </div>
    </main>
</template>

<style>
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
    import MainMenu from '@/partials/MainMenu.vue'
    import MainFooter from '@/partials/MainFooter'

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