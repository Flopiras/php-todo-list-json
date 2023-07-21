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
        addNewTask(){
            const data = {'text': this.newTask};

            const config = {headers : {'Content-type': 'multipart/form-data'}}

            axios.post('http://localhost/php-todo-list-json/api/index.php', data, config)
            .then(res => { this.tasks = res.data; })
        }
    },
    created() {
        axios.get('http://localhost/php-todo-list-json/api/index.php')
        .then(res => {
            this.tasks = res.data;
        })
    }
});

app.mount('#root');