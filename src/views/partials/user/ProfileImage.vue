<template>
    <img v-if="profile != null" :src="`https://minecraftapi.net/api/v1/profile/${profile}/avatar?size=256&overlay=true`" class="img-fluid">
    <img v-else :src="`https://minecraftapi.net/api/v1/profile/${user.uuid}/avatar?size=256&overlay=true`" class="img-fluid">
</template>

<script>
    import { mapState } from 'vuex'
    export default {
        props: {
            profile: String
        },
        computed: mapState(['user'])
    }
</script>