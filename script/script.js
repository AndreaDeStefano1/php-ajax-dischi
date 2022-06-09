var app = new Vue({
  el: '#app',
  data: {
    selectedAuthor: '',
    selectedGenre: '',
    discsArray: [],
    apiUrl: 'http://localhost/php-ajax-dischi/data-api/api.php?',
    genreArray: [],
    authorArray: []

  },
  mounted(){
    this.getApi()
  },
  methods:{
    getApi(){
      axios.get(this.apiUrl ,{
        params: {
          genre: this.selectedGenre,
          author: this.selectedAuthor
        }
      })
      .then(res => {
        console.log(res.data);
        this.discsArray = res.data.response
        res.data.response.forEach(element => {
          if(!this.genreArray.includes(element.genre)){
            this.genreArray.push(element.genre)
          }
        });
        res.data.response.forEach(element => {
          if(!this.authorArray.includes(element.author)){
            this.authorArray.push(element.author)
          }
        });
      })
    },
    getApiFiltered(){
      axios.get(this.apiUrl ,{
        params: {
          genre: this.selectedGenre,
          author: this.selectedAuthor
        }
      })
      .then(res => {
        console.log(res.data);
        this.discsArray = []

        res.data.response.forEach(element => {
          this.discsArray.push( element  )
        });
       
      })
    }
  }
})