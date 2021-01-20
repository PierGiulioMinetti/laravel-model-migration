require('./bootstrap');

import Vue from 'vue';

const app = new Vue({

    el: '#app',
    data: {
        bikes: [],
    },
    created(){

        
        // Make a request for a user with a given ID
        axios.get('http://127.0.0.1:8000/api/bikes')
          .then(response=> {
            // handle success
            console.log(response.data);
            this.bikes = response.data;
          })
          .catch(error=> {
            // handle error
            console.log(error);
          })
    }


}); //end vue instance
