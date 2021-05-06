<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"> -->
    <!-- bootstrap v4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- jquery -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <!-- vue -->
     <script src="https://cdn.jsdelivr.net/npm/vue@2.x"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            color: black;
            /*debug*/
            background-color: darkorange;
        }

        .main-container {
            /*debug*/
            /*background-color: red;*/
        }

        .head-bar {
            text-align: center;
            margin-top: 20px;
            /*debug*/
            /*background-color: hotpink;*/
        }

        .albums-box {
            margin: 10px;
            padding: 20px;
        }

        .album-information {
            text-align: center;
            margin-top: 10px;
            /*debug*/
            /* background-color: red;*/
        }

        .album-information span {
            font-weight: bold;
        }
        .container img {
            width: 100%;
        }




    </style>

    <!-- VUE JS -->

    <script>
        function initVue(){

            new Vue({
                el: '#app',
                data: {

                    albums:[],
                },

                mounted() {

                    axios.get('data.php')
                        .then((data) => {
                            this.albums = data.data.response;

                        })
                        .catch(() => console.log('error'));
                },

            })
        }

        function init() {
            initVue();

        }
        document.addEventListener('DOMContentLoaded', init);


    </script>

    <title>PHP - Vue - dischi</title>
    <?php
    //require_once 'data.php';
    ?>


</head>
<body>
<div id="app" class="container">
    <div class="row">

        <!-- HEADER -->

        <div class="col-12 head-bar">
            <div>
                <h1>Albums</h1>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 main-container"
             v-for="">
            <div class="albums-box">
                <div class="poster-box">
                    <img :src="" :alt="">
                </div>
                <!-- info ALBUMS -->
                <div class="album-information">
                    <div class="box-title">
                        <h3>{{  }}</h3>
                    </div>
                    <div>
                        <p><span>Author: </span>{{  }}</p>
                    </div>
                    <div>
                        <p><span>Genre: </span>{{  }}</p>
                    </div>
                    <div>
                        <p><span>Year: </span>{{  }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>