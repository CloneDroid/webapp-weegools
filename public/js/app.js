import './bootstrap';

import Alpine from 'alpinejs';
import Vue from 'vue'
import AnnouncementsList from '../components/AnnouncementsList.vue'

window.Alpine = Alpine;

Alpine.start();


Vue.component('announcements-list', AnnouncementsList);

const app = new Vue({
    el: '#app',
});