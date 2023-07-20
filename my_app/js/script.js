console.log('Vue OK', Vue);

const {createApp} = Vue;

const app = createApp({
    data(){
        return{
            tasks: []
        }
    },
    created() {
        axios.get('http://localhost/php-todo-list-json/api/index.php/tasks/')
        .then(res => {
            this.tasks = res.data;
        })
    }
});

app.mount('#root');