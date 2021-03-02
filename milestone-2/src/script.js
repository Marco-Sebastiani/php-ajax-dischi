var app = new Vue({
    el : '#app',
    data: {
        albums: []
    },
    mounted(){
        axios
        .get('server.php')
        .then(result => {
            this.albums = result.data;
        });
    }
});