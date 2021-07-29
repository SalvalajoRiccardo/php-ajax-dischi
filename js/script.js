const app = new Vue(
    {
        el: '#app',
        data: {
           url: 'db/db.php',
           albums: '' ,
           gen:[],
           loader: false
        },
        mounted(){
            axios
                .get(this.url)
                .then(response => {
                    this.albums = response.data;
                    this.loader = true;
                    response.data.forEach(element => {
                        if (!this.gen.includes(element.genre)){
                            this.gen.push(element.genre)
                            ;
                        }
                        
                    }) 
                    console.log(this.gen)
                })
                .catch(error => {
                    console.log(error);
                });

                
        },

    }
);

