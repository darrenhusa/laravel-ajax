
new Vue({
  el: '#room',
  // el: '#room_drop_down',

  data: {
    // skills: []
    rooms: []
  },

  mounted() {
      // axios.get('/skills').then(response => console.log(response.data));
      // axios.get('/skills').then(response => this.skills = response.data);
      axios.get('/load_available_rooms').then(response => this.rooms = response.data);

    }
  });

  new Vue({
    el: '#category',
    // el: '#room_category_drop_down',

    data: {
      // skills: []
      room_categories: []
    },

    mounted() {
        // axios.get('/skills').then(response => console.log(response.data));
        // axios.get('/skills').then(response => this.skills = response.data);
        axios.get('/load_categories').then(response => this.room_categories = response.data);
      }
    });
