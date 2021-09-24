<template>
    <div class="d-flex">
        <span v-if="user.uuid != profile.uuid">
            <span v-if="profile.friend.isFriend">
                <button class="btn btn-sm btn-secondary" :click="removeFriend"><font-awesome-icon icon="user-slash"/> Remove Friend</button>
            </span>
            <span v-else-if="profile.friend.requestSent">
                <button class="btn btn-sm btn-primary" :click="cancelRequest"><font-awesome-icon icon="user-clock"/> Friend Request Sent</button>
            </span>
            <span v-else-if="profile.friend.requestRecieved">
                <button class="btn btn-sm btn-primary" :click="acceptFriend"><font-awesome-icon icon="user-check"/> Accept Friend Request</button>
                <button class="btn btn-sm btn-danger" :click="declineFriend"><font-awesome-icon icon="user-times"/> Deny Friend Request</button>
            </span>
            <span v-else>
                <button class="btn btn-sm btn-success" :click="addFriend"><font-awesome-icon icon="user-plus"/> Add Friend</button>
            </span>
            <button class="btn btn-sm btn-secondary"><font-awesome-icon icon="comments"/> Message</button>
            <button class="btn btn-sm btn-danger"><font-awesome-icon icon="flag"/> Report</button>
        </span>
    </div>
</template>

<script>
    import { mapState } from 'vuex'
    export default {
        props: {
            profile: Object
        },
        computed: mapState(['user'])
    }
</script>