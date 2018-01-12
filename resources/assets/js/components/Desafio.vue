<template>
        <div v-bind:class="defineCor">

            <div v-bind:class="carousel">
                <div class="cursos">

                </div>
                <a id="cursos-prev" class="left carousel-control" role="button">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a id="cursos-next" class="right carousel-control" role="button">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
</template>

<script>
    export default {
        props:['titulo','cor'],
        computed:{
          defineCor: function(){
            return "carousel";
          }
        }
    }
</script media="screen">

<style>
.carousel {
    height: 30%;
}

.carousel-control {
    width: 30px;
}

.carousel-control.left,
.carousel-control.right {
    background-image: none;
}

.cursos,
.curso,
.slick-list,
.slick-track,
.curso-link,
.curso-image {
    height: 100%;
}

.cursos {
    padding: 0 30px;
}

.curso {
    position: relative;
    box-shadow: 0 0 5px #aaaaaa;
    margin: 0 5px;
}

.curso-image {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 50% 50%;
}

.curso-title {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 100px;
    background-image: linear-gradient(to bottom, rgba(0,0,0,0), #000000);
}

.curso-title > p {
    text-align: center;
    position: absolute;
    bottom: 0;
    width: 100%;
    font-size: 20px;
    color: #ffffff;
    font-weight: bold;
    text-transform: uppercase;
    padding: 5px;
}

.curso-resume {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(to bottom, rgba(0,0,0,0.4), #000000);
}

.curso-resume > p {
    text-align: justify;
    position: absolute;
    bottom: 0;
    width: 100%;
    font-size: 12px;
    color: #ffffff;
    padding: 10px 20px;
}
</style>
