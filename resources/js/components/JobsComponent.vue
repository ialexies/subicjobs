<template>
	<div>
		<h2>Jobs</h2>

        <div class="card card-body mb-2" v-for="article in articles" v-bind:key="article.id">
            <h3>{{article.title}}</h3>
            <p>{{article.description}}</p>
            <hr>
        </div>
		
	</div>
</template>
 
<script>
	export default {
		data(){
			return{
				name:'hello',
				articles:[],
				article:{
					id:'',
					title:'',
					description:''
				},
				article_id: '',
				pagination:{},
				edit:false
				}
			},
			created(){
				this.fetchArticles();
			},
			methods: {
				fetchArticles() {

					fetch('api/jobs') //url that fetch
					.then(res=>res.json()) // map the response into json
					.then(res => { //get the actual data
					this.articles=res.data; 
					console.log(res.data); //to get the actual data not an object, you need to get the res.data. 
				});
			}
		} 
	}
</script>
