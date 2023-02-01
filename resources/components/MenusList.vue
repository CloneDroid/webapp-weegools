<template>
    <div>
        <div v-for="announcement in announcements" :key="announcement.id">
            <h2>{{ announcement.header }}</h2>
            <p>{{ announcement.description }}</p>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            announcements: []
        }
    },
    mounted() {
        axios.get('/api/announcements')
        .then(response => {
            this.announcements = response.data;
        });
    }
}
</script>
