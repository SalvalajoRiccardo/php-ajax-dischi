<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>albums</title>
</head>
<body>
    <div id="app">
        <div class="text-center">
            <div class="hedg">
                <h1 >ALBUMS</h1>
            </div>

        </div>
        <div class="container text-center">
            <div class="row">
                <div v-for="album in albums" class="col-4 g-3 ">
                    <div v-if="loader == false">
                        <img src="https://i.pinimg.com/originals/2b/02/15/2b02159fee58d573c079ad5212d56b63.gif" alt="loader">
                    </div>

                    <div v-else class="alb">
                        <img :src="album.poster" :alt="album.title">
                        <h4>{{album.author}} : {{album.title}}</h4>
                        <span>Year: {{album.year}}</span>
                    </div>
                </div>
            </div>
        </div>
    <!-- bonus -->
        <div class="container text-center">
            <div v-for="genre in gen" class="row">
                <h2 class="spaz">{{genre}}</h2>
                <div v-if="genre == album.genre" v-for="album in albums" class="col-4 g-3 ">
                    <div v-if="loader == false">
                        <img src="https://i.pinimg.com/originals/2b/02/15/2b02159fee58d573c079ad5212d56b63.gif" alt="loader">
                    </div>
                    
                    <div v-else class="alb">
                        <img :src="album.poster" :alt="album.title">
                        <h4>{{album.author}} : {{album.title}}</h4>
                        <span>Year: {{album.year}}</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="js/script.js"></script>
</body>
</html>