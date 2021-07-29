const app = new Vue(
    {
        el: '#app',
        data: {
           url: 'db/db.php',
           albums: '' ,
           loader: false
        },
        mounted(){
            axios
                .get(this.url)
                .then(response => {
                    this.albums = response.data;
                    this.loader = true;
                })
                .catch(error => {
                    console.log(error);
                });
        },

    }
);