require('./bootstrap');


                            var mygiphyAPIKey = '9W5jVaY7kWseQxmqI3eOJtyPapMY7bag';

                            Vue.component('giphy-results', {
                              data: function () {
                                return {
                                  apptittle: 'Gif Comments',
                                  searchterm:'',
                                  giphyResults: {}
                                }
                              },
                              methods: {
                                giphySearch  ()
                                {
                                  axios.get('https://api.giphy.com/v1/gifs/search?api_key=' +mygiphyAPIKey+
                                        '&q='+this.searchterm)
                                        .then( responce => {
                                          this.giphyResults = responce.data.data;


                                        });
                                }
                              },
                              template: `
                                <div id="giphy-results">
                                  <h1 v-text="apptittle" class="title is-1"></h1>
                                  <form @submit.prevent="giphySearch">
                                    <input v-model="searchterm" type="search" class="input"
                                      placeholder="Enter a search term.">
                                    <input type="submit" value="Submit Search" class="input">
                                  </form>

                                  <ul v-for="gif in giphyResults" class="columns">
                                    <li class="column">
                                      <a v-bind:src="gif.url" target="_blank">
                                        <img v-bind:src="gif.images.fixed_width.url"
                                          v-bind:alt="gif.slug">
                                      </a>
                                    </li>

                                  </ul>
                                </div>
                              `

                            } );
                              var giphySearch = new Vue ( {
                                el: '#giphy-search-container'

                              });
