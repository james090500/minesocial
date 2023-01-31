<template>
    <section class="bg-body bg-very-dark-dm">
        <div class="row p-20 mt-10">
            <div class="col-3 col-sm-1">
                <ProfileImage/>
            </div>
            <div class="col-9 col-sm-11 pl-10">
                <textarea class="form-control h-100" placeholder="Post something new" maxlength="500"></textarea>
            </div>
        </div>
        <div class="row px-20 pb-10">
            <div class="col">
                <button class="btn btn-info"><font-awesome-icon icon="camera" size="xs"/></button>
            </div>
            <div class="col text-right">
                <button class="btn btn-success">Post</button>
            </div>
        </div>
    </section>
</template>

<script>
    import { mapState } from 'vuex'
    import ProfileImage from '@/views/partials/user/ProfileImage.vue'

    export default {
        computed: mapState(['user']),
        components: {
            ProfileImage
        }
    }
</script>
