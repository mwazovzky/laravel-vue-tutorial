<template>
    <div>
        <h1>Tasks Index</h1>
        <table class="tasks-index">
            <tr>
                <th class="tasks-column">ID</th>
                <th class="tasks-column">Name</th>
                <th class="tasks-column">Priority</th>
            </tr>
            <tr v-for="task in tasks" :key="task.id">
                <th class="tasks-column">{{ task.id }}</th>
                <th class="tasks-column">{{ task.name }}</th>
                <th class="tasks-column">{{ task.priority }}</th>
            </tr>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            tasks: []
        }
    },
    created() {
        axios.get('/api/tasks')
            .then((response) => this.tasks = response.data.data)
            .catch((error) => console.log(error))
    }
}
</script>

<style scoped>
    .tasks-index { 
        border: 1px solid rgb(222, 222, 222); 
        border-collapse: collapse; 
    }
    .tasks-column { 
        border: 1px solid rgb(222, 222, 222); 
        padding: 5px; 
    }
</style>
