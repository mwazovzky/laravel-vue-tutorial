<template>
    <div>
        <h1>Tasks Index</h1>
        <table class="tasks-index">
            <tr>
                <th class="tasks-column">ID</th>
                <th class="tasks-column">Name</th>
                <th class="tasks-column">Priority</th>
                <th class="tasks-column"></th>
                <th class="tasks-column"></th>
            </tr>
            <tr v-for="(task, index) in tasks" :key="task.id">
                <td class="tasks-column">{{ task.id }}</td>
                <td class="tasks-column">{{ task.name }}</td>
                <td class="tasks-column">{{ task.priority }}</td>
                <td class="tasks-column">
                    <button class="btn btn-edit" @click="edit(index)">Edit</button>
                </td>
                <td class="tasks-column">
                    <button class="btn btn-destroy" @click="destroy(index)">Destroy</button>
                </td>
            </tr>
            <tr>
                <td class="tasks-column"></td>
                <td class="tasks-column">
                    <input type="text">
                </td>
                <td class="tasks-column">
                    <input type="text">
                </td>
                <td class="tasks-column">
                    <button class="btn btn-save" @click="save(index)">Save</button>
                </td>
                <td class="tasks-column">
                    <button class="btn btn-reset" @click="reset(index)">Reset</button>
                </td>
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
    },
    methods: {
        edit(index) {
            console.log(`editing... ${index}`)
        },
        destroy(index) {
            console.log(`destroing... ${index}`)
        }
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
    .btn {
        border: 1px solid rgb(222, 222, 222);
        border-radius: 4px;
        padding: 2px 5px;
        width: 100%;
    }
    .btn-edit {
        background-color: rgb(0, 222, 222);
        color: white;
    }
    .btn-destroy {
        background-color: rgb(255, 0, 0);
        color: white;
    }
    .btn-save {
        background-color: rgb(0, 222, 0);
        color: white;
    }
    .btn-reset {
        background-color: rgb(255, 0, 0);
        color: white;
    }
</style>
