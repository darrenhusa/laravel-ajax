
new Vue({
  el: '#root',

  data: {
    // skills: []
    rooms: []
  },

  mounted() {
      // axios.get('/skills').then(response => console.log(response.data));
      // axios.get('/skills').then(response => this.skills = response.data);
      axios.get('/available_rooms').then(response => this.rooms = response.data);

    }
  });

  new Vue({
    el: '#category',

    data: {
      // skills: []
      room_categories: []
    },

    mounted() {
        // axios.get('/skills').then(response => console.log(response.data));
        // axios.get('/skills').then(response => this.skills = response.data);
        axios.get('/room_categories').then(response => this.room_categories = response.data);
      }
    });
