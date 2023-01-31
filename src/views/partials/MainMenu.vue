<template>
    <header class="bg-body py-3 container-fluid">
        <div class="row justify-content-center">
            <div class="col-2">
                <h4><router-link to="/">MineSocial</router-link></h4>
            </div>
            <div class="col-5">
                <div class="row">
                    <div class="col">
                        <input class="form-control" v-model="search" placeholder="Username" :disabled="this.searching" :class="{ 'is-invalid': this.failedSearch }"/>
                    </div>
                    <div class="col-1 d-grid">
                        <button type="button" class="btn btn-primary" @click="doSearch" :disabled="this.searching">
                            <font-awesome-icon icon="search" v-if="!this.searching"/>
                            <font-awesome-icon icon="cog" spin v-else/>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-2 text-end">
                <div class="dropdown">
                    <button class="btn btn-link text-decoration-none" data-bs-toggle="dropdown">
                        <NameView :profile="user"/> <font-awesome-icon icon="angle-down"/>
                    </button>
                    <div class="dropdown-menu">
                        <router-link class="dropdown-item" :to="`/profile/${user.uuid}`">Your Profile</router-link>
                        <router-link class="dropdown-item" to="/account/logout">Logout</router-link>
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>

<style lang="scss" scoped>

</style>

<script>
    import { mapState } from 'vuex'
    import NameView from '@/views/partials/user/NameView.vue'

    export default {
        data() {
            return {
                search: null,
                searching: false,
                failedSearch: false
            }
        },
        methods: {
            doSearch() {
                this.failedSearch = false;
                this.searching = true;

                axios.post('/api/search', {
                    search: this.search
                }).then((response) => {
                    this.$router.push(`/profile/${response.data.uuid}`)
                    this.search = null;
                }).catch(() => {
                    this.failedSearch = true;
                }).finally(() => {
                    this.searching = false;
                })
            }
        },
        computed: mapState(['user']),
        components: {
            NameView
        }
    }
</script>

