var app = new Vue({
    el : '#app',
    data: {
        albums: [],
        genre: ['All'],
        selected:'All'
    },
    mounted(){
        axios
        .get('http://localhost/marzo/01-03-21/php-ajax-dischi/milestone-2/server.php')
        .then(result =>{
            //QUI PUSHO GLI ELEMENTI DENTRO COPERTINA
            this.albums = result.data;
            //QUI CON UN CICLO FOREACH FILTRO I GENERI MUSICALI
            this.albums.forEach(element => {
                if(!this.genre.includes(element.genre)){
                    this.genre.push(element.genre);
                }
            });
        });
    }
});