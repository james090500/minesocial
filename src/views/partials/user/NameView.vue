<template>
    <span>{{ profile.username }}
        <span v-if="profile.verified">
            <span v-if="profile.uuid == 'ba4161c03a42496c8ae07d13372f3371'">
                <!-- <b-tooltip target="site-creator" title="Site Creator" placement="right"></b-tooltip> -->
                <span class="small text-secondary" id="site-creator" >
                    <font-awesome-icon icon="crown" size="xs" class="text-warning" />
                </span>
            </span>
            <span v-else>
                <!-- <b-tooltip target="verified" title="Verified" placement="right"></b-tooltip> -->
                <span class="small text-info" id="verified">
                    <font-awesome-icon icon="check" size="xs" class="align-baseline" />
                </span>
            </span>
        </span>
    </span>
</template>

<script>
    export default {
        props: {
            profile: Object
        }
    }
</script>