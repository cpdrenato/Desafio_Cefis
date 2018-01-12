<template>
            
            <div class="carousel">
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
    
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
