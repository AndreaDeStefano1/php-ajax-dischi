var app = new Vue({
  el: '#app',
  data: {
    selectedAuthor: 'all',
    selectedGenre: 'all',
    discArray: [],
    apiUrl: 'http://localhost/php-ajax-dischi/data-api/api.php'

  },
  mounted(){
    this.getApi()
  },
  methods:{
    getApi(){
      axios.get(this.apiUrl)
      .then(res => {
      
        this.discArray = res.data.response
      })
    }
  }
})