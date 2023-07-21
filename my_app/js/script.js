console.log('Vue OK', Vue);

const {createApp} = Vue;

const app = createApp({
    data() {
        return{
            tasks: [],
            newTask: '',
        }
    },
    methods: {
        AddNewTask(){
            const data = this.newTask;

            const config = {Headers : {'Content-type': 'multipart/form-data'}}

            axios.post('localhost/php-todo-list-json/api/index.php/tasks/', data, config)
            .then(res => { this.tasks = res.data; })
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