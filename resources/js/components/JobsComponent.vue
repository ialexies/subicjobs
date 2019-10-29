<template>
	<div>
		<h1>Jobs</h1>
        <br>
        <div class="card card-body mb-2" v-for="job in jobs" v-bind:key="job.id">
            
            <h3>{{job.company}}</h3>
                <hr>
            <div class="ml-4">
                <b>{{job.title}}</b>
                <p>{{job.description}}</p>
            </div>
         
        </div>
		
	</div>
</template>
 
<script>
	export default {
		data(){
			return{
				name:'hello',
				jobs:[],
				jobs:{
					id:'',
					title:'',
					company:'',
					description:''
				},
				job_id: '',
				pagination:{},
				edit:false
            }
        },
        created(){
            this.fetchJobs();
        },
		methods: {
				fetchJobs() {

					fetch('api/jobs') //url that fetch
					.then(res=>res.json()) // map the response into json
					.then(res => { //get the actual data
					this.jobs=res.data; 
					// console.log(res.data); //to get the actual data not an object, you need to get the res.data. 
				});
			}
		} 
	}
</script>
