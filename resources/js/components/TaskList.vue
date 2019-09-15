<template>
 <div>
     <button @click="fetchTaskList()">Show List</button>
     <ul>
         <li v-for="task in list" v-bind:key="task.id">
             {{task.body}}
         </li>
     </ul>
 </div>
</template>
<script>
export default {
	data() {
		return {
			list: [],
			task: {
				id: "",
				body: ""
			}
		};
	},
	created() {
		this.fetchTaskList();
	},
	methods: {
		fetchTaskList() {
			axios
				.get("api/tasks")
				.then(res => {
					this.list = res.data;
				})
				.catch(err => console.error(err));
		}
	}
};
</script>