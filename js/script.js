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

      self.arrayDischi.foreach(function (item) {
        if (!self.generi.includes(item.genere)) {
          self.generi.push(item.genere);
        }
      });
    });
  }
});
  Vue.config.devtools = true
