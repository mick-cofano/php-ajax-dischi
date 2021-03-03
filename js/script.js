new Vue({
  el: '#app',
  data: {
    arrayDischi: [],
    generi: ['ALL'],
    genereSelezionato: 'ALL'
  },

  mounted() {
    const self = this;

    axios.get("app/server.php")
    .then(function (response) {
      self.arrayDischi = response.data;
      console.log(self.arrayDischi);
    });
  },

});
  Vue.config.devtools = true
