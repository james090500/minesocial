<template>
    <header class="bg-white bg-very-dark-dm z-50">
        <div class="header row justify-content-center px-15">
            <div class="col-sm-3 col-lg-2">
                <h4 class="m-0 my-5"><router-link class="text-dark text-light-dm" to="/">MineSocial</router-link></h4>
            </div>
            <div class="col-sm-7 col-lg-4">
                <div class="form-inline py-10">
                    <input class="form-control" v-model="search" placeholder="Username"/>
                    <button class="btn btn-primary"><font-awesome-icon icon="search"/></button>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="text-right my-5">
                    <!-- <userNotifications/> -->
                    <div class="dropdown with-arrow">
                        <button class="btn btn-link text-dark text-light-dm" data-toggle="dropdown"><NameView :profile="user"/> <font-awesome-icon icon="angle-down"/></button>
                        <div class="dropdown-menu">
                            <router-link class="dropdown-item" :to="`/profile/${user.uuid}`">Your Profile</router-link>
                            <router-link class="dropdown-item" to="/account/logout">Logout</router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>

<style lang="scss" scoped>
    header {
        position: relative;
        min-height: 5rem;
    }

    .header {
        position: fixed;
        width: 100%;
        z-index: 1000;
        min-height: 5rem;
    }
</style>

<script>
    import { mapState } from 'vuex'
    import NameView from '@/partials/user/NameView'

    export default {
        data() {
            return {
                search: null
            }
        },
        computed: mapState(['user']),
        components: {
            NameView
        }
    }
</script>

