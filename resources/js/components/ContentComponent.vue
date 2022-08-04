<template>
    <header-component/>
    <intro-component/>
    <history-component/>
</template>

<script>
import HeaderComponent from "./HeaderComponent";
import IntroComponent from "./IntroComponent";
import HistoryComponent from "./HistoryComponent";

export default {
    name: "ContentComponent",
    components: {HistoryComponent, IntroComponent, HeaderComponent,}
}
</script>

<style scoped>

</style>
