<template>
	<!-- Page Wrapper -->
	<div class="flex h-screen overflow-hidden bg-[#F1F5F9]">

		<!-- Sidebar -->
		<Sidebar :sidebarToggle="sidebarToggle" @toggleSidebar="callback"></Sidebar>

		<!-- Content Area -->
		<div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">

			<!-- Navbar --> 
			<Navbar @toggleSidebar="callback"></Navbar>

			<!-- Main Content Area -->
			<div class="grid grid-cols-12 gap-5 m-5">
				<slot></slot>
			</div>

		</div>

	</div>
</template>

<script>
import Navbar from '@/Layouts/Navbar.vue';
import Sidebar from '@/Layouts/Navside.vue';

export default {
	components: {
		Navbar,
		Sidebar
	},
	data() {
		return {
			sidebarToggle: false,
		}
	},
	methods: {
		callback () {
			this.sidebarToggle = !this.sidebarToggle;
		}
	}
}
</script>

<style>

</style>