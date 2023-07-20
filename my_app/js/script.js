console.log('Vue OK', Vue);

const {createApp} = Vue;

const app = createApp({
    data(){
        return{
            tasks: []
        }
    },
    created(){
        axios.get('localhost/php-todo-list-json/api/index.php/tasks/')
        .then(res => {
            console.log(res.data)
        })
    }
});

app.mount('#root');