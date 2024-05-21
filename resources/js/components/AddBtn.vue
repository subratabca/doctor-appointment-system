<template>
	<div>
		<div class="form-inline" v-for="(input,index) in inputs" :key="index" style="margin-bottom: 10px;">

			<div class="form-group"  style="margin-right:5px;">
				<label style="margin-right:2px;">Medicine</label>
				<input type="text" name="medicine[]" class="form-control" style="width:200px;">
			</div>

			<div class="form-group" style="margin-right: 10px;">
				<label style="margin-right:2px;">Uses</label>
				<input type="text" name="procedure_to_use_medicine[]" class="form-control" style="width: 350px;">
			</div>

			<span>
				<a href="" @click.prevent="add(index)" v-show="index== inputs.length-1" style="color: green;"><button class="btn btn-success btn-sm">+</button></a>

				<a href="" @click.prevent="remove(index)" v-show="index || (!index && inputs.length >1) "><button class="btn btn-danger btn-sm">-</button></a>
			</span>

		</div>
	</div>
</template>

<script type="text/javascript">
	export default{
		data(){
			return{
				inputs:[{}]
			}
		},
		methods:{
			add(){
				this.inputs.push({
					medicine:''
				})
			},
			remove(index)
			{
				this.inputs.splice(index,1)
			}
		}

	}
</script>