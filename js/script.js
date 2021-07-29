const app = new Vue(
    {
        el: '#app',
        data: {
           url: 'db/db.php',
           albums: '' 
        },
        mounted(){
            axios
                .get(this.url)
                .then(response => {
                    this.albums = response.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        methods: {
           
        }

    }
);