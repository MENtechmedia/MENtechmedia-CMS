<template>
<div v-if="inputController !== null" @keyup.9.capture.prevent.stop>
	<div class="col-lg-12 reset-padding " style="height: 100%;">

			<!-- The attribute field's title -->
			<p 
				style=" text-transform: capitalize" 
				class="
					font-sm text-bold text-color-dark 
					inline-block
					space-inside-up-xs space-inside-down-sm space-inside-right-sm 
					"
			>{{ attribute.translation }}</p>


			<!-- The WalkThrough for this input -->
			<div v-if="attribute.walkThrough !== undefined" class="inline-block">
				<tooltip :walkThrough="attribute.walkThrough"></tooltip>
			</div>

		</div>
	<textarea
		
		@keyup="inputController.trackInput();"
		:id="attributeName + identifier"
		v-model="inputController.input"
		

		class="
			border border-secondary border-curved outline-none
			space-inside-sides-md space-inside-sm
			inline-block
			bg-secondary
			" :placeholder="attribute.translation" style="height: 150px; width: 100%; resize: none;"  :name="attributeName"  required></textarea>
	<!-- A display to display the errors -->
	 <validation-display  v-if="attribute.validation !== undefined" :errors="attribute.validation.errors"> </validation-display>
</div>
</template>

<script type="text/javascript">
	import InputController from '../../../app/inputController/inputController';

	export default {
		props: {
			attributeName: null,
			attribute: null,
			identifier: null,
			value: "",
		}, 

		data() {
			return {
				inputController: null,
			}
		},

		mounted() {
			this.inputController = new InputController(this.attributeName, this.attribute, this.identifier, this.value);
		},

	}
</script>