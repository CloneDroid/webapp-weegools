<template>
    <div class="col-md-6">
        <div class="blog d-block d-lg-flex" v-for="announcement in announcements" :key="announcement.id">
            <div class="bg-image" style="background-image: url('assets/img/dishes_1.jpg');"></div>
                <div class="text">
                    <h3>{{announcement.header}}</h3>
                    <p class="sched-time">
                    <span><span class="fa fa-calendar"></span>{{announcement.date_added}}</span> <br>
                    </p>
                    <p v-if="announcement.description.split('\n').length > 3">{{announcement.description.split('\n').slice(0,3).join('\n')}}...</p>
                    <p v-else>{{announcement.description}}</p>
                    
                    <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
                </div>
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
