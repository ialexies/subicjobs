<template>
	<div>
		<h2>
			Articles
			<div class="card card-body mb-2" v-for="article in articles" v-bind:key="article.id">
				<h3>{{article.title}}</h3>
				<p>{{article.body}}</p>
			</div>
		</h2>
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
					body:''
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
					alert('fdf');
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
